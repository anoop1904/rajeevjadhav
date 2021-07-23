<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ServiceQusetions;
use App\Models\Questions;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
      return view('customer.services');
    }

    // public function service_details()
    // {
    //   return view('customer.services-details');
    // }
    
    public function schedule_call()
    {  
      $service_question = new ServiceQusetions();
      $questions = new Questions();
      $package = new Package();
      $s_que['service_question'] = $service_question->all();
      $s_que['questions'] = $questions->all();
      $s_que['package'] = $package->orderBy('packg_for', 'asc')->get();
    
      return view('customer.schedule_call',['s_que' => $s_que]); 
    }
    
     public function service_details_private()
    {
      $heading="Can I reclaim or achieve Superstar Performer Status at work?";
      $bc="Private Coaching";
      return view('customer.services-details',['heading'=>$heading ,'bc'=>$bc]);
    }
    public function service_details_corporate()
    {
      $bc="Corporate Coaching";
      $heading="Can My Team be better at crushing our quarterly goals?";
      return view('customer.services-details',['heading'=>$heading,'bc'=>$bc]);
    }
    public function service_details_business()
    {
      $bc="Business";
      $heading="Can my business easily get to the next level?";
      return view('customer.services-details',['heading'=>$heading,'bc'=>$bc]);
    }
    public function service_details_influencer()
    {
      $bc="Become An Influencer";
      $heading="Can I really become an Influencer?";
      return view('customer.services-details',['heading'=>$heading,'bc'=>$bc]);
    }
    public function service_details_soulmate()
    {
      $bc="Find Your Soulmate";
      $heading="Will I Truly Find My Soulmate?";
      return view('customer.services-details',['heading'=>$heading,'bc'=>$bc]);
    }
    



}
