@extends('front_master')

@section('title', 'Rajeev Jadhav | Homepage')

@section('bc', 'Contact')

@section('link', '')

@section('content')

@include('customer.include.breadcrumb')

<!-- <div class="container my-5">

    <div class="card">

        <div class="card-body">

            <h4>Page under Construction</h4>

        </div>

    </div>

</div> -->



<section class="contact-container my-5 wow fadeInDown">

     <div class="container">
        <div class="section-heading px-0 px-lg-5">
            <h2 class="text-center mb-5">Get In touch</h2>
            <form action="{{url('/contactus')}}" method="post">
            @csrf
                <div class="mx-5 contact-con shadow px-4 py-5">

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('public/front/images/contact.jpg')}}" class="img-fluid" />
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="Enter First Name"
                                            name="firstname" />
                                            @error('firstname')
                                							<span class="text-danger"> {{ 'Required' }}</span>
                                							@enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Last Name"
                                            name="lastname" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="Enter Email" name="email" />
                                @error('email')
                                							<span class="text-danger"> {{ 'Required' }}</span>
                                							@enderror
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input class="form-control" type="text" placeholder="Enter Company" name="companyname" />
                            </div>
                            <div class="form-group">
                                <label>I’m Interested in learning about</label>
                                <select class="form-control" name="about">
                                    <option>Manifestation Coaching</option>
                                    <option>Divine Healing</option>
                                    <option>Finding My Soulmate</option>
                                    <option>Healing My Sickness</option>
                                    <option>Booking a Speaker</option>
                                    <option>Helping my team</option>
                                    <option>Helping me</option>
                                </select>
                                @error('about')
                                							<span class="text-danger"> {{ 'Required' }}</span>
                                							@enderror
                            </div>

                           @if(Session::has('message'))
                          <h5 class="text-success text-center"> {{Session::get('message')}} </h5>
                           @endif
                            <div class="send-btn text-center"><button class="btn btn-primary">Submit</button></div>

                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>

</section>

@endsection