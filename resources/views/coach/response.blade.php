@extends('coach_master')
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
                        <a type="button" class="btn btn-primary" href="{{url('/coach')}}" style="height:30px; position:absolute: right:20px; top:30px; line-height:12px;">Back</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal fade" id="kt_summernote_modal" tabindex="-1" role="dialog" aria-labelledby="   exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Summernote Examples</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <form class="form form-label">
                                <div class="modal-body">
                                    <div class="form-group row mt-2">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Default Demo</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <div class="summernote"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                   <button type="button" class="btn btn-secondary">Submit</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!--begin::Form-->
               <form action="{{url('coach/response/'.$userQA->id)}}" method="POST">
                @csrf
                    <div class="card-body">
                    @if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif

                        @if($userQA  )
                          @if($userQA->fname != "")
                         <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg" value="{{$userQA->id}}">
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
                           
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Partner Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">
                                   
                                            
                                             <h4> {{$userQA->partner_fname}} {{$userQA->partner_lname}}</h4>
                                             
                                    
                                </div>

                            </div>
                        </div>
                        @endif
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg" value="{{$userQA->id}}">
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
                                $response = DB::table('responses')->where('ques_id',$userQA->id)->first();
                                $cid=Auth::guard('coach')->user()->id;

                         @endphp
                         @if($userQA->status ==0)
                        <div class="form-group row">
                             <input type="hidden" id="coachid" name="coachid" class="form-control form-control-lg" value="{{$cid}}">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->
                               
                                <textarea name="kt_ckeditor_2" id="kt-ckeditor-2"></textarea>
                             
                            </div>
                        </div>
                         <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <!--<button type="submit" class="btn btn-secondary">Cancel</button> --->
                                </div>
                            </div>
                        </div>
                        @elseif($userQA->status ==1 && $response->coach_id ==$cid)
                        
                        
                        <div class="form-group row">
                       
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->
                               
                                <p name="answer" id="answer" >{!! $response->answer !!}</p>
                             
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