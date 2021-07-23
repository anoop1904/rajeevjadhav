<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;
use App\Mail\CoachRegister;



class RegisteredCoachController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.coach.add');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {       
         $myfile="";
         $role=1;//BY DEFAULT VALUE IN CASE
        $request->validate([
            'firstname' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'role'=> 'required',
            'profile_avatar' => 'required',                       
        ]);

        if ($request->hasFile('profile_avatar')) {
        $name = $request->file('profile_avatar')->getClientOriginalName(); 
        $myfile = time().$name;  
        $request->file('profile_avatar')->storeAs('/coach/profile', $myfile);
        }
         if($request->input('role')) {
        $role = implode(',',$request->role);
       }
        $coach = Coach::create([
            'name' => $request->firstname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'qualification'  => $request->qualification,     
            'expertise' => $request->expertise,
            'role' => $role,
            'about' => $request->about_coach,  
            'photo' => $myfile,
            'status' => 0,                 
        ]);   
              
        event(new Registered($coach));
        
       
        // Auth::login($coach);
        
       
     
        $details = [
            'title' => 'Register as new coach',
            'body' => 'You are register as new coach, you can access your profile',
            'email' => $request->email,
            'password' => $request->password,
        ];

        Mail::to('bhopalgraphic@gmail.com')->send(new CoachRegister($details));     
        // if($coach){
        //     $id = $request->coach_type;        
        //     $role = Role::find($id);        
        //     $role->status = 1;
        //     $role->update(); 
        // }
        return redirect()->back();
    }

    public function edit_coach(Request $request)
    {
            $id = $request->id;        
            $coach = Coach::find($id);        
            $coach->status = $request->action == 'admin' ? $coach->status .= ',' . 1 : $coach->status .= ',' . 2;
            $coach->update();        
    }

    public function delete_coach(Request $request)
    {
            $id = $request->id;        
            $coach = Coach::find($id);         
            $coach->delete(); 
            return redirect('/admin/coach');
    }













}
