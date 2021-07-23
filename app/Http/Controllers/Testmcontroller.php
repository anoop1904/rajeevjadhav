<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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

        ]);
        $testm = new Testimonial;
        $myfile = 0;
        $myfile2 = 0;
        $myfile3 = 0;
        if ($request->hasFile('profile_avatar')) {

            $name = $request->file('profile_avatar')->getClientOriginalName();
            $myfile = time() . $name;
            $request->file('profile_avatar')->storeAs('/testimonial/image', $myfile);
            $testm->photo = '/testimonial/image/' . $myfile;
        } else {
            $testm->photo = 0;
        }
        if ($request->hasFile('profile_video')) {

            $video = $request->file('profile_video')->getClientOriginalName();
            $path = public_path() . '/uploads/';
            $myfile2 = time() . $video;
            $request->file('profile_video')->storeAs('/testimonial/video', $myfile2);
            $testm->video = '/testimonial/video/' . $myfile2;
        } else {
            $testm->video = 0;
        }
        
        if ($request->profile_link != "") {
            $testm->link = $request->profile_link;
        } else {
            $testm->link = 0;
        }

        $testm->name = $request->firstname;
        $testm->design = $request->design;
        $testm->type = $request->type;
        $testm->descrp = $request->descrp;
        $testm->status = 1;
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
        $st =   DB::table('testimonial')->where('id', $id)->value('status');
        if ($st == 1) {
            Testimonial::where('id', $id)->update(['status' => 2]);
        } elseif ($st == 2) {
            Testimonial::where('id', $id)->update(['status' => 1]);
        } else {
            return redirect()->with('message', 'Try again later');
        }

        return redirect()->back()->with('message', 'Testimonial Status updated successfully.');
    }


    public function edit($id)
    {
        $data = DB::table('testimonial')->find($id); //call
        // print_r($packg);die;
        return view('admin/testimonial/edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        // print_r($request->Input());
        // die;
        $request->validate([
            'firstname' => 'required',

        ]);
        $data = new Testimonial();
        $id = $request->id;
        $myfile = "";
        $myfile2 = "";
        $imagefile = 0;
        $videofile = 0;
        $link = 0;
        if ($request->hasFile('profile_avatar')) {

            $name = $request->file('profile_avatar')->getClientOriginalName();
            $myfile = time() . $name;
            $request->file('profile_avatar')->storeAs('/testimonial/image', $myfile);
            $imagefile = '/testimonial/image/' . $myfile;
        } else {
            $imagefile = $request->old_image;
        }

        if ($request->hasFile('profile_video')) {

            $video = $request->file('profile_video')->getClientOriginalName();
            $path = public_path() . '/uploads/';
            $myfile2 = time() . $video;
            $request->file('profile_video')->storeAs('/testimonial/video', $myfile2);
            $videofile = '/testimonial/video/' . $myfile2;
        } elseif ($request->old_profile_video != '') {
            $videofile = $request->old_profile_video;
        } else {
            $videofile = 0;
        }

        if ($request->profile_link != '') {
            $link = $request->profile_link;
        } elseif ($request->old_profile_link != '')  {
            $link = $request->old_profile_link;
        } else {
            $link = 0;
        }


        $r = DB::table('testimonial')->where('id', $id)->update(array(
            'name' => $request->firstname,
            'design' => $request->design,
            'type' => $request->type,
            'descrp' => $request->descrp,
            'photo' => $imagefile,
            'video' => $videofile,
            'link' => $link
        ));

        return redirect()->back()->with('message', 'Testimonials updated successfully.');
    }
}
