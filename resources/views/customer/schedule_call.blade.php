@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'Schedule call')
@section('link', 'schedule-call')
@section('content')
@include('customer.include.breadcrumb')
<style>
    .d-hide{
        display:none;
    }
    .parent_id{
        display: none;
    }
    .progress-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #ff5722;
    transition: width .6s ease;
}
.btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #7575753d;
    border-color: #7575753d;
}
</style>
{{-- @php
    print_r($s_que['service_question']);
@endphp --}}
<section class="schedule-call-container pb-5">
    <div class="container">
        
        <div class="section-heading wow fadeInUp mb-5 mt-4">
        <h2 class="text-center">Select The Area You Want Help With Today</h2>
    </div>
        <div class="schedulecall-con shadow">
            <div class="row">
                <div class="col-12 col-lg-4 bg-primary position-relative mobile-none">
                    <div class="form-left-panel">
                         
                        <h2><span>Misery is History!</span>Peace of Mind Is Within Your Reach...</h2>
                        <div class="left-img"><img src="{{url('public/front/images/4398.png')}}"/></div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-8">
                    <div class="py-4 pr-4 pl-4 pl-lg-2">
                    <!--<h3>Personal Details</h3>-->
            <form class="mt-3" id="question_form" action="{{url('/customer/question/submit')}}" method="POST">
                @csrf
                <div class="row">
                <div class="col-12">
                <div class="form-group">
                    <label>Service Type</label>
                    <select class="form-control" id="type" onchange="question_fetch(value)" name="service_type">
                        <option>Select Question</option>
                        @foreach ($s_que['service_question']  as $service_question)  
                        {{-- @if ($service_question->coach_id == '1')
                          @php  $value = 'spiritual'  @endphp
                        @else
                        @php  $value = 'business'  @endphp
                        @endif                   --}}
                                 <option value="{{$service_question->coach_id}}">{{$service_question->ques}}</option>
                        @endforeach                       
                    </select>
                </div>
            </div>
            </div>
                
                <div class="row" id="row_name">
                    <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label>Your First Name <span class="text-danger">*</span></label>
                       <input type="text" name="fname" id="fname" onchange="text_valid()" class="form-control" value="{{ old('fname') }}" placeholder="Enter First Name"/>
                      <small id="fname_error" class='text-danger'></small> 
                    </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Your Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="lname" id="lname" onchange="text_valid()" class="form-control" placeholder="Enter Last Name"/>
                            <small id="lname_error" class='text-danger'></small> 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Their First Name <span class="text-danger">*</span></label>
                            <input type="text" name="partner_fname" onchange="text_valid()" id="partner_fname" class="form-control" placeholder="Enter First Name"/>
                            <small id="partner_fname_error" class='text-danger'></small> 
                        </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Their Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="partner_lname" onchange="text_valid()" id="partner_lname" class="form-control" placeholder="Enter Last Name"/>
                                <small id="partner_lname_error" class='text-danger'></small> 
                            </div>
                        </div>
                </div>

     
              <div class="row" id="row_name_2">
                <div class="col-12">
                    <div class="form-group position-relative">
                        <label for="custom-qa" data-toggle="tooltip" title="like what service you offer, who your ideal client is, how long is your average sales cycle, how do customers find you, do you have a website & social media presence? How much do you spend each month on marketing?">Tell us a little about your business <i class="fa fa-info-circle" aria-hidden="true"></i> </label>
                        <textarea class="form-control" name="summry_business" id="custom-qa" rows="4" maxlength ="140" placeholder=""></textarea>
                        {{-- <div class="charLim">Total Charector Limit <span id="charNum">140</span></div> --}}
                    </div>
                </div>             
                </div>

                {{-- <div class="row" id="row_name_2">
                    <div class="col-12 col-sm-12">
                    <div class="form-group p-2" style="background: #e7e5e5;">
                        <small style="font-weight: 400;">Open field to capture business details .</small>
                        <br>
                       <small id="fname_error" class='text-dark text-justify'>
                        Title says – tell us a little about your business like what service you offer, who your ideal client is, how long is your average sales cycle, how do customers find you, do you have a website & social media presence? How much do you spend each month on marketing? 
                    </small> 
                    </div>
                    </div>              
                </div> --}}

                <div class="sep-line mt-2"></div>
            <div class="parent_id" id="parent_id">
                <div class="row">
                    <div class="col-12">
                    <div class="form-group position-relative pr-0 pr-lg-5">
                        <div id="qaCount" class="question-count">0</div>    
                        <input type="hidden" name="qaCount_hidden" id="qaCount_hidden" value="0">    
          
                        <label class="pr-5 pr-lg-0">Select the Questions you want answered</label>
                        <div id="QA-checkbox"> 
                               <div id="anoop_test">
                                   
                               </div>                         
                               <div class='custom-control custom-checkbox d-hide' id="d-hide">
                                <input class='custom-control-input other_que question_check' onchange='count_que()' type='checkbox' name='question_check[]' value='' id='check_other'>
                                <label class='custom-control-label' for='check_other'>
                                Something Else
                                </label>
                                </div>                             
                        </div>                          
                    </div>
                </div>
                </div>

                <div class="row other_question" style='display:block;'>
                    <div class="col-12">
                        <div class="form-group position-relative">
                            <textarea class="form-control" name="question_check[]" id="custom-qa" rows="4" maxlength ="140" placeholder="Enter Question"></textarea>
                            <div class="charLim">Total Charector Limit <span id="charNum">140</span></div>
                        </div>
                    </div>
                </div>
            
                <div class="sep-line"></div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Would you like to schedule a complimentary Discovery Call?</label>

                            <div class="d-flex">
                                <div class="mr-2">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="call_m" id="call-yes" value="yes">
                                        <label class="custom-control-label" for="call-yes">
                                            Yes
                                        </label>
                                      </div>
                                </div>
                                <div class="ml-2">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="call_m" id="call-c" value="done">
                                        <label class="custom-control-label" for="call-c">
                                            No
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div id="payment-row" style="display: none;">
                <div class="sep-line"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Pricing</label>
                            <input type="hidden" name="question_price_total" id="question_price_total" value="">
                            <div class="selected-price">You have selected <span id="count_of_q"></span> question and total price is <strong id='ttl'>0</strong></div>
                            <div class="or-plan">OR</div>
                            <h4>Get More Value from Plans that allow you to ask more questions in a 1:1 with your Coach</h4>
                            <div class="payment-plan" style="position:relative;">
                            <div class="row pt-3">                           
                                @foreach ($s_que['package']  as $key=>$package) 
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio" data-toggle="tooltip" title="{{$package->description}}">   
                                            <input class="custom-control-input" type="radio" name="package_id" mydata="{{$package->packg_for}}" value="{{$package->id}}" id="plan.{{$key+1}}">
                                            <label class="custom-control-label" for="plan.{{$key+1}}">
                                                {{$package->name}} - <strong>${{$package->price}} <i class="fa fa-info-circle" aria-hidden="true"></i></strong>
                                            </label>
                                        </div>
                                    </div>                                
                                @endforeach
                                    <span class="fa-stack" onclick="reset_radio()" style="position: absolute; top:6px; right:6px;">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-undo fa-stack-1x fa-inverse"></i>
                                  </span>
                            </div>
                             </div>                        
                             
                        </div>
                    </div>
                </div>
            </div>
                    <input type="hidden" id="customer_id" name="customer_id" value="">
                    <input type="hidden" id="customer_type" name="customer_type" value="">
               
                <div class="submit-btn text-center" id="submit_btn_area">
              
                    @if(Auth::guard('customer')->check() == true) 
                    <input type="submit" value="Continue" id="with_id" class="btn btn-primary" disabled style="display: none;">                           
                    @else                    
                    <button class="btn btn-primary" id="without_id" type="button" data-toggle="modal" data-target="#registraion-modal" disabled>Continue</button>
                    {{-- <button class="btn btn-danger" id="without_id_dummy" onclick="validate_fun()" type="button" style="display: none;">Continue</button> --}}
                    <input type="submit" value="Continue" id="without_id_dummy" class="btn btn-danger" style="display: none;" disabled> 
                    @endif
                </div>
                <div class="submit-btn text-center" id="redirect_btn_area" style="display: none;">              
                    <a href="{{url('/discover_page')}}" id="redirect_btn" class="btn btn-primary">Continue</a> 
                </div>
                    {{-- <div class="col-6 offset-3" style="position: absolute;">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                      </div>
                    </div> --}}
            </form>
    
            </div>

        

                </div>             
            </div>
            
        </div>
    </div>
</section>

@endsection
@include('customer.include.schedule_model')
