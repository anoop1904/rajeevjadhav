<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerQuestion;
use App\Models\User_package;
use App\Models\Package;
use App\Models\CustomerCreadit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerQuestionController extends Controller
{
     public function store(Request $request)
    {    
        if($request->session()->get('is_package'))
        {
            $request->session()->forget('is_package');
        }
       if($request->package_id)
        {           
            $package_for = Package::where('id', $request->package_id)->first();           
        }
        if($request->package_id){
            $request->session()->put('is_package', $request->package_id);
        }       
        $request->session()->put('service_type', $request->service_type);
        // $pay_data = $request->input();  
        // $request->session()->put('pay_data', $pay_data);        
        if ($request->isMethod('post')) {             
        if(Auth::guard('customer')->check()){
           $customer_id = Auth::guard('customer')->user()->id;
           $c_type = 'customer';
        }
        else{
            $customer_id = $request->customer_id;
            $c_type = $request->customer_type;
        }
       
        $user_package = new User_package();
        $user_package->user_id = $customer_id;
        if(isset($request->package_id)){  
            $package = Package::find($request->package_id);
            $user_package->pack_id = $package->id;
            $user_package->total_question = $request->qaCount_hidden;
            if($package->ques_qty > $request->qaCount_hidden){
                $user_package->remaining_ques = $package->ques_qty - $request->qaCount_hidden;
            }
            $user_package->total_amount = $package->price;         
            $user_package->user_type = $c_type;         
        }
        else{
            $user_package->pack_id = 0;
            $user_package->total_question = $request->qaCount_hidden;
            $user_package->remaining_ques = 0;
            $user_package->total_amount = $request->question_price_total;
            $user_package->user_type = $c_type;  
        }
        $user_package->status = 0;        
        $user_package->save();
        $upack_id = $user_package->id;  
        
        $user_package->count_q_amount = $request->question_price_total;
        // $user_package->packg_for = $package_for->packg_for;
        $request->session()->put('user_package', $user_package);  

            if($request->question_check > 0)
            {
                foreach($request->question_check as $data)
                {  
                    if($data != null)
                    {
                        $cost_que = new CustomerQuestion();
                        $cost_que->service_type = $request->service_type;
                        $cost_que->fname = $request->fname;
                        $cost_que->lname = $request->lname;
                        $cost_que->partner_fname = $request->partner_fname; 
                        $cost_que->partner_lname = $request->partner_lname; 
                        $cost_que->question_check = $data;   
                        $cost_que->notification_status = 0;   
                        $cost_que->check_price = 0; 
                        $cost_que->customer_id = $customer_id;  
                        $cost_que->customer_type = $c_type;
                        if(isset($request->package_id)){ 
                        $cost_que->packg_for = $package->packg_for;
                        $cost_que->package_id = $package->id;
                        }
                        else{
                            $cost_que->packg_for = 0;
                            $cost_que->package_id = 0;   
                        }
                        $cost_que->user_package_id = $upack_id;
                        $cost_que->status = 0;
                        $cost_que->save();                                       
                    }                          
                }          
            }  

        if(Auth::guard('customer')->check()){ 
            return redirect('/check_creadit');
            // return view('customer.check_creadit', ['user_packs' => $user_package,]);
         }
         else{
            return redirect('/check_creadit');
         }
        }
        else 
        {
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
            if(Auth::guard('customer')->check()){ 
                return view('customer.check_creadit');
                // return view('customer.check_creadit', ['user_packs' => $user_package,]);
             }
        }              
    }


    public function edit_question_status(Request $request)
    {       
            $id = $request->id;        
            $customerQuestion = CustomerQuestion::find($id);        
            $customerQuestion->notification_status = $request->action == 'admin' ? $customerQuestion->notification_status .= ',' . 1 : $customerQuestion->notification_status .= ',' . 2;
            $customerQuestion->update();        
    }


}
