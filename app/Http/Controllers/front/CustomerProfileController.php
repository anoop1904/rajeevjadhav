<?php

namespace App\Http\Controllers\front;

use App\Models\Customer;
use App\Models\Response;
use App\Models\CustomerCreadit;
use App\Models\User_package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerProfileController extends Controller
{
    public function index()
    {
        $customer = Customer::find(Auth::guard('customer')->user()->id);       
        return view('customer.my_profile', ['customer'=> $customer]);
    }

public function response()
{
    $id = Auth::guard('customer')->user()->id;
    $customer = Customer::find($id);  
    $response = Response::where('user_id', $id)->get(); 
    return view('customer.my_response', ['customer'=> $customer, 'response'=> $response]);
}

public function creadit(Request $request)
{
    if($request->session()->get('user_package.id'))
    {
        $user_package_id = $request->session()->get('user_package.id');
        $user_package = User_package::find($user_package_id);
        $user_package->status = 1;
        $user_package->save();
        $request->session()->forget('user_package');
    } 

    if(session('paypal_creadit'))
    {   
        if(isset($_GET['PayerID']))
        {
            $PayerID = $_GET['PayerID']; 
        }
        else{
            $PayerID = 0; 
        }        
        $request->session()->put('paypal_creadit.payid', $PayerID);
        $cus_creadit = new CustomerCreadit();
        $cus_creadit->customer_id = session('paypal_creadit.customer_id');
        $cus_creadit->creadit_amount = session('paypal_creadit.amount');
        $cus_creadit->PayerID = session('paypal_creadit.payid');
        $cus_creadit->save();
   }
    $request->session()->forget('paypal_creadit');
    $customer = Customer::find(Auth::guard('customer')->user()->id);  
    $customer_creadit = CustomerCreadit::where('customer_id', Auth::guard('customer')->user()->id)->get();
    return view('customer.my_creadit', ['customer' => $customer, 'customer_creadit' => $customer_creadit]);
}

public function change_password()
{
    $customer = Customer::find(Auth::guard('customer')->user()->id);  
    return view('customer.change_password', ['customer'=> $customer]);
}

public function update_password(Request $request)
{
    // dd($request->input());
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed',
        'new_password_confirmation' => 'required',                     
    ]);

$olpassword = Auth::guard('customer')->user()->password;
if(Hash::check($request->old_password, $olpassword))
{
    $customer = Customer::find(Auth::guard('customer')->user()->id);
    $customer->password = Hash::make($request->new_password);
    $customer->save();

    Auth::guard('customer')->logout();
    return redirect('/customer/login');
}
else{
    return redirect()->back()->with('error', 'Old password Do not match');
}


}


public function book_call_schedule(Request $request)
{
    return view('customer.book_call_schedule');
}


public function google_form()
{
    return view('customer.google_form');
}







}
