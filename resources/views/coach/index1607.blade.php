@extends('coach_master')
@section('title', 'coach dashboard')
@section('content')
<!--begin::Container-->
<div class="container pb-10">

    @if($users)
    @foreach($users as $key=>$data)
    <div class="row">
        <div class="col-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#anoopkumar_{{$data->id}}">
                                    <span class="nav-text">Customer Details</span>
                                </a>
                            </li>
                             @php
                                
                                 $userQA = DB::table('customer_questions')->where('customer_id',$data->id)->orderBy('created_at','Desc')->get()->toArray();
                                

                                @endphp
                                @if($userQA)
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#anoopquestion_{{$data->id}}">
                                    <span class="nav-text">Questions</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content pt-5">
                        <div class="tab-pane active" id="anoopkumar_{{$data->id}}" role="tabpanel">
                            <div class="container">
                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="public/assets/media/users/default.jpg">
                                            </div>
                                            <div class="timeline-content">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="mr-2">
                                                        <span class="font-weight-bolder font-size-lg mr-2">{{$data->name}}</span>
                                                        <span class="text-muted"><i class="fa fa-envelope text-primary mr-2"></i>{{$data->email}} </span>
                                                        <span class="text-muted"> <i class="fa fa-phone text-primary mr-2"></i>{{$data->phone}} </span>
                                                    </div>
                                                </div>
                                                
                                @IF( $userQA)
                                
                                                <table>
                                                    <tbody>
                                                        @foreach($userQA as $key=>$data1)
                                                        @if($data1->plan_type != "")
                                                        <tr>
                                                            <td class="text-muted min-w-75px py-1">Package</td>
                                                            
                                                            <td>{!! $data1->plan_type !!}</td>
                                                        </tr>
                                                        @endif
                                                        @endforeach

                                                        <!--<tr>-->
                                                        <!--    <td class="text-muted py-1">Que Remain </td>-->
                                                        <!--    <td></td>-->
                                                        <!--</tr>-->

                                                    </tbody>
                                                </table>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane" id="anoopquestion_{{$data->id}}" role="tabpanel">
                            <div class="container">
                                @php
                                
                                 $userQA = DB::table('customer_questions')->where('customer_id',$data->id)->orderBy('created_at','Desc')->get()->toArray();
                                

                                @endphp
                                @if($userQA )
                                @foreach($userQA as $uQA)
                                 @if($uQA->question_check !="") 
                                
                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="public/assets/media/users/default.jpg">
                                            </div>
                                             
                                            <div class="timeline-content mb-4">
                                                   
                                            <table class="mb-4">
                                            <tr>
                                                
                                                        
                                                               
                                                              
                                               
                                            <td>@if($uQA->fname != "")
                                             <p>Name : {{$uQA->fname}} {{$uQA->lname}}</p>
                                             <p>Partner Name : {{$uQA->partner_fname}} {{$uQA->partner_lname}}</p>
                                             @endif
                                                        
                                             <p>{{$uQA->question_check}}</p>
                                                              
                                            </td>
                                            <td>
                                                @if($uQA->status == 0)           
                                                   <a href="{{url('coach/response/'.$uQA->id)}}" class="btn btn-outline-danger" style="position:absolute; right:20px;">Response</a>
                                                @elseif($uQA->status == 1) 
                                                  <a href="{{url('coach/response/'.$uQA->id)}}" class="btn btn-outline-success" style="position:absolute; right:20px;">Response</a>
                                                  @endif 
                                              
                                            </td>
                                            </tr>
                                            </table>  
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @endforeach
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif


  


</div>

@endsection