@extends('coach_master')
@section('title', 'Homepage')
@section('content')
<!--begin::Container-->
<div class="container">
    <!--begin::Card-->  
    <div class="card card-custom gutter-b">
        <div class="card-body">
            <!--begin::Details-->
            <div class="d-flex mb-9">
                <!--begin: Pic-->
                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                    @php
                                    $path = 'storage/app/coach/profile/'.$profile->photo;            
                                   @endphp
                    <div class="symbol symbol-50 symbol-lg-120">
                         <img src="{{ asset($path) }}" alt="image">
                    </div>
                    <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                        <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between flex-wrap mt-1">
                        <div class="d-flex mr-3">
                            <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $profile->name }}</a>
                            <a href="#">
                                <i class="flaticon2-correct text-success font-size-h5"></i>
                            </a>
                        </div>
                        <div class="my-lg-0 my-3">
                            	@php @$id = Auth::guard('coach')->user()->id @endphp
								
                            <a  href="{{ url('coach/edit_profile/'.$id) }}"  class="btn btn-sm btn-info font-weight-bolder text-uppercase">Edit Profile</a>
                        </div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Content-->
                    <div class="d-flex flex-wrap justify-content-between mt-1">
                        <div class="d-flex flex-column flex-grow-1 pr-8">
                            <div class="d-flex flex-wrap mb-4">
                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                   <i class="fa fa-envelope text-primary mr-2"></i>{{ $profile->email }}</a>
                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                     <i class="fa fa-phone text-primary mr-2"></i></i>{{ $profile->phone }}</a>
                                <!--<a href="#" class="text-dark-50 text-hover-primary font-weight-bold">-->
                                <!--    <i class="flaticon2-placeholder mr-2 font-size-lg"></i></a>-->
                            </div>
                            <span class="font-weight-bold text-dark-50">Qualification : {{ $profile->qualification}}</span>
                            <span class="font-weight-bold text-dark-50">Years of Experience : {{ $profile->expertise}}</span>
                        </div>
                        <!--<div class="d-flex align-items-center w-25 flex-fill float-right mt-lg-12 mt-8">-->
                        <!--    <span class="font-weight-bold text-dark-75">Progress</span>-->
                        <!--    <div class="progress progress-xs mx-3 w-100">-->
                        <!--        <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>-->
                        <!--    </div>-->
                        <!--    <span class="font-weight-bolder text-dark">78%</span>-->
                        <!--</div>-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
            <div class="separator separator-solid"></div>
            <!--begin::Items-->
            <!--<div class="d-flex align-items-center flex-wrap mt-8">-->
                <!--begin::Item-->
            <!--    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">-->
            <!--        <span class="mr-4">-->
            <!--            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>-->
            <!--        </span>-->
            <!--        <div class="d-flex flex-column text-dark-75">-->
            <!--            <span class="font-weight-bolder font-size-sm">Earnings</span>-->
            <!--            <span class="font-weight-bolder font-size-h5">-->
            <!--                <span class="text-dark-50 font-weight-bold">$</span>249,500</span>-->
            <!--        </div>-->
            <!--    </div>-->
                <!--end::Item-->
                <!--begin::Item-->
            <!--    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">-->
            <!--        <span class="mr-4">-->
            <!--            <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>-->
            <!--        </span>-->
            <!--        <div class="d-flex flex-column text-dark-75">-->
            <!--            <span class="font-weight-bolder font-size-sm">Expenses</span>-->
            <!--            <span class="font-weight-bolder font-size-h5">-->
            <!--                <span class="text-dark-50 font-weight-bold">$</span>164,700</span>-->
            <!--        </div>-->
            <!--    </div>-->
                <!--end::Item-->
                <!--begin::Item-->
            <!--    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">-->
            <!--        <span class="mr-4">-->
            <!--            <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>-->
            <!--        </span>-->
            <!--        <div class="d-flex flex-column text-dark-75">-->
            <!--            <span class="font-weight-bolder font-size-sm">Net</span>-->
            <!--            <span class="font-weight-bolder font-size-h5">-->
            <!--                <span class="text-dark-50 font-weight-bold">$</span>782,300</span>-->
            <!--        </div>-->
            <!--    </div>-->
                <!--end::Item-->
                <!--begin::Item-->
            <!--    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">-->
            <!--        <span class="mr-4">-->
            <!--            <i class="flaticon-file-2 display-4 text-muted font-weight-bold"></i>-->
            <!--        </span>-->
            <!--        <div class="d-flex flex-column flex-lg-fill">-->
            <!--            <span class="text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>-->
            <!--            <a href="#" class="text-primary font-weight-bolder">View</a>-->
            <!--        </div>-->
            <!--    </div>-->
                <!--end::Item-->
                <!--begin::Item-->
            <!--    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">-->
            <!--        <span class="mr-4">-->
            <!--            <i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>-->
            <!--        </span>-->
            <!--        <div class="d-flex flex-column">-->
            <!--            <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>-->
            <!--            <a href="#" class="text-primary font-weight-bolder">View</a>-->
            <!--        </div>-->
            <!--    </div>-->
                <!--end::Item-->
                <!--begin::Item-->
            <!--    <div class="d-flex align-items-center flex-lg-fill mb-2 float-left">-->
            <!--        <span class="mr-4">-->
            <!--            <i class="flaticon-network display-4 text-muted font-weight-bold"></i>-->
            <!--        </span>-->
            <!--        <div class="symbol-group symbol-hover">-->
            <!--            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Mark Stone">-->
            <!--                <img alt="Pic" src="{{ asset('public/assets/media/users/300_25.jpg') }}">-->
            <!--            </div>-->
            <!--            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Charlie Stone">-->
            <!--                <img alt="Pic" src="{{ asset('public/assets/media/users/300_19.jpg') }}">-->
            <!--            </div>-->
            <!--            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Luca Doncic">-->
            <!--                <img alt="Pic" src="{{ asset('public/assets/media/users/300_22.jpg') }}">-->
            <!--            </div>-->
            <!--            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Nick Mana">-->
            <!--                <img alt="Pic" src="{{ asset('public/assets/media/users/300_23.jpg') }}">-->
            <!--            </div>-->
            <!--            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Teresa Fox">-->
            <!--                <img alt="Pic" src="{{ asset('public/assets/media/users/300_18.jpg') }}">-->
            <!--            </div>-->
            <!--            <div class="symbol symbol-30 symbol-circle symbol-light">-->
            <!--                <span class="symbol-label font-weight-bold">5+</span>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
                <!--end::Item-->
            <!--</div>-->
            <!--begin::Items-->
        </div>
    </div>
    <!--end::Card-->

</div>
<!--end::Container-->
@endsection