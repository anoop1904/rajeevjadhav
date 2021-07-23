<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_package;
use App\Models\Package;
use App\Models\CustomerCreadit;
use Illuminate\Support\Facades\Auth;

class CreaditController extends Controller
{
    public function chech_creadit(Request $request)
    {
        // $user_packages = User_package::all();       
        // $data = $request->session()->all();  
        // return view('customer.check_creadit', ['data' => $data, 'user_packages' => $user_packages]);

        // $data = $request->session()->all();     
        // if($data['data']['plan_type'] == ''){
            
        // }
  
        // die;
        
         // ----------- paypal start -------------
        // $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';       
        // $email = 'sb-tyl556712086@personal.example.com';
        // $plan_type = $request->plan_type;      
       
        // $total_amount = $request->question_price_total;
        // $userId = 'anooptest';
        // $url_paypal  = $url;
        // $url_paypal .= "?business=" . urlencode($email);
        // $url_paypal .= "&cmd=" . urlencode('_xclick');
        // $url_paypal .= "&item_name=Contest - " . urlencode('test data');
        // $url_paypal .= "&custom=" . urlencode($plan_type);
        // $url_paypal .= "&amount=" . urlencode($total_amount);            
      
        // $url_paypal .= "&currency_code=" . urlencode('USD');
        // $url_paypal .= "&bn=" . urlencode('NCryptedTechnologies_SP_EC');
        
        // $url_paypal .= "&cancel_return=" . urlencode(url('add-contest'));
        // $url_paypal .= "&notify_url=" . urlencode(url('contest-payment-notifiy'));
        // if($request->plan_type == '')
        // {
        //     $url_paypal .= "&return=" . urlencode(url('/payment-thankyou'));
        // }
        // else{
        //     $url_paypal .= "&return=" . urlencode(url('/call_package'));
        // }
        // return redirect($url_paypal);
       
        // ----------- paypal end -------------

    }

    public function add_amount(Request $request){
        // dd($request->customer_creadit);
        $amount = $request->customer_creadit;

        if(Auth::guard('customer')->check()){
            $customer_id = Auth::guard('customer')->user()->id;
         }
         else{
             $customer_id = $request->customer_id;
         } 
//    ----------- paypal start -------------

        $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';       
        $email = 'sb-tyl556712086@personal.example.com';         
       
        $total_amount = $amount;
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
        $url_paypal .= "&return=" . urlencode(url('/customer/creadit'));
    
        
         $paypal_creadit = [
            'customer_id' => $customer_id,
            'amount' => $total_amount,        
         ];
         $request->session()->put('paypal_creadit', $paypal_creadit);

        return redirect($url_paypal);       
        // ----------- paypal end -------------
    }

    public function add_amount_balance(Request $request){
        // dd($request->customer_creadit);
        $amount = $request->customer_creadit;

        if(Auth::guard('customer')->check()){
            $customer_id = Auth::guard('customer')->user()->id;
         }
         else{
             $customer_id = $request->customer_id;
         } 
//    ----------- paypal start -------------

        $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';       
        $email = 'sb-tyl556712086@personal.example.com';         
       
        $total_amount = $amount;
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
        $url_paypal .= "&return=" . urlencode(url('/customer/question/submit'));
    
        
         $paypal_creadit = [
            'customer_id' => $customer_id,
            'amount' => $total_amount,        
         ];      
         $request->session()->put('paypal_creadit', $paypal_creadit);

        return redirect($url_paypal);       
        // ----------- paypal end -------------
    }



    public function paymentWithPaypal(Request $request){  
        // dd($request->all());
 
        if($request->session()->get('user_package.id'))
        {
            $user_package_id = $request->session()->get('user_package.id');
            $user_package = User_package::find($user_package_id);     
    
            $package_for = Package::where('id', $user_package->pack_id)->first();           
        }
               
           if(Auth::guard('customer')->check()){
            $customer_id = Auth::guard('customer')->user()->id;
         }
         else{
            $customer_id = $request->cus_id;
         }
         
         if($request->total_payment){
            $total_payment = $request->total_payment;
         }
         if($request->session()->get('bothPaymentMode'))
         {
         if($request->amount_total == 'minus_amount'){
            $total_payment =  $request->total_payment - $request->less_amount;
            }
         }
        
        //  ----------- paypal start -------------
        $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';       
        $email = 'sb-tyl556712086@personal.example.com';         
       
        $total_amount = $total_payment;
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
        if($request->session()->get('is_package')){
            $url_paypal .= "&return=" . urlencode(url('/call_package'));           
        }   
        else{
            $url_paypal .= "&return=" . urlencode(url('/payment-thankyou'));  
        }
           
        
         $paypal_creadit = [
            'customer_id' => $customer_id,
            'amount' => $total_amount,        
         ]; 
        $request->session()->forget('bothPaymentMode');
         $request->session()->put('paypal_payment', $paypal_creadit);
         echo "payment success";
        return redirect($url_paypal);       
        // ----------- paypal end -------------
    }

    public function paymentWithWallet(Request $request)
    {   
        
        if($request->session()->get('user_package.id'))
        {
            $user_package_id = $request->session()->get('user_package.id');
            $user_package = User_package::find($user_package_id);
            $user_package->status = 1;
            $user_package->save();

            $package_for = Package::where('id', $user_package->pack_id)->get();
            // $res_packg_for = $user_package->packg_for;
               
          
            $request->session()->forget('user_package');
            $request->session()->forget('paypal_creadit');
        } 
        
        $total_payment = $request->total_payment;
        if(Auth::guard('customer')->check()){
            $customer_id = Auth::guard('customer')->user()->id;   
         }
  
        $new_customer_creadit = new CustomerCreadit();
        $new_customer_creadit->customer_id = $customer_id;
        $new_customer_creadit->creadit_amount = 0;
        $new_customer_creadit->used_amount = $total_payment;     
        $new_customer_creadit->save();
        
        $request->session()->forget('user_package');
        $request->session()->forget('paypal_creadit');
      
        echo 'Payment successfulley';
        // return $package_for;        
  
    }



   public function paymentWithBoth(Request $request)
    {   
         if($request->bothPaymentMode){
           $request->session()->put('bothPaymentMode', $request->bothPaymentMode); 
        }
         
        if($request->session()->get('user_package.id'))
        {
            $user_package_id = $request->session()->get('user_package.id');
            $user_package = User_package::find($user_package_id);
            $user_package->status = 1;
            $user_package->save();

            $package_for = Package::where('id', $user_package->pack_id)->get();
            // $res_packg_for = $user_package->packg_for;
   
        }
    
        $total_payment = $request->less_amount;
        if(Auth::guard('customer')->check()){
            $customer_id = Auth::guard('customer')->user()->id;   
         }
         else{
            $customer_id = $request->cus_id; 
         }
  
        $new_customer_creadit = new CustomerCreadit();
        $new_customer_creadit->customer_id = $customer_id;
        $new_customer_creadit->creadit_amount = 0;
        $new_customer_creadit->used_amount = $total_payment;     
        $new_customer_creadit->save();
        
       echo 'Payment successfulley';
        // return $package_for;        
  
    }



    public function checkCreadit(Request $request)
    {
        return view('customer.check_creadit');
    }



}
