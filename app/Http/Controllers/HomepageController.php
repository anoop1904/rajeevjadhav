<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Role;
use Symfony\Component\Console\Question\Question;
use Illuminate\Support\Facades\DB;


class HomepageController extends Controller
{
    public function index()
    {
            return view('admin/index');
    }
    public function form()
    {
        return view('admin/form');
    }

// varsha function start 

public function mylogin()
{
    return view('admin/login');
}
 public function addquestions()
{
    return view('admin/question/addquestions');
}

public function savequestions(Request $req)
{
$ques= new Questions;
$ques->coach_id = $req->coach_id;
$ques->ques = $req->ques;
$ques->save();
   
return redirect('show-questions');

}

public function editquestions()
{
    return view('admin/editquestions');
}

public function questions()
{
   $quesdata= '';
  $roles=Role::all();
    return view('admin/question/showquestions',['quesdata'=>$quesdata,'roles'=>$roles]);
    // return Questions::all();
}
public function showquestions($id)
{
    $roles=Role::all();
   $quesdata= DB::table('questions')->where('coach_id',$id)->get();
    return view('admin/question/showquestions',['quesdata'=>$quesdata,'roles'=>$roles]);
    // return Questions::all();
}

public function destroyquestions($id) {
    Questions::where('id', $id)->delete();
  
    echo "Record deleted successfully.<br/>";   
   
 }


// varsha function end 

}
