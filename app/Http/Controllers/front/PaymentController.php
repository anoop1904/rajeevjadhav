<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_package;
use App\Models\CustomerCreadit;
use App\Models\Promocode;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

   public function payment_thankyou(Request $request)
    {
        // dd($request->session()->get('user_package'));

        if($request->session()->get('user_package.id'))
        {
            $user_package_id = $request->session()->get('user_package.id');
            $user_package = User_package::find($user_package_id);
            $user_package->status = 1;
            $user_package->save();
            
            if($request->session()->get('user_package.user_type') != 'guest')
            {
                $customerCreadit = new CustomerCreadit();
                $customerCreadit->customer_id = $request->session()->get('user_package.user_id');
                $customerCreadit->creadit_amount = $request->session()->get('user_package.total_amount')-$request->session()->get('user_package.count_q_amount');
                $customerCreadit->used_amount = 0;
                $customerCreadit->PayerID = 0;
                $customerCreadit->save();
            }

            $request->session()->forget('user_package');
            $request->session()->forget('paypal_creadit');
        } 
        return view('customer.payment_thankyou');
    }

    public function call_package(Request $request)
    {
        if($request->session()->get('user_package.id'))
        {
            $user_package_id = $request->session()->get('user_package.id');
            $user_package = User_package::find($user_package_id);
            $user_package->status = 1;
            $user_package->save();
          
        if($request->session()->get('user_package.user_type') != 'guest')
        {
            if($request->session()->get('user_package.packg_for') == 2){
                $customerCreadit = new CustomerCreadit();
                $customerCreadit->customer_id = $request->session()->get('user_package.user_id');
                $customerCreadit->creadit_amount = $request->session()->get('user_package.total_amount')-$request->session()->get('user_package.count_q_amount');
                $customerCreadit->used_amount = 0;
                $customerCreadit->PayerID = 0;
                $customerCreadit->save();
            }       
        }
            $request->session()->forget('user_package');
            $request->session()->forget('paypal_creadit');
        } 
        return view('customer.call_package');
    }

    public function payment_process(Request $request)
    {
        $user_package = $request->session()->get('user_package');
        // dd($user_package['pack_id']);
        $user_package['amount'];
           // dd($request->total_payment);
           $total_payment = $request->total_payment;

           if(Auth::guard('customer')->check()){
               $customer_id = Auth::guard('customer')->user()->id;
            }
            else{
                $customer_id = '';
            }   
   //    ----------- paypal start -------------
           $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';       
           $email = 'sb-tyl556712086@personal.example.com';         
          
           $total_amount = $user_package['amount'];
           $userId = 'anooptest';
           $url_paypal  = $url;
           $url_paypal .= "?business=" . urlencode($email);
           $url_paypal .= "&cmd=" . urlencode('_xclick');
           $url_paypal .= "&item_name=Contest - " . urlencode('test data');
           $url_paypal .= "&custom=" . urlencode($customer_id);
           $url_paypal .= "&amount=" . urlencode($total_amount);            
         
           $url_paypal .= "&currency_code=" . urlencode('USD');
           $url_paypal .= "&bn=" . urlencode('NCryptedTechnologies_SP_EC');
           
           $url_paypal .= "&cancel_return=" . urlencode(url('add-contest'));
           $url_paypal .= "&notify_url=" . urlencode(url('contest-payment-notifiy')); 
           if($user_package['pack_id'])
           {
            $url_paypal .= "&return=" . urlencode(url('/call_package'));
           }
           else{
            $url_paypal .= "&return=" . urlencode(url('/payment-thankyou'));
           }
         
            $paypal_creadit = [
               'customer_id' => $customer_id,
               'amount' => $total_amount,        
            ]; 

            $request->session()->put('paypal_payment', $paypal_creadit);
            echo "payment success";
           return redirect($url_paypal);       
           // ----------- paypal end -------------
    }


    public function apply_coupon(Request $request){
        // dd($request->all());
        $pname = $request->c_value;
        $promocode = Promocode::where('name', $pname)->get();
        return $promocode[0]['amount'];
    }


}
