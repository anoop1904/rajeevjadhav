@extends('front_master')
@section('title', 'Rajeev Jadhav | Login')
@section('bc', 'Schedule call')
@section('content')
@include('customer.include.breadcrumb')
<section class="signup-container py-5">
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
                    <div class="py-4 pr-4 pl-4 pl-lg-2 sign-right">
                    <h3>Sign in</h3>
                    <form action="{{url('/customer/login')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email"/>
                                    @error('email')
                                       <small class='text-danger'>{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                                    @error('password')
                                       <small class='text-danger'>{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!--<div class="forgot-password mt-2 mb-3 text-center"><a href="#">Forgot Password</a></div>-->
        
                    <div class="submit-btn text-center">
                        <input type="submit" class="btn btn-primary" value="Submit">                     
                    </div>
                    <div class="signin-link">Don't have an Account ? click here for <a href="{{url('/customer/register')}}"> SIGNUP</a></div>
        
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection