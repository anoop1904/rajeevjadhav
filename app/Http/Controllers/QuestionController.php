<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Questions;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        $quesdata= '';
        $roles = Role::all();
        $id='Questions';
        return view('admin/question/showquestions',['quesdata'=>$quesdata,'roles'=>$roles,'name'=>$id,'selectedid'=>0]);
    }

    public function add_question()
    {
        $roles = Role::all();  
        return view('admin/question/addquestions', ['roles'=>$roles]);
    }

    public function submit_question(Request $request)
    {      
         $request->validate([
            'coach_id' => 'required',
            'ques' => 'required'
        ]); 
        $ques= new Questions;
        $ques->coach_id = $request->coach_id;
        $ques->ques = $request->ques;
        $ques->status = 1;
        $ques->save();           
        return redirect()->back()->with('message', 'Question added successfully.');
    }

    public function show_question($id)
    {          
        $roles = Role::all();     
        $quesdata= DB::table('questions')->where('coach_id',$id)->get();     
        return view('admin/question/showquestions',['quesdata'=>$quesdata,'roles'=>$roles,'selectedid'=>$id,'name'=>'']);
    }


    public function delete_question($id)
    {   
        Questions::where('id', $id)->delete();
       return redirect()->back()->with('message', 'Question deleted successfully.');
    }

    public function editquestion($id)
   {
    $question = DB::table('questions')->where('id', $id)->get();//call
    
    return view('admin/question/editquestions', ['question'=> $question]);
   }
     public function updatequestions(Request $req)
    {    
         $req->validate([
            'coach_id' => 'required',
            'ques' => 'required'
        ]); 
        
       
      $id= $req->pid; 
     
      $r= DB::table('questions')->where('id', $id)->update(array(
           'coach_id' => $req->coach_id,
           'ques' => $req->ques
         
         ));  
      
         return redirect()->back()->with('message', 'Questions updated successfully.');
    }
 

     public function getservicetype(Request $request)
    {
         $id = $request->id;        
          $quesdata= DB::table('questions')->where('coach_id',$id)->get()->toArray(); 
          $data = "";
          foreach($quesdata as $key=>$questions){
            $data .=  "<div class='custom-control custom-checkbox'>";
            $data .=  "<input class='custom-control-input question_check' onchange='count_que()' type='checkbox' name='question_check[]' value='$questions->ques' id='check.$key+1'>";
            $data .=  "<label class='custom-control-label' for='check.$key+1'> $questions->ques </label>";
            $data .=  "</div>";   
          } 
            // $data .= "<div class='custom-control custom-checkbox'>";
            // $data .= "<input class='custom-control-input other_que question_check' onchange='count_que()' type='checkbox' name='question_check[]' value='' id='check_other'>";
            // $data .=  "<label class='custom-control-label' for='check_other'>";
            // $data .=   "Other";
            // $data .=  "</label>";
            // $data .= "</div>";
          return $data;
          
        //   echo json_encode(['status' => true, 'data' => $data]);
    }


}
