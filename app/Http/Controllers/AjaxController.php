<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;

class AjaxController extends Controller
{
    public function response_ajax_status(Request $request)
    {
       $id = $request->id;
       $response = Response::where('ques_id', $id)->first();  
       $response->status = 1;
       $response->save();   
    }


}
