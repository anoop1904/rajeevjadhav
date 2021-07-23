@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'Services')
@section('link', 'services')
@section('content')
@include('customer.include.breadcrumb')

<section class="profile-container py-5 bg-light wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-boxes shadow-sm py-2 px-3">
                   <div class="user-name position-relative">
                    <img src="{{asset('public/front/images/user.png')}}" class="user-image"/>
                    <div class="user-txt">
                        <small>Hello,</small>
                        <p>{{$customer->name}}</p>
                    </div>
                    </div>
                </div>






                
                <div class="user-boxes shadow-sm py-2">
                    <div class="user-links">
                      <ul class="list-unstyled">
                        <li><a href="{{url('/customer/pfofile')}}" class="{{Request::segment(2) == 'pfofile' ? 'cus_active' : ''}}"><i class="icon-user icons {{Request::segment(2) == 'pfofile' ? 'cus_active' : ''}}"></i> My Profile</a></li>
                        <li><a href="{{url('/customer/response')}}" class="{{Request::segment(2) == 'response' ? 'cus_active' : ''}}"><i class="icon-envelope icons {{Request::segment(2) == 'response' ? 'cus_active' : ''}}"></i> Responses</a></li>
                        <li><a href="{{url('/customer/creadit')}}" class="{{Request::segment(2) == 'creadit' ? 'cus_active' : ''}}"><i class="fa fa-usd {{Request::segment(2) == 'creadit' ? 'cus_active' : ''}}"></i> My Credits</a></li>
                        <li><a href="{{url('/customer/change_password')}}" class="{{Request::segment(2) == 'change_password' ? 'cus_active' : ''}}"><i class="fa fa-lock {{Request::segment(2) == 'change_password' ? 'cus_active' : ''}}"></i> Change Password</a></li>
                        <li><a class="" href="{{url('/customer/logout')}}" ><i class="icon-login icons"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 user-infor min-height-380">
                    <h4>Personal Information <a href="#"></a></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$customer->name}}" disabled/>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value="Wick" disabled/>
                            </div>
                        </div> --}}
                    </div>

                    <h4 class="mt-4">Email Address <a href="#"></a></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="email" value="{{$customer->email}}" disabled/>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-4">Mobile Number <a href="#"></a></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" value="{{$customer->phone}}" disabled/>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection