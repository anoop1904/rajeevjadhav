@extends('admin_master')
@section('title', 'Homepage')
@section('content')


<!--begin::Container-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Add Promocode</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <a type="button" class="btn btn-outline-info" href="{{url('admin/promocode')}}">Back</a>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="form" action="{{url('admin/add-promocode')}}" method="POST"> 
                @csrf
                    <div class="card-body">
                    @if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>Promocode :</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pcode" placeholder="Enter your code" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark"></i></span></div>
                                </div>
                                @error('pcode')
							<span class="text-danger"> {{ 'Required'}}</span>
							@enderror

                            </div>
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>Amount :</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="amount" placeholder="Enter amount" />
                                    <div class="input-group-append">
                                          <select name="type" id="type" class="form-control h-auto form-control-solid py-2 px-4">
                                            <option value="$">$</option>
                                            <option value="%">%</option>
                                               
                                        </select>
                                        </div>
                                </div>
                                <!--<span class="form-text text-muted">Please enter your postcode</span>-->
                                @error('amount')
							<span class="text-danger"> {{ 'Required'}}</span>
							@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>Start Date :</label>
                            <div class="col-lg-3">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="datepicker" name="startdate" placeholder="Select date" autocomplete="off" />
                                    <div class="input-group-append">
                                        <span class="input-group-text" >
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('startdate')
							<span class="text-danger"> {{ 'Required'}}</span>
							@enderror
                            </div>
                       
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>End Date :</label>
                            <div class="col-lg-3">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="datepicker_1" name="enddate"  placeholder="Select date" autocomplete="off" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('enddate')
							<span class="text-danger"> {{ 'Required'}}</span>
							@enderror
                            </div>
                        </div>
                       
                        <!-- <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-lg-right">Select Date Range</label>
                            <div class="col-lg-3">
                                <div class="input-daterange input-group" id="kt_datepicker_5">
                                    <input type="text" class="form-control" name="start">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-ellipsis-h"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="end">
                                </div>
                                <span class="form-text text-muted">Select start date and end date</span>
                            </div>
                        </div> -->


                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <!--<button type="reset" class="btn btn-secondary">Cancel</button>-->
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>




@endsection