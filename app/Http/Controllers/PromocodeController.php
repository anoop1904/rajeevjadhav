<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Pcode;
use Illuminate\Http\Request;
use app\Models\Promocode;
use Illuminate\Support\Facades\DB;



class PromocodeController extends Controller
{
    public function promocode()
    {
        $data = DB::table('promocode')->get();
        return view('admin/promocode/promocode', ['data' => $data]);
    }
    public function addpromocode()
    {
        return view('admin/promocode/addpromocode');
    }

    public function savepromocode(Request $req)
    {
        $req->validate([
            'pcode' => 'required',
            'amount' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'

        ]);


        // $data =new Promocode() ;
        $data = new Pcode();

        $data->name = $req->pcode;
        $data->amount = $req->amount;
         $data->type = $req->type;
        $data->startdate = $req->startdate;
        $data->enddate = $req->enddate;
        $data->save();
        return redirect()->back()->with('message', 'Promocode added successfully.');
    }
    public function editpromocode($id)
    {
        $data = DB::table('promocode')->where('id', $id)->get(); //call
        // print_r($packg);die;
        return view('admin/promocode/editpromocode', ['data' => $data]);
    }

    public function updadtepromocode(Request $req)
    {
        $req->validate([
            'pcode' => 'required',
            'amount' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'

        ]);

        $data = new Pcode();
        $id = $req->pid;

        $r = DB::table('promocode')->where('id', $id)->update(array(
        'name' => $req->pcode,
       'amount' => $req->amount,
       'type'=> $req->type,
        'startdate' => $req->startdate,
        'enddate' => $req->enddate
        ));

        return redirect()->back()->with('message', 'Promocode updated successfully.');
    }
    public function deletepromocode($id)
    {
        Pcode::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Promocode deleted successfully.');
    }
}
