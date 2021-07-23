@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'Services')
@section('link', 'services')
@section('content')
<section class="signup-container pt-3 pb-5 py-md-5">
    <div class="container">
        <div class="signup-box shadow">
            
            <div class="row">
                <div class="col-12 col-lg-4 bg-primary position-relative mobile-none">
                    <div class="form-left-panel">
                        <h2><span>DISCUSS YOUR</span>ASSESSMENT WITH US</h2>
                        <div class="left-img"><img src="{{ asset('public/front/images/4398.png') }}"/></div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="py-4 pr-4 pr-md-4 pl-4 pl-lg-2 sign-right">
                    <h3>Sign up for new registration</h3>
                    <form accept="{{url('/customer/regiser')}}" method="POST">
                        @csrf
                        <!--<div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="d-md-flex">
                                        <div class="mr-2">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="con-type" id="call-based" checked>
                                                <label class="custom-control-label" for="call-based">
                                                    New Registration
                                                </label>
                                              </div>
                                        </div>
                                        <div class="ml-0 ml-md-2">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="con-type" id="msg-call">
                                                <label class="custom-control-label" for="msg-call">
                                                    Continue as a Guest
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name"/>
                                    @error('fullname')
                                      <small class='text-danger'> {{ $message }} </small> 
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email"/>
                                  @error('email')
                                      <small class='text-danger'> {{ $message }} </small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Contact No.</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="Enter mobile no."/>
                                    @error('phone')
                                      <small class='text-danger'> {{ $message }} </small> 
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password"/>
                                    @error('password')
                                      <small class='text-danger'> {{ $message }} </small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password"/>
                                          @error('password_confirmation')
                                      <small class='text-danger'> {{ $message }} </small> 
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="signin-link">Have an Account ? click here for <a href="{{url('/customer/login')}}"> LOGIN</a></div>
        
                    <div class="submit-btn text-center">
                        <input type="submit" class="btn btn-primary" value="Submit">                      
                    </div>
        
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection