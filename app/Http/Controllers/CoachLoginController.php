<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachLoginController extends Controller
{
    public function create()
    {
        return view('admin.coach.login');
    }

    public function store(Request $request)
    {  
        request()->validate([
            'email' => 'required|exists:coaches,email',
            'password' => 'required|min:6',
            ]);      
    
             if (Auth::guard('coach')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
                // $request->session()->regenerate();
                return redirect('/coach');
         }
        
          return redirect('/login_coach')->withErrors(
                [
                    'password' => 'Wrong Password',
                ]
            );
}
}
