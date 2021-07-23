@extends('admin.masterpage')
@section('title', 'Homepage')
@section('content')


<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Add Module</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <button type="button" class="btn btn-outline-info">Back</button>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" action="{{url('role/add-module')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent Module</label>
                                <select class="form-control form-control-solid" name="parent_id">
                                    <option value="">--Select Parent Module--</option>
                                    <option value="0">No Parent Module</option>
                                    @if($mdata)
                                    @foreach($mdata as $row)
                                    <option value='{{$row->id}}' >{{$row->name}}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Module</label>
                                <input type="text" id="mname" name="mname" class="form-control form-control-lg" placeholder="Add Module">
                            </div>
                            <div class="form-group">
                                <label>Url</label>
                                <input type="text" id="url" name="url" class="form-control form-control-lg" placeholder="Add Url">
                            </div>
                            <div class="form-group">
                                <label>Icon</label>
                                <input type="text" id="icon" name="icon" class="form-control form-control-lg" placeholder="Add Icon">
                            </div>


                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
</div>



@endsection