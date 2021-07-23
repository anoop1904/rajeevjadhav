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
                    <h4>Change Password</h4>
                    <form class="mt-4" action="{{url('/customer/update_password')}}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="old_password" type="text" value="{{old('old_password')}}" placeholder="Old Password"/>
                                @error('old_password')
                               <small class="text-danger"> {{$message}}</small>
                            @enderror                   
                            @if(session()->has('error'))
                            <small class="text-danger"> {{ session()->get('error') }}</small>
                             @endif
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="new_password" type="text" value="{{old('new_password')}}" placeholder="New Password"/>
                                @error('new_password')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="new_password_confirmation"  type="text" value="{{old('new_password_confirmation')}}" placeholder="Confirm New Password"/>
                                @error('new_password_confirmation')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center cha-pass-btn">                
                        <input type="submit" class="btn btn-primary" value="Save Password">
                    </div>
                </form>



                </div>

            </div>
        </div>
    </div>
</section>


@endsection