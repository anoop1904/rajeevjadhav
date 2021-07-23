@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'Testimonials')
@section('link', '')
@section('content')
@include('customer.include.breadcrumb')



<section class="testimonials-con mt-5 testimonials">
    <div class="container">
        <div class="section-heading wow fadeInUp">
            <h2>Results Delivered!</h2>
        </div>

        <div class="testimonials-main shadow mt-5 mb-5 p-4">
            

          <div id="sync1" class="testi-slider owl-carousel">
              
                  @foreach($testim as $key=>$testim1)
            @if($testim1->link)
               <div class="item">
              <iframe width="560" style="width: 100%;" height="315" src="{{ $testim1->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @else
                <div class="item">
              <div class="text-testimonial position-relative">
                <i class="fa fa-quote-left"></i>
                {{$testim1->descrp}}
                <h4>{{$testim1->name}}</h4>
                <span> {{$testim1->design}} </span>
              </div>
            </div>
            @endif
            @endforeach
 
 
            </div>
          </div>
          
          
          
          <div id="sync2" class="navigation-thumbs owl-carousel" style="display:block;">
                  @foreach($testim as $key=>$testim2)
            <div class="item"><img src="{{url('storage/app/'.$testim2->photo)}}"/></div>
             @endforeach
          </div>
        </div>
    </div>
</section>



<section class="fearturedin wow fadeInUp mt-5">
    <div class="container">
        <h4 class="text-center">Featured In</h4>
       <div class="featured-slider owl-carousel">
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/joyridesmall.png')}}"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/linewstransSmall.png')}}"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/toasttvtransamLL.png')}}"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/wymtranssmall.png')}}"/>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection