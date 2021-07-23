@extends('admin_master')
@section('title', 'Homepage')
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
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#anoopkumar_{{$data->id}}">
                                    <span class="nav-text">Customer Details</span>
                                </a>
                            </li>
                            @php

                            $userQA =
                            DB::table('customer_questions')->where('customer_id',$data->id)->where('customer_type','customer')->orderBy('created_at','Desc')->get()->toArray();


                            @endphp
                            @if($userQA)
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#anooppackage_{{$data->id}}">
                                    <span class="nav-text">Packages</span>
                                </a>
                            </li>
                            
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
                                                <img alt="Pic" src="{{ url('public/assets/media/users/default.jpg') }}">
                                            </div>
                                            <div class="timeline-content">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="mr-2">
                                                        <span
                                                            class="font-weight-bolder font-size-lg mr-2">{{$data->name}}</span>
                                                        <span class="text-muted"><i
                                                                class="fa fa-envelope text-primary mr-2"></i>{{$data->email}}
                                                        </span>
                                                        <span class="text-muted"> <i
                                                                class="fa fa-phone text-primary mr-2"></i>{{$data->phone}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="anooppackage_{{$data->id}}" role="tabpanel">
                            <div class="container">
                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="{{ url('public/assets/media/users/default.jpg') }}">
                                            </div>
                                            <div class="timeline-content">

                                                @php 
                                                $userPckg = DB::table('user_package')->where('user_id',$data->id)->where('user_type','guest')->orderBy('added_at','Desc')->get()->toArray();
                                                @endphp
                                                @IF( $userPckg )

                                                <table>
                                                    <tbody>
                                                       
                                                        @foreach($userPckg as $key=>$datap)
                                                        @if($datap->pack_id != 0)
                                                        @php $pckg =
                                                        DB::table('package')->where('id',$datap->pack_id)->orderBy('added_at','Desc')->get()->toArray();
                                                        
                                                        @endphp
                                                        @if($pckg)
                                                        @foreach($pckg as $key=>$p)
                                                       
                                                        <tr>

                                                            <td>{{$p->name}}</td><td class="text-muted" style="position:absolute; right:20px;">{{date("d-m-Y h:m:s", strtotime($p->added_at))}}</td>

                                                        </tr>
                                                        @endforeach
                                                        @endif
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

                                $userQA =
                                DB::table('customer_questions')->where('customer_id',$data->id)->where('customer_type','customer')->orderBy('created_at','Desc')->get()->toArray();


                                @endphp
                                @if($userQA )
                                @foreach($userQA as $uQA)
                                @if($uQA->question_check !="")

                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="{{ url('public/assets/media/users/default.jpg') }}">
                                            </div>

                                            <div class="timeline-content mb-4">

                                                <table class="mb-4">
                                                    <tr>
                                                          <td>
                                                            @if($uQA->fname != "")
                                                            <!-- <p>Name : {{$uQA->fname}} {{$uQA->lname}}</p>
                                                             <p>Partner Name : {{$uQA->partner_fname}} {{$uQA->partner_lname}}</p> -->
                                                            @endif

                                                          <p> {{$uQA->question_check}} {{date("d-m-Y h:m:s", strtotime($uQA->created_at))}}</p>

                                                        </td>
                                                        <td>
                                                            @if($uQA->status == 0)
                                                            <a href="{{url('admin/response/'.$uQA->id)}}"
                                                                class="btn btn-outline-danger btn-sm"
                                                                style="position:absolute; right:20px;">Response</a>
                                                            @elseif($uQA->status == 1)
                                                            <a href="{{url('admin/response/'.$uQA->id)}}"
                                                                class="btn btn-outline-success"
                                                                style="position:absolute; right:20px;">Response</a>
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