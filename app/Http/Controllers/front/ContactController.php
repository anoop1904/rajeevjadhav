<?php

namespace App\Http\Controllers\front;
use App\Models\Contactus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    public function index()
    {
      return view('customer.contact');
    }
 

    public  function bookme()
    {
        return view('customer.bookme');
    }
    
      public function contactus()
    { 
         return view('admin.contact.contact');
    }

    public function savecontactus(Request $req)
    {
        $req->validate([
            'firstname' => 'required',
            'email' => 'required',
            'about'=>'required',
        ]); 

      $data= new Contactus();
      $data->firstname = $req->firstname;
      $data->lastname = $req->lastname;
      $data->email = $req->email;
      $data->company_name = $req->companyname;
      $data->about = $req->about;
      $data->save();
      return redirect()->back()->with('message', 'Your form submitted successfully');

    }


}
