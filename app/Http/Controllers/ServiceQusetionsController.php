<?php

namespace App\Http\Controllers;

use App\Models\ServiceQusetions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;


class ServiceQusetionsController extends Controller
{
    public function addserviceType()
    { $roles = Role::all(); 
         return view('admin/servicetype/add', ['roles'=>$roles]);
    }

    public function saveserviceType(Request $req)
    {
        //  print_r($req->input());
        //  return Questions::all();

         $req->validate([
            'coach_id' => 'required',
            'ques' => 'required'
        ]); 
        $ques = new ServiceQusetions();
        $ques->coach_id = $req->coach_id;
        $ques->ques = $req->ques;
        $ques->save();
        return redirect()->back()->with('message', 'Question added successfully.');
        
    } 
    public function showserviceType()
    {
        
        $quesdata = DB::table('service_question')->get();
        return view('admin/servicetype/view', ['quesdata' => $quesdata]);
        // return Questions::all();
    }
     public function deleteserviceType($id)
    {
        ServiceQusetions::where('id', $id)->delete();

         return redirect()->back()->with('message', 'Question deleted successfully.');
    }

}
