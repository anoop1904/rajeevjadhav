<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
      return view('customer.login');
    }

    public function store(Request $request)
    {  
        request()->validate([
            'email' => 'required|exists:customers,email',
            'password' => 'required|min:6',
            ]);      
    
             if (Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
                // $request->session()->regenerate();
                return redirect('/');
         }
         
         return redirect('/customer/login')->withErrors(
                [
                    'password' => 'Wrong Password',
                ]
            );
    }

    public function destroy(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->back();
    }

}
