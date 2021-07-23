@extends('admin_master')
@section('title', 'coach dashboard')
@section('content')


<!--begin::Container-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Questions Response</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <!--<a type="button" class="btn btn-outline-info" href="{{url('admin/package')}}">Back</a>-->
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form action="{{url('admin/response/'.$userQA->id)}}" method="POST">
                    @csrf
                    <div class="card-body">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif

                        

                        @if($userQA )
                        @if($userQA->fname != "")
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg"
                                value="{{$userQA->id}}">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">

                                    <h4>{{$userQA->fname}} {{$userQA->lname}}</h4>



                                </div>

                            </div>
                        </div>
                        @endif
                        @if($userQA->partner_fname != "")
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg"
                                value="{{$userQA->id}}">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Partner Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">
                                    <h4> {{$userQA->partner_fname}} {{$userQA->partner_lname}}</h4>

                                </div>

                            </div>
                        </div>
                        @endif
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg"
                                value="{{$userQA->id}}">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Question:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">

                                    @if($userQA->question_check != "")
                                    <h3>{{$userQA->question_check}} </h3>
                                    @endif



                                </div>

                            </div>
                        </div>
                        @php
                        $response = DB::table('responses')->where(['ques_id'=>$userQA->id])->first();
                        

                        @endphp
                        @if($userQA->status ==0)
                        <div class="form-group row">
                            
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->

                                <textarea name="kt_ckeditor_2" id="kt-ckeditor-2">NO RESPONSE</textarea>

                            </div>
                        </div>
                       
                        @elseif($userQA->status ==1 && $response->coach_id != "")
                        @php
                        $coaches = DB::table('coaches')->where(['id'=>$response->coach_id])->first();
                        @endphp

                        <div class="form-group row">
                          
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Coach Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">
                                    <h4> {{$coaches->name}} </h4>

                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->

                                <p name="answer" id="answer">{!! $response->answer !!}</p>

                            </div>
                        </div>
                        @else
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->

                                <textarea name="answer" id="answer">RESPONDED</textarea>

                            </div>
                        </div>
                        @endif


                        @endif

                    </div>
                </form>

                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>




@endsection