<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Testmcontroller extends Controller
{
    public function viewtestm()
    {
       return view('admin.testimonial.view');
    }
    public function addtestm()
    {
       return view('admin.testimonial.add');
    }

    public function savetestm(Request $request)
    {       
        $request->validate([
            'firstname' => 'required',
            'design' => 'required',
            'place' => 'required',                    
                            
        ]);
        $myfile = "";  
        $myfile2 = "";   
        if($request->hasFile('profile_avatar')){

            $name = $request->file('profile_avatar')->getClientOriginalName(); 
            $myfile = time().$name;  
            $request->file('profile_avatar')->storeAs('/testimonial/image', $myfile);
            
        }
        if($request->hasFile('profile_video')){

            $video = $request->file('profile_video')->getClientOriginalName(); 
            $path = public_path().'/uploads/';
            $myfile2 = time().$video;   
            $request->file('profile_video')->storeAs('/testimonial/video', $myfile2);
            
        }
        $testm = new Testimonial;
        $testm->name =$request->firstname;
        $testm->design = $request->design;
        $testm->place = $request->place;           
        $testm->descrp = $request->descrp;         
        $testm->photo = $myfile;
        $testm->video =$myfile2;
        $testm->status =1;
        $testm->save();
      
       

        return redirect()->back()->with('message', 'Testimonial added successfully.');
    }

    public function delete($id)
    {
       Testimonial::where('id', $id)->delete();
       return redirect()->back();
    }
    public function active($id)
    {
        $st=   DB::table('testimonial')->where('id', $id)->value('status');
        if($st==1){
            Testimonial::where('id', $id)->update(['status' => 2]);
        }elseif($st==2){
            Testimonial::where('id', $id)->update(['status' => 1]);
        }
        else{
            return redirect()->with('message', 'Try again later');
        }
      
       return redirect()->back()->with('message', 'Testimonial Status updated successfully.');
    }
}
