<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_details;
use App\Models\user_package;
use App\Models\user_ques;

use Illuminate\Support\Facades\DB;
use Monolog\Handler\FirePHPHandler;

class CustomerController extends Controller
{
    public function customerlist()
    {    $users1 = DB::table('customers')
        ->join('customer_questions', 'customers.id' , '=',  'customer_questions.customer_id')->select('customers.*', 'customer_questions.*')
        ->get()->toArray();
       

        $users = DB::table('customers')->orderBy('created_at','Desc')->get()->toArray();
        $userQA =array();
        
    

     return view("admin.customer.customerlist",['users'=>$users ]);
    }

    public function customerdetails()
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
         return view('admin/customer/customers', ['users'=>$users ,'userQA'=>$userQA]); 

        
    }

    public function userquesans($userid)
    { 
        $userQA= -1;
        $flag=0;
       $userQA = DB::table('user_ques')->where('user_id',$userid)->orderBy('added_at')->get();

        if(count($userQA) > 0){
            $flag=1;
            return $userQA;
        }
        return  $flag;
    }
    
     public function response($id)
    {
        $userQA = DB::table('customer_questions')->find( $id);
        //  print_r(  $userQA);die;
        
        return view('admin.customer.response',['userQA'=>$userQA]);
    } 
    
     public function guestlist()
    {   
        $users = DB::table('guests')->orderBy('created_at','Desc')->get()->toArray();
        $userQA =array();
        
    

     return view("admin.customer.guestlist",['users'=>$users ]);
    }

}
