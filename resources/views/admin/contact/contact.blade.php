@extends('admin_master')
@section('title', 'Homepage')
@section('content')
<!--begin::Container-->
<div class="container pb-10">
   

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-2 py-5">
                     <table class="table table-striped table-bordered table-responsive-sm dataTable" id="example_contra">
                        <thead>
                            <tr>
                                <th class="text-center">Sr. No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th >Company Name</th>
                                <th >I’m Interested in learning about</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $contactus = DB::table('contactus')->get()->toArray();
                        @endphp
                            @if($contactus)
                            @foreach($contactus as $key=>$data)
                            <tr>
                                <td >{{$key+1}}</td>
                                <td>{{$data->firstname}} {{$data->lastname}} </td>
                                <td>{{$data->email}} </td>
                                <td> {{$data->company_name}} </td>
                                <td> {{$data->about}} </td>
                                <td>{{$data->created_at}} </td>
                                       
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Container-->

@endsection