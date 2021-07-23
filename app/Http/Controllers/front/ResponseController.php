<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResponseController extends Controller
{
    public function read_unread(Request $request)
    {
        $id = Auth::guard('customer')->user()->id;
        $ajax_id = $request->id;

        if($ajax_id == 'read')
        {
            $response = Response::where(['user_id'=> $id, 'status'=> 1])->get(); 
            foreach ($response as $key=>$response)
            {   
            $question_data = DB::table('customer_questions')->where('id', $response->ques_id)->first();
$str = <<<DEMO
<div class="card">
<div class="card-header read-responce" id="reheadingOne" onclick="responcestatus($response->ques_id)">
    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responceone$key" aria-expanded="true" aria-controls="responceone">
    $question_data->question_check
    </button>
    <span class="responce-date">30 JUN</span>
</div>
<div id="responceone$key" class="collapse" aria-labelledby="reheadingOne" data-parent="#accordionExample">
    <div class="card-body">
    $response->answer
    </div>
</div>
</div>
DEMO;
echo $str;
            } 
        }

        if($ajax_id == 'unread')
        {
            $response = Response::where(['user_id'=> $id, 'status'=> 0])->get(); 
            foreach ($response as $key=>$response)
            {   
            $question_data = DB::table('customer_questions')->where('id', $response->ques_id)->first();
$str = <<<DEMO
<div class="card">
<div class="card-header" id="reheadingOne" onclick="responcestatus($response->ques_id)">
    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responceone$key" aria-expanded="true" aria-controls="responceone">
    $question_data->question_check
    </button>
    <span class="responce-date">30 JUN</span>
</div>
<div id="responceone$key" class="collapse" aria-labelledby="reheadingOne" data-parent="#accordionExample">
    <div class="card-body">
    $response->answer
    </div>
</div>
</div>
DEMO;
echo $str;
            } 
        }

    }
    
    
public function customer_notification_update(Request $request){
    $id = $request->id;        
    $response = Response::find($id);        
    $response->status = 2;
    $response->update();    
}


}
