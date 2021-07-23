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
                        @php
                        $role = DB::table('roles')->where('status', '0')->get()->toArray();
                        @endphp

                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body">
                                                      

                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-dark font-weight-bold mb-10">Add Testimonials</h6>
                                    </div>
                                </div>
                                <form method="post" action="{{ url('admin/add-testimonial') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin::Group-->
                                     <div class="form-group row">
                                           @if(session()->has('message'))
                    						<div class="alert alert-success col-6" >
                    							{{ session()->get('message') }}
                    						</div>
                    						@endif
                                         </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Image</label>
                                        <div class="col-6">


                                            <div class="image-input image-input-outline image-input-circle" id="kt_image_1">
                                                <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_3.jpg)"></div>

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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right">Upload Video:</label>

                                        <div class="col-lg-9">
                                            <input type="file" name="profile_video" value="" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right">OR</label>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> Video Link:</label>

                                        <div class="col-lg-9">
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="profile_link" value="" />
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Name</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="firstname" value="{{ old('firstname') }}">
                                            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Title</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="design" value="">
                                            @error('design') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Service Type</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="type" value="">
                                            @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Description</label>
                                        <div class="col-6">
                                            <textarea class="form-control form-control-lg form-control-solid" name="descrp" id="descrp" cols="30" rows="4" placeholder="optional"></textarea>
                                        </div>
                                    </div>
                                    <input class="btn btn-primary mr-2" type="submit" value="Submit">
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