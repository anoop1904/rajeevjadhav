<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coach;
use App\Models\Guest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    
    public function index()
    {     
        $users = DB::table('customer_details')
        ->join('user_package', 'customer_details.id' , '=',  'user_package.user_id') 
        ->join('package', 'user_package.pack_id' , '=',  'package.id')                
        ->select('customer_details.*', 'user_package.*','package.*')
        ->get()->toArray();
       
        $userQA =array();

        foreach($users as $data){
            $userQA = DB::table('user_ques')->where('user_id',$data->user_id)->orderBy('added_at')->get()->toArray();
        }
         $countreg = Customer::where('status','=','0')->count();
        $countgust = Guest::where('status','=','0')->count();
        $totalcustomer = $countreg + $countgust;
        $paidcust = DB::table('user_package')->distinct('user_id')->get()->count();
        $gross= DB::table('user_package')->get()->sum('total_amount');
     return view('admin.index', ['users'=>$users ,'userQA'=>$userQA, 'totalcustomer'=>$totalcustomer,'paidcust'=>$paidcust,'gross'=>$gross]);  
        // $customer =  new customer_details();
        // $customer_data = $customer->all();
        // return view('admin.index',['c_data'=> $customer_data]);
    }

   public function profile($id)
    {
        $coach = User::find($id);         
        return view('admin.profile',['profile' => $coach]);
    }
    
      public function edit_profile($id)
    { 
       
        $user = User::find($id);    
        
        return view('admin.editadminprofile',['profile' => $user]);
    }


    public function update_profile(Request $request,$id)
    {
        $User = User::find($id); 
        // dd($coach);
        $request->validate([
            'firstname' => 'required',
           
            'email' => 'required',           
                                 
        ]);
         if ($request->hasFile('profile_avatar')) {
              $name = $request->file('profile_avatar')->getClientOriginalName(); 
              $myfile = time().$name;
             $request->file('profile_avatar')->storeAs('/admin/profile', $myfile);
             $User->photo= $myfile; 
         }
            $User->name = $request->firstname;
            $User->phone = $request->phone;
            $User->email = $request->email;          
             
            $User->update();
          
            

        return redirect()->back();

    }
    
    public function edit_coachprofile($id)
    {
        $coach = Coach::find($id);         
        return view('admin.coach.edit_profile',['profile' => $coach]);
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
            $coach->name = $request->firstname;
            $coach->phone = $request->phone;
            $coach->email = $request->email;          
            $coach->qualification  = $request->qualification;     
            $coach->expertise = $request->expertise;  
            $coach->update();        

        return redirect()->back();
    }
}
