<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Guest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;
use App\Mail\CoachRegister;




class CustomerRegistrationController extends Controller
{
    public function index()
    {
      return view('customer.register');
    }

     public function store(Request $request)
    {    
        if($request->ajax()){          
            if($request->customertype == 'new-signup'){
                $request->validate([
                    'fullname' => 'required',
                    'email' => 'required|unique:customers',
                    'phone' => 'required',
                    'password' => 'required|confirmed',
                    'password_confirmation' => 'required',                     
                ]);
                $customer = Customer::create([
                    'name' => $request->fullname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),    
                    'status' => 0,                 
                ]);   
                      
                event(new Registered($customer)); 
                $customer["type"] = "customer";               
                return $customer;
            }
            else{
                $request->validate([
                    'fullname' => 'required',
                    'email' => 'required',                             
                ]);
                $guest = Guest::create([
                    'name' => $request->fullname,
                    'email' => $request->email,
                    'phone' => $request->phone,                       
                    'status' => 0,                 
                ]);   
                event(new Registered($guest));
                $guest["type"] = "guest"; 
                return $guest;
            }         
           
        }
        else
        {  
        // return "HTTP";  
         $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:customers',
            'phone' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',                     
        ]);
     
        $customer = Customer::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),    
            'status' => 0,                 
        ]);   
              
        event(new Registered($customer));        
       
        // Auth::login($customer);
              
        // $details = [
        //     'title' => 'Register as new coach',
        //     'body' => 'You are register as new coach, you can access your profile',
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // Mail::to('bhopalgraphic@gmail.com')->send(new CoachRegister($details));     
        // if($coach){
        //     $id = $request->coach_type;        
        //     $role = Role::find($id);        
        //     $role->status = 1;
        //     $role->update(); 
        // }
        return redirect('/');
    }
    }





}
