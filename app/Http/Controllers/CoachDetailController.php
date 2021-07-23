<?php

namespace App\Http\Controllers;
use App\Models\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\customer_details;
use App\Models\Response;


class CoachDetailController extends Controller
{
    // public function index()
    // {
        
    //     $users = DB::table('customer_details')
    //     ->join('user_package', 'customer_details.id' , '=',  'user_package.user_id') 
    //     ->join('package', 'user_package.pack_id' , '=',  'package.id')                
    //     ->select('customer_details.*', 'user_package.*','package.*')
    //     ->get()->toArray();
       
    //     $userQA =array();

    //     foreach($users as $data){
    //         $userQA = DB::table('user_ques')->where('user_id',$data->user_id)->orderBy('added_at')->get()->toArray();
    //     }   
    //  return view('coach.index', ['users'=>$users ,'userQA'=>$userQA]); 
    //     // return view('coach.index');
    // }
    
      public function index()
    {
        
        $users1 = DB::table('customers')
        ->join('customer_questions', 'customers.id' , '=',  'customer_questions.customer_id')->select('customers.*', 'customer_questions.*')
        ->get()->toArray();
        $users = DB::table('customers')->orderBy('created_at','Desc')->get()->toArray();
        $userQA =array();
        //  print_r(  $users);die;

        // foreach($users as $data){
        //     $userQA = DB::table('user_ques')->where('user_id',$data->user_id)->orderBy('added_at')->get()->toArray();
        // }   
     return view('coach.index', ['users'=>$users ]); 
        // return view('coach.index');
    }
    
     public function response($id)
    {
        $userQA = DB::table('customer_questions')->find( $id);
        //  print_r(  $userQA);die;
        
        return view('coach.response',['userQA'=>$userQA]);
    } 
    public function saveresponse(Request $request,$id)
    {   
       $request->validate([
            'kt_ckeditor_2' => 'required',
        ]);
        
         $userQA = DB::table('customer_questions')->find( $id);
       // print_r($request->input());die;
        $userid=$userQA->customer_id;
        $usertype=$userQA->customer_type;
        $coachid=$request->coachid;

         $data = new Response();
        $data->user_id = $userid;
        $data->coach_id = $coachid;
        $data->uesr_type =  $usertype;
        $data->ques_id = $id;
        $data->answer = $request->kt_ckeditor_2;
        $data->save();
        $result= DB::table('customer_questions')->where('id', $id)->update(array('status'=>1));
           if(isset($result))
           {
            return redirect()->back()->with('message', 'Rsponse added successfully.');
           }else{
            return redirect()->back()->with('message', 'Try again later');
           }

      
    } 
    public function profile($id)
    {
        $coach = Coach::find($id);         
        return view('coach.profile',['profile' => $coach]);
    }
    public function edit_profile($id)
    {
        $coach = Coach::find($id);         
        return view('coach.edit_profile',['profile' => $coach]);
    }




    public function create()
    {
        return view('auth.coach-forgot-password');
    }

    public function store(Request $request)
    {    
        $request->validate([
            'email' => 'required|email',
        ]);

      $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }


public function update_coach(Request $request, $id)
    {   
        $coach = Coach::find($id); 
        // dd($coach);
        $request->validate([
            'firstname' => 'required',
            'phone' => 'required',
            'email' => 'required',           
            'qualification'  => 'required',
            'expertise' => 'required',                          
        ]);
         if ($request->hasFile('profile_avatar')) {
              $name = $request->file('profile_avatar')->getClientOriginalName(); 
        $myfile = time().$name;
        $request->file('profile_avatar')->storeAs('/coach/profile', $myfile);
         $coach->photo= $myfile;
        
         
         
         }
        

        // $name = $request->file('profile_avatar')->getClientOriginalName(); 

        // $myfile = time().$name;      
    
            $coach->name = $request->firstname;
            $coach->phone = $request->phone;
            $coach->email = $request->email;          
            $coach->qualification  = $request->qualification;     
            $coach->expertise = $request->expertise;  
            $coach->update();
          
        // $request->file('profile_avatar')->storeAs('/coach/profile', $myfile);          

        return redirect()->back();
    }






}
