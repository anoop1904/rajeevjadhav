<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
      $testim = Testimonial::all();
      return view('customer.testimonials', ['testim' => $testim]);
    }

    




}
