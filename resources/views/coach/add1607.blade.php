@extends('admin.masterpage')
@section('title', 'Homepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <!--begin::Card body-->
                            <div class="card-body">
                                <form class="form" method="post" action="{{ url('store_coach') }}">
                                    @csrf
                                    <div class="tab-content">
                                        <!--begin::Tab-->
                                        <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-7 my-2">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <label class="col-3"></label>
                                                        <div class="col-9">
                                                            <h6 class="text-dark font-weight-bold mb-10">Customer Info:</h6>
                                                        </div>
                                                    </div>
                                                    <!--end::Row-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                                        <div class="col-9">
                                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                                <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)"></div>

                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                                    <input type="hidden" name="profile_avatar_remove" />
                                                                </label>

                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">First Name</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="firstname" value="">
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Password</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" value="">
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Confirm Password</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-lg form-control-solid" type="confirm_password" name="password" value="">
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Qualification</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="qualification" value="">
                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Expertise</label>
                                                        <div class="col-9">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="expertise" value="">
                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Contact Phone</label>
                                                        <div class="col-9">
                                                            <div class="input-group input-group-lg input-group-solid">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-phone"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control form-control-lg form-control-solid" name="phone" value="" placeholder="Phone">
                                                            </div>
                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Email Address</label>
                                                        <div class="col-9">
                                                            <div class="input-group input-group-lg input-group-solid">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-at"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="email" class="form-control form-control-lg form-control-solid" name="email" value="" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Role</label>
                                                        <div class="col-9">
                                                            <select name="coach_type" id="coach_type" class="form-control h-auto form-control-solid py-4 px-8">
                                                                <option value="0">select Roal</option>
                                                                <option value="cricket">cricket</option>
                                                                <option value="chess">chess</option>
                                                                <option value="singing">singing</option>
                                                                <option value="computer">computer</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">About Coach</label>
                                                        <div class="col-9">
                                                            <textarea class="form-control form-control-lg form-control-solid" name="about_coach" id="about_coach" cols="30" rows="4" placeholder="optional"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Tab-->
                                    </div>
                                    <input class="btn btn-danger" type="submit" value="submit coach">
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