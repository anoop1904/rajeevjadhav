@extends('admin_master')
@section('title', 'Homepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="content d-flex flex-column flex-column-fluid">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Card-->
                        <div class="card mb-20">
                            <!--begin::Card body-->                        
                            <div class="card-body">
                                    <div class="row">                               
                                        <div class="col-12">
                                            <h6 class="text-dark font-weight-bold mb-10">Edit Profile</h6>
                                        </div>
                                    </div>

                                   @php
                                    $path = 'storage/app/admin/profile/'.$profile->photo;            
                                   @endphp


                                <form method="post" action="{{ url('admin/updatedadmin_profile/'.$profile->id) }}" enctype="multipart/form-data">
                                @csrf
                                   <!--begin::Group-->
                                   <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Image</label>
                                                        
                                                        <div class="col-6">
                                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                             
                                                                <div class="image-input-wrapper" style="background-image: url({{asset($path)}})"></div>

                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change Image">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="profile_avatar" value="" />
                                                                    <input type="hidden" name="profile_avatar_remove" value="" />
                                                                </label>

                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel Image">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            @error('profile_avatar') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-3 text-lg-right text-left"> Name</label>
                                                    <div class="col-6">
                                                        <input class="form-control form-control-lg form-control-solid" type="text" name="firstname" value="{{ $profile->name }}">
                                                        @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>                           
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left"> Phone</label>
                                                        <div class="col-6">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="phone" value="{{ $profile->phone }}" >
                                                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Email</label>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="email" value="{{ $profile->email }}" >
                                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                   
                                                  
                                       <div class="card-footer">
                                       <input class="btn btn-primary" type="submit" value="Submit" style="position:absolute; right:20px;">
                                       </div>
                                </form>

                            </div>
                            <!--begin::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>


        </div>
    </div>
</div>
@endsection