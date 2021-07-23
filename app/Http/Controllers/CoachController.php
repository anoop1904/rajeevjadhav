<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use Auth;

class CoachController extends Controller
{

    public function index()
    {
        $coach = New Coach(); 
        $result = $coach->all();       
        return view('admin.coach.index', ['result' => $result]);
    }

    public function destroy(Request $request)
    {
        Auth::guard('coach')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login_coach');
    }
   

}