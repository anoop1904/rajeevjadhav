<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function cancel_return(Request $request)
    {
        echo "cancel payment";
        dd($request->all());
    }
    
    public function notify_url(Request $request)
    {
        // $raw_post_data = file_get_contents('php://input'); 
        // $raw_post_array = explode('&', $raw_post_data); 
        // file_put_contents("response.txt",$raw_post_array);  
        // file_put_contents("response1.txt",$request->all());            
        echo file_put_contents("response2.txt",'this is test response'); 
        dd($request->all());           
    }

    public function return_url(Request $request)
    {
        echo "return_url for test";
        dd($request->all());
    }



}
