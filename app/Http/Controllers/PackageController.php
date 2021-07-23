<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{ 
    public function package()
    {   
        $callpackg = DB::table('package')->get()->where('packg_for', '1');//call
        $mesgpackg = DB::table('package')->get()->where('packg_for', '2');//message

        return view('admin/package/showpackage',['callpackg'=> $callpackg ,'mesgpackg'=> $mesgpackg]);
    }
   public function addpackage()
   {
      return view('admin/package/addpackage');
   }

   public function savepackage(Request $req)
   { 
      $req->validate([
         'pckg_for' => 'required',
         'packg_name' => 'required',
         'amount' => 'required',
      ]);
      $data=new Package ;
      $data->packg_for= $req->pckg_for;
      $data->name=$req->packg_name;
      $data->price=$req->amount;
      $data->description=$req->descp;
      $data->save();
      return redirect()->back()->with('message', 'Package added successfully.');
   }
   public function editpackage($id)
   {
    $packg = DB::table('package')->where('id', $id)->get();//call
    // print_r($packg);die;
    return view('admin/package/editpackage', ['packg'=> $packg]);
   }
   public function updatepackage(Request $req)
   {  $req->validate([
      'pckg_for' => 'required',
      'packg_name' => 'required',
      'amount' => 'required',
   ]);
      $data=new Package ;
     $id= $req->pid; 
    
     $r= DB::table('package')->where('id', $id)->update(array( 'packg_for'=>$req->pckg_for,
        'name'=>$req->packg_name,
        'price'=>$req->amount,
        'description'=>$req->descp));  
     
        return redirect()->back()->with('message', 'Package updated successfully.');
   }
   public function deletepackage($id)
   {
      Package::where('id', $id)->delete();
      return redirect()->back();
   }
}
