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
                                @if($role)
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-dark font-weight-bold mb-10">Coach Registration</h6>
                                    </div>
                                </div>
                                <form method="post" action="{{ route('store_coach') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Image</label>
                                        <div class="col-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url(assets/media/users/100_1.jpg)"></div>

                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar" value="" />
                                                    <input type="hidden" name="profile_avatar_remove" value="" />
                                                </label>

                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title="Cancel Image">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                            @error('profile_avatar') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Name</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="firstname" value="{{ old('firstname') }}">
                                            @error('firstname') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Password</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                type="password" name="password" value="">
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Confirm
                                            Password</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                type="password" name="password_confirmation" value="">
                                            @error('password_confirmation') <span
                                                class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Contact
                                            Phone</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="phone" value="{{ old('phone') }}">
                                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Email</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="email" value="{{ old('email') }}">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-3 text-lg-right text-left">Title</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="qualification" value="{{ old('qualification') }}">
                                            @error('qualification') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Years of
                                            Experience</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="expertise" value="{{ old('expertise') }}">
                                            @error('expertise') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Role</label>
                                        <div class="col-6">
                                            <select name="coach_type" id="coach_type"
                                                class="form-control h-auto form-control-solid py-4 px-8">
                                                <option value="">Select Coach</option>
                                                @foreach($role as $role_data)
                                                <option value="{{ $role_data->id }}">{{ $role_data->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('coach_type') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> -->
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Role</label>
                                        <div class="col-6">
                                            <div class="multiselect">
                                                <div class="selectBox" onclick="showCheckboxes()">
                                                    <select class="form-control">
                                                        <option>Select an option</option>
                                                    </select>
                                                    <div class="overSelect"></div>
                                                </div>
                                                <div id="checkboxes" >
                                                @foreach($role as $role_data)
                                                    <label ><input type="checkbox" id="{{ $role_data->id }}" name="role[]" value="{{ $role_data->id }}"  />{{ $role_data->name }}</label>
                                                    @endforeach
                                                </div>
                                            </div>

                                            @error('role') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- <div class="multiselect">
                                        <div class="selectBox form-control" onclick="showCheckboxes()">
                                            <select>
                                                <option>Select an option</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            <label for="one">
                                                <input type="checkbox" id="one" />First checkbox</label>
                                            <label for="two">
                                                <input type="checkbox" id="two" />Second checkbox</label>
                                            <label for="three">
                                                <input type="checkbox" id="three" />Third checkbox</label>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">About Coach</label>
                                        <div class="col-6">
                                            <textarea class="form-control form-control-lg form-control-solid"
                                                name="about_coach" id="about_coach" cols="30" rows="4"
                                                placeholder="optional"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                       <input class="btn btn-primary" type="submit" value="Submit">
                                    </div>
                                </form>
                                @else
                                <h2 class="text-center"> {{ 'Please Create new Role for Coach' }} </h2>
                                @endif
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