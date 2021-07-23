@extends('front_master')

@section('title', 'Rajeev Jadhav | Homepage')

@section('bc', $bc)

@section('link', 'service-details')

@section('content')





<div class="details-slider owl-carousel">

  <div class="item">

    <img src="{{ asset('public/front/images/inner-1.jpg') }}"/>

  </div>

  <div class="item">

    <img src="{{ asset('public/front/images/inner-2.jpg') }}"/>

  </div>

</div>


@include('customer.include.breadcrumb')








<section class="services-p-con mt-5">

    <div class="container">

        <div class="section-heading wow fadeInUp">

            <h2>{{$heading}}</h2>

        </div>

        <div class="service-details my-5 wow fadeInUp">

            <div class="s-d-top bg-dark">

                <div class="row">

                <div class="col-12 col-md-4 order-lg-last"><img src="{{ asset('public/front/images/talking-audience.png') }}" class="w-100"/></div>

                <div class="col-12 col-md-8 pt-3 pt-md-0">

                    <p>Rajiv Jadhav’s Manifestation Coaching is unlike any other coaching experience in the world. How?</p>

                    <p>We’re extremely Results Oriented and believe in Delivering Results at the Speed of Thought. Yes, sounds like a line, you’re thinking. Sounds boastful as well.. These are reasonable thoughts since almost every coach today promises clients the Sun, the Moon, the stars and beyond. Clients like you are both jaded and confused by lackluster service, broken promises and disappointments. Rajiv and his team understands this all too well, since he started out as a client/customer just like you! That said, he offers a never seen before approach and offers guarantees!</p>

                </div>

            </div>

            </div>

          </div>





          <div class="fearturedin wow fadeInUp mt-5">

            <div class="container">

                <h4 class="text-center">Featured In</h4>

               <div class="featured-slider owl-carousel">

                <div class="item text-center">

                    <div class="featured-box">

                        <img src="{{ asset('public/front/images/joyridesmall.png') }}"/>

                    </div>

                </div>

                <div class="item text-center">

                    <div class="featured-box">

                        <img src="{{ asset('public/front/images/linewstransSmall.png') }}"/>

                    </div>

                </div>

                <div class="item text-center">

                    <div class="featured-box">

                        <img src="{{ asset('public/front/images/toasttvtransamLL.png') }}"/>

                    </div>

                </div>

                <div class="item text-center">

                    <div class="featured-box">

                        <img src="{{ asset('public/front/images/wymtranssmall.png') }}"/>

                    </div>

                </div>

                </div>

            </div>

          </div>



            <div class="s-d-white mt-5 wow fadeInUp">

                <h3 class="text-center">How is Rajiv Jadhav’s Manifestation Coaching different?</h3>

                

                <ul class="list-unstyled">

                  <li>We’re designed to work for clients who are Impatient and who want to see results Yesterday (Immediately). Are you our ideal client? Take the assessment today (llink to northstar)</li>

                  <li>We’re so confident in the results we deliver, such that, if the client does not see results as forecasted. No payment is required</li>

                  <li>Most clients see results in 2-3 sessions. We’re all about Speed. We’re not here to string you along for months or years at a stretch. We want to help you now, so you can operate at the desired elevation tomorrow.</li>

                </ul>

            </div>



            <div class="mt-5 videosection bg-dark">

             @if(Request::segment(1) == 'service-details-soulmate')
              <iframe style="width: 100%; min-height: 400px;" src="https://www.youtube.com/embed/IE24hZMc7rI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @else
              <iframe style="width: 100%; min-height: 400px;" src="https://www.youtube.com/embed/L3O47PcSqiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif

            </div>





            <h3 class="text-center mt-5 mb-4 wow fadeInUp">Results Delivered!</h3>

            <div class="s-d-white mt-4">

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

                <!--        <div class="user-image"><img src="images/Picture13.jpg"/></div>-->

                <!--        <h3>Luis Guaman</h3>-->

                <!--        <i>Recruiter, Aerotek</i>-->

                <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->

                <!--        <p>Rajiv was able to very swiftly coach me through some mental blocks. Results-->

                <!--            <strong>@Speed of Thought.</strong></p>-->

                <!--    </div>-->

                <!--</div>-->

        

                <!--<div class="item">-->

                <!--    <div class="testimonials-box">-->

                <!--        <div class="user-image"><img src="images/Picture22.jpg"/></div>-->

                <!--        <h3>Mercedes Johnson</h3>-->

                <!--        <i>UX Designer, CBRE</i>-->

                <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->

                <!--        <p>Rajiv's insightful business coaching gave me an effective blueprint to pitch and win big ticket clients - within my very first session!</p>-->

                <!--    </div>-->

                <!--</div>-->

        

                <!--<div class="item">-->

                <!--    <div class="testimonials-box">-->

                <!--        <div class="user-image"><img src="images/Picture13.jpg"/></div>-->

                <!--        <h3>Luis Guaman</h3>-->

                <!--        <i>Recruiter, Aerotek</i>-->

                <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->

                <!--        <p>Rajiv was able to very swiftly coach me through some mental blocks. Results-->

                <!--            <strong>@Speed of Thought.</strong></p>-->

                <!--    </div>-->

                <!--</div>-->

        

                <!--<div class="item">-->

                <!--    <div class="testimonials-box">-->

                <!--        <div class="user-image"><img src="images/Picture11.jpg"/></div>-->

                <!--        <h3>Joe Dec</h3>-->

                <!--        <i>Managing Partner, All Print Resources Group</i>-->

                <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->

                <!--        <p>Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...</p>-->

                <!--    </div>-->

                <!--</div>-->

        

                <!--<div class="item">-->

                <!--    <div class="testimonials-box">-->

                <!--        <div class="user-image"><img src="images/Picture11.jpg"/></div>-->

                <!--        <h3>Joe Dec</h3>-->

                <!--        <i>Managing Partner, All Print Resources Group</i>-->

                <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->

                <!--        <p>Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...</p>-->

                <!--    </div>-->

                <!--</div>-->

        

                <!--<div class="item">-->

                <!--    <div class="testimonials-box">-->

                <!--        <div class="user-image"><img src="images/Picture11.jpg"/></div>-->

                <!--        <h3>Joe Dec</h3>-->

                <!--        <i>Managing Partner, All Print Resources Group</i>-->

                <!--        <div class="quotebox"><i class="fa fa-quote-left"></i></div>-->

                <!--        <p>Best business coach. Rajiv provided incredible insight and valuable suggestions on how to increase market share...</p>-->

                <!--    </div>-->

                <!--</div>-->

        

            </div>

            </div>



            <h3 class="text-center mt-5 mb-4 wow fadeInUp">How Does Rajiv Jadhav’s Manifestation Coaching Work?</h3>

            <div class="s-d-top bg-dark fadeInUp">

                <h3></h3>

                <div class="row">

                <div class="col-12 col-md-4"><img src="{{ asset('public/front/images/concept.png') }}" class="w-100"/></div>

                <div class="col-12 col-md-8 pt-3 pt-md-0">

                  <ul class="list-unstyled ml-2">

                    <li>Take our assessment to see if we’re the right solution for you</li>

                    <li>Schedule a complimentary discovery call with Rajiv Jadhav himself! </li>

                    <li>If we’re a fit, make payment to schedule your starter session. 

                      <ul class="list-unstyled ml-2">

                        <li>You’ll have a 1 hour Manifestation session with Rajiv Jadhav and then,</li>

                        <li>Have another 1 hour Clearing Session with our Healer – Uri </li>

                      </ul>

                    </li>

                    <li>You’ll be paying a 50% advance. If you don’t see tangible shifts towards your desired outcome within 7-14 days, don’t pay us the balance owed. </li>

                    <li>If however, you experience results, we request that you contact us, let us know and then make payment. We believe in the Honor Code and believe that our ideal clients operate with the highest levels of ethics and integrity</li>

                  </ul>

                </div>

            </div>

            </div>

    </div>

</section>



<section class="sechule-call-btn mt-5 wow fadeInUp">

    <div class="container">

        <h2>YOU’RE AN AWESOME HUMAN BEING, BUT YOU SEEM TO KEEP

          HITTING OBSTACLES THAT SLOW YOU DOWN – WHICH ENDS UP

          FRUSTRATING YOU. THAT ENDS TODAY!</h2>

        <a href="{{url('/schedule-call')}}" class="btn btn-secondary"><i class="fa fa-long-arrow-right arrow-moving2"></i> Schedule your call</a>

    </div>

</section>



<section class="faq-container my-5 wow fadeInUp">

    <div class="container">

        <h3>LIFE COACHING FAQ'S</h3>

        <div class="faqs-con mt-4">

            <div class="accordion" id="accordionExample">

                <div class="card">

                  <div class="card-header" id="headingOne">

                      <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                        What Kind of Results Can I Expect?

                      </button>

                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                    <div class="card-body">

                        While we cannot guarantee a specific timeline for

                        clients (since everyone has a unique situation),

                        most of our previous clients have reported

                        experiencing shifts immediately after each

                        session. Past clients have said they’ve had

                        numerous epiphanies after closely adhering to the

                        coach’s instruction after the session

                    </div>

                  </div>

                </div>

                <div class="card">

                  <div class="card-header" id="headingTwo">

                      <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                        Who is our ideal client?

                      </button>

                  </div>

                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

                    <div class="card-body">

                        <ul class="list-unstyled">

                        <li>1. Impatient – wants results yesterday</li>

                        <li>2. Decisive – takes decisions quickly</li>

                        <li>3. High Integrity – keeps promises Are you an ideal client? Take the assessment to

                        find out</li> 

                    </ul>                   

                    </div>

                  </div>

                </div>

                <div class="card">

                  <div class="card-header" id="headingThree">

                      <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                        Why is there a focus on speed?

                      </button>

                  </div>

                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                    <div class="card-body">

                        Our Founder, Rajiv Jadhav, is by nature very

                        impatient and understands that most clients want

                        results yesterday. Keeping that in mind, our

                        approach is to cut to the chase and deliver a

                        desired outcome 10 or 20 times faster than

                        conventional approaches, so that the client can

                        quickly transition to their next phase

                    </div>

                  </div>

                </div>



                <div class="card">

                    <div class="card-header" id="headingFour">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                            What if I’m not your ideal client?

                        </button>

                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                      <div class="card-body">

                        Contact Us if you’d like to appeal our decision or

                        use our new Q&A service

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingFive">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                            Why are you so picky about the clients you accept?

                        </button>

                    </div>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                      <div class="card-body">

                        Rajiv is a serial entrepreneur and busy CEO, so has very limited time available to serve coaching clients

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingSix">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">

                            What are the Benefits of working with Rajiv Jadhav coaching?

                        </button>

                    </div>

                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">

                      <div class="card-body">

                        <ul class="list-unstyled">

                        <li>1. Turbo-charged Super Fast Results</li>

                        <li>2. Access to Exclusive Networking Events to help grow your business and you</li>

                        </ul>

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingSeven">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">

                            How is the service delivered?

                        </button>

                    </div>

                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">

                      <div class="card-body">

                        Manifestation Coaching is delivered through Zoom Video calls. Energetic Clearing is delivered through Phone Call.

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingEight">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">

                            Refund Policy?

                        </button>

                    </div>

                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">

                      <div class="card-body">

                        No Refunds. Though we may consider transferring services paid for in advance to someone you refer, (if they are an ideal client), at our discretion.

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingNine">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">

                            How to Prepare for a coaching session?

                        </button>

                    </div>

                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">

                      <div class="card-body">

                        <ul class="list-unstyled">

                        <li>1. Make sure you have a stable and good internet or wifi connection, with a working webcam</li>

                        <li>2. Select a space that is not noisy so neither you nor your coach will be disturbed during your session</li>

                        </ul>

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingTen">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">

                            Appointment Cancellation/Reschedule Policy?

                        </button>

                    </div>

                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">

                      <div class="card-body">

                        A client may request for an appointment to be rescheduled at least 36 hours before the

                        appointment, without any penalty. Requesting a reschedule less than 36 hours from the meeting will attract a $75 reschedule fee. No shows without prior communication with us forfeit the fee paid.

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingEleven">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">

                            How will you help me find my Soulmate?

                        </button>

                    </div>

                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">

                      <div class="card-body">

                        <ul class="list-unstyled">

                        <li>1. A manifestation session to help you figure out who your ideal partner is</li>

                        <li>2. An Energetic Clearing session to remove all the blocks that are preventing you from meeting your desired person</li>

                        <li>3. Our New Q&A service helps you identify if you have a soul connection with anyone you know presently or did know earlier in life</li>

                        </ul>

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingTwelve">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">

                            Is the energetic clearing only used to help me find my soulmate?

                        </button>

                    </div>

                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">

                      <div class="card-body">

                        No. The energetic clearing is used to remove ANY blocks based on whatever you want, which could include finding your soulmate. The energetic clearing could be used to help accelerate your wealth creation, improving health, finding happiness, finding your purpose, etc. 

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingthirteen">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">

                            Why should I believe any of the claims made here?

                        </button>

                    </div>

                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingthirteen" data-parent="#accordionExample">

                      <div class="card-body">

                        <p>Like, Rajiv says many times – Believe in us, until you believe in yourself…</p>

                            <p>Rajiv Jadhav is a public figure with an active social media activity having received 40+ public recommendations on<a href="#">Linkedin</a> – which you are free to verify yourself by looking at his public <a href="#">linkedin profile.</a></p>

                            <p>Rajiv is a veteran Government Advisor (India, Trinidad & Tobago, Nigeria, Malawi, Czech Republic, United States, etc. ) Board Member and keynote speaker who’s been invited to speak at the United Nations.</p>

                            <p>If all this doesn’t convince you, we’re probably not the right solution provider for you, and we wish you well in your journey ahead.</p>

                      </div>

                    </div>

                  </div>



                  <div class="card">

                    <div class="card-header" id="headingfourteen">

                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">

                            How does the energetic clearing work?

                        </button>

                    </div>

                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingfourteen" data-parent="#accordionExample">

                      <div class="card-body">

                        <p>You speak to our Healer through a phone call. Its

                            an easy paced comfortable conversation which

                            usually lasts 60-90 minutes depending on the

                            session chosen. </p>

                            <p>We advise clients to be fully transparent and

                                candid in those conversations since we maintain

                                100% confidentiality for your privacy and safety.

                                The more candid and honest you are, the more

                                benefit you will experience.</p>

                      </div>

                    </div>

                  </div>

              </div>

        </div>

    </div>

</section>





@endsection