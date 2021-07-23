@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('content')


<div class="hero-section wow fadeInUp">
    <div class="container-fluid">
        <div class="hero-slider owl-carousel">
            <div class="item">
                <div class="hero-slides-img"><img src="{{asset('public/front/images/slide1.jpg')}}"/></div>
                <div class="hero-slides-text">
                     <h2>Complimentary Discovery call – to assess if we are the right solution for you.</h2>
                    <div class="callme-btn mt-5"><a href="#" class="btn btn-secondary">Call Me</a></div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="hero-slides-img"><img src="{{asset('public/front/images/slide2.jpg')}}"/></div>
                    <div class="hero-slides-text">
                        <h2>Manifestation Coaching Session – to help you clarify what you really want.</h2>
                        <div class="callme-btn mt-5"><a href="#" class="btn btn-secondary">Call Me</a></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="hero-slides-img"><img src="{{asset('public/front/images/slide3.jpg')}}"/></div>
                    <div class="hero-slides-text">
                        <h2>Energetic Clearing Session – to remove all your blocks to accelerate your realization of your goal.</h2>
                        <div class="callme-btn mt-5"><a href="#" class="btn btn-secondary">Call Me</a></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="hero-slides-img"><img src="{{asset('public/front/images/slide4.jpg')}}"/></div>
                    <div class="hero-slides-text">
                         <h2>Implement the coach’s advice for 7 days after the session.</h2>
                        <div class="callme-btn mt-5"><a href="#" class="btn btn-secondary">Call Me</a></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="hero-slides-img"><img src="{{asset('public/front/images/slide5.jpg')}}"/></div>
                    <div class="hero-slides-text">
                        <h2>Stay in Touch! Tell us the Good News as you start to see small & large shifts – as you leap towards your goal.</h2>
                        <div class="callme-btn mt-5"><a href="#" class="btn btn-secondary">Call Me</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <section class="fearturedin wow fadeInUp">
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
    
    <section class="testimonials mt-5 wow fadeInUp">
    <div class="container">
        <div class="section-heading">
            <h2><span>Testimonials</span> Results Delivered! </h2>
        </div>
        <div class="testimonials-slider mt-4 owl-carousel">
             @php $testimonial = DB::table('testimonial')->orderBy('descrp','Desc')->get()->toArray(); @endphp
             @foreach($testimonial as $key=>$testim1)
             @if($testim1->link)
             @elseif($testim1->video)
             @else
            <div class="item">
                <div class="testimonials-box">
                    <div class="user-image"><img src="{{url('storage/app/'.$testim1->photo)}}"/></div>
                    <h3>{{$testim1->name}}</h3>
                    <i>{{$testim1->design}}</i>
                    <div class="quotebox"><i class="fa fa-quote-left"></i></div>
                    <p> {{$testim1->descrp}}</p>
                </div>
            </div>
            @endif
            @endforeach
    
            <!--<div class="item">-->
            <!--    <div class="testimonials-box">-->
            <!--        <div class="user-image"><img src="{{asset('public/front/images/Picture13.jpg')}}"/></div>-->
            <!--        <h3>Luis Guaman</h3>-->
            <!--        <i>Recruiter, Aerotek</i>-->
            <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->
            <!--        <p>Rajiv was able to very swiftly coach me through some mental blocks. Results-->
            <!--            <strong>@Speed of Thought.</strong></p>-->
            <!--    </div>-->
            <!--</div>-->
    
            <!--<div class="item">-->
            <!--    <div class="testimonials-box">-->
            <!--        <div class="user-image"><img src="{{asset('public/front/images/Picture22.jpg')}}"/></div>-->
            <!--        <h3>Mercedes Johnson</h3>-->
            <!--        <i>UX Designer, CBRE</i>-->
            <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->
            <!--        <p>Rajiv's insightful business coaching gave me an effective blueprint to pitch and win big ticket clients - within my very first session!</p>-->
            <!--    </div>-->
            <!--</div>-->
    
            <!--<div class="item">-->
            <!--    <div class="testimonials-box">-->
            <!--        <div class="user-image"><img src="{{asset('public/front/images/Picture13.jpg')}}"/></div>-->
            <!--        <h3>Luis Guaman</h3>-->
            <!--        <i>Recruiter, Aerotek</i>-->
            <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->
            <!--        <p>Rajiv was able to very swiftly coach me through some mental blocks. Results-->
            <!--            <strong>@Speed of Thought.</strong></p>-->
            <!--    </div>-->
            <!--</div>-->
    
            <!--<div class="item">-->
            <!--    <div class="testimonials-box">-->
            <!--        <div class="user-image"><img src="{{asset('public/front/images/Picture11.jpg')}}"/></div>-->
            <!--        <h3>Joe Dec</h3>-->
            <!--        <i>Managing Partner, All Print Resources Group</i>-->
            <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->
            <!--        <p>Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...</p>-->
            <!--    </div>-->
            <!--</div>-->
    
            <!--<div class="item">-->
            <!--    <div class="testimonials-box">-->
            <!--        <div class="user-image"><img src="{{asset('public/front/images/Picture11.jpg')}}"/></div>-->
            <!--        <h3>Joe Dec</h3>-->
            <!--        <i>Managing Partner, All Print Resources Group</i>-->
            <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->
            <!--        <p>Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...</p>-->
            <!--    </div>-->
            <!--</div>-->
    
            <!--<div class="item">-->
            <!--    <div class="testimonials-box">-->
            <!--        <div class="user-image"><img src="{{asset('public/front/images/Picture11.jpg')}}"/></div>-->
            <!--        <h3>Joe Dec</h3>-->
            <!--        <i>Managing Partner, All Print Resources Group</i>-->
            <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->
            <!--        <p>Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...</p>-->
            <!--    </div>-->
            <!--</div>-->
    
        </div>
    </div>
    </section>
    
    <section class="mt-5 services-container py-5">
        <div class="container">
        <p class="text-center wow fadeInUp">Live a purpose driven life with clarity on What you should be doing When and with Whom – to achieve the balance you seek between work and the life beyond that. Rajiv Jadhav’s one-on-one private coaching programs or corporate group coaching programs/group workshops will help you get you past the finish line – Fast!</p>
        <div class="section-heading wow fadeInUp">
            <h2 class="mt-4"><span>Our Services</span> Greatness is Your Birthright. Claim it today! <small>Unleash the Passionate Genius that Lies Within you</small></h2>
        </div>
    
        <div class="services-con mt-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
                    <div class="services-box">
                        <div class="service-img"><img src="{{asset('public/front/images/soulmate.png')}}"></div>
                        <h3>Find your Soulmate</h3>
                        <div class="service-overlal p-3 text-center">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <p>Tired of being alone? We’ll help you find your significant other</p>
                            <a href="{{url('/service-details-soulmate')}}" class="btn btn-secondary mt-2">Read More</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 wow fadeInDown">
                    <div class="services-box">
                        <div class="service-img"><img src="{{asset('public/front/images/Influencer.png')}}"></div>
                        <h3>Become an Influencer</h3>
                        <div class="service-overlal p-3 text-center">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <p>Tired of not been taken seriously by peers? We’ll help you become an Influencer</p>
                                        <a href="{{url('/service-details-influencer')}}" class="btn btn-secondary mt-2">Read More</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
                    <div class="services-box">
                        <div class="service-img"><img src="{{asset('public/front/images/business.png')}}"></div>
                        <h3>Start/Grow your Business</h3>
                        <div class="service-overlal p-3 text-center">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <p>Have an idea but unclear how to make it a business? We help you start or grow your business</p>
                                    <a href="{{url('/service-details-business')}}" class="btn btn-secondary mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 wow fadeInDown">
                    <div class="services-box">
                        <div class="service-img"><img src="{{asset('public/front/images/corporate-coaching.png')}}"></div>
                        <h3>CORPORATE COACHING</h3>
                        <div class="service-overlal p-3 text-center">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <p>Want to be more effective at work and crush your quarterly goals? Lets get started today</p>
                                    <a href="{{url('/service-details-corporate')}}" class="btn btn-secondary mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
                    <div class="services-box">
                        <div class="service-img"><img src="{{asset('public/front/images/private-coaching.png')}}"></div>
                        <h3>PRIVATE COACHING</h3>
                        <div class="service-overlal p-3 text-center">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <p>Want to find purpose in life, discover your true calling and reclaim unbridled joy? Lets get started today</p>
                                    <a href="{{url('/service-details-private')}}" class="btn btn-secondary mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 wow fadeInDown">
                    <div class="services-box">
                        <div class="service-img"><img src="{{asset('public/front/images/Book-Me-1a.png')}}"></div>
                        <h3>BOOK ME</h3>
                        <div class="service-overlal p-3 text-center">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <p>Need a Motivational, Inspirational Speaker to shift the energy in your Pod, Group, Team or Division? Lets get started today</p>
                                    <a href="{{url('/bookme')}}" class="btn btn-secondary mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    
        </div>
    </section>
    
    <section class="startnow-section py-5 wow fadeInUp">
        <div class="container">
            <div class="d-md-flex">
                <div class="flex-grow-1"><h2>You feel there's more to you than you can fully articulate. Discover Yourself.</h2></div>
                <div class="start-btn align-self-center"><a href="{{url('/customer/google_form')}}" class="btn btn-light"><i class="fa fa-long-arrow-right arrow-moving2"></i> Start Now</a></div>
            </div>
        </div>
    </section>
    
    <section class="success-section py-5 mb-4">
        <div class="container">
            <div class="section-heading wow fadeInUp">
            <h2>Clarity. Growth. Success<small>Curated content designed to trigger epiphanies, joy and motivation. our gift to you.</small></h2>
    
            <div class="success-con">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
                        <div class="services-box">
                            <a href="#">
                                <div class="service-img"><img src="{{asset('public/front/images/blog.png')}}"></div>
                                <h3>Blog</h3>
                            </a>
                        </div>
                    </div>
    
                    <div class="col-12 col-sm-6 col-md-4 wow fadeInDown">
                        <div class="services-box">
                            <a href="#">
                                <div class="service-img"><img src="{{asset('public/front/images/headlines.png')}}"></div>
                                <h3>Press</h3>
                            </a>
                        </div>
                    </div>
    
                    <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
                        <div class="services-box">
                            <a href="#">
                                <div class="service-img"><img src="{{asset('public/front/images/media.png')}}"></div>
                                <h3>Media Gallery</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection