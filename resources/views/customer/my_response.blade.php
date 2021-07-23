@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'Services')
@section('link', 'services')
@section('content')
@include('customer.include.breadcrumb')

<section class="faq-container profile-container py-5 bg-light wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-boxes shadow-sm py-2 px-3">
                   <div class="user-name position-relative">
                    <img src="{{asset('public/front/images/user.png')}}" class="user-image"/>
                    <div class="user-txt">
                        <small>Hello,</small>
                        <p>{{$customer->name}}</p>
                    </div>
                    </div>
                </div>

                <div class="user-boxes shadow-sm py-2">
                    <div class="user-links">
                       <ul class="list-unstyled">
                        <li><a href="{{url('/customer/pfofile')}}" class="{{Request::segment(2) == 'pfofile' ? 'cus_active' : ''}}"><i class="icon-user icons {{Request::segment(2) == 'pfofile' ? 'cus_active' : ''}}"></i> My Profile</a></li>
                        <li><a href="{{url('/customer/response')}}" class="{{Request::segment(2) == 'response' ? 'cus_active' : ''}}"><i class="icon-envelope icons {{Request::segment(2) == 'response' ? 'cus_active' : ''}}"></i> Responses</a></li>
                        <li><a href="{{url('/customer/creadit')}}" class="{{Request::segment(2) == 'creadit' ? 'cus_active' : ''}}"><i class="fa fa-usd {{Request::segment(2) == 'pfofile' ? 'creadit' : ''}}"></i> My Credits</a></li>
                        <li><a href="{{url('/customer/change_password')}}" class="{{Request::segment(2) == 'change_password' ? 'cus_active' : ''}}"><i class="fa fa-lock {{Request::segment(2) == 'change_password' ? 'cus_active' : ''}}"></i> Change Password</a></li>
                        <li><a class="" href="{{url('/customer/logout')}}" ><i class="icon-login icons"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 min-height-380">
                    <h3>Reasponses</h3>
                    <div class="msg-info">
                        <ul class="list-inline">
                            <li class="list-inline-item"><input type="radio" name="read_unread" id="unread" checked> Unread Responses</li>
                            <li class="list-inline-item"><input type="radio" name="read_unread" id="read"> Read Responses</li>
                        </ul>
                    </div>
                <div class="faqs-con responces-qa">
                    <div class="accordion" id="accordionExample">
                        
                        @foreach ($response as $key=>$response)
                        @if($response->status == 0)
                        <div class="card">
                            <div class="card-header {{$response->status == 1 ? 'read-responce' : ''}}" id="reheading" onclick="responcestatus({{$response->ques_id}})" >
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responceone{{$key+1}}" aria-expanded="true" aria-controls="responceone">
                                    @php $question_data = DB::table('customer_questions')->where('id', $response->ques_id)->first(); @endphp
                                    @if (isset($question_data->question_check))
                                    {{ $question_data->question_check }}
                                    @else 
                                    {{ "No response" }}
                                    @endif                                     
                                </button>
                                <span class="responce-date">30 JUN</span>
                            </div>
                            <div id="responceone{{$key+1}}" class="collapse" aria-labelledby="reheading" data-parent="#accordionExample">
                              <div class="card-body">
                                {{ $response->answer }}
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
 
        
                    </div>
                
                
                </div>
            </div>
            </div>
        </div>
        
    </div>
</section>


@endsection


