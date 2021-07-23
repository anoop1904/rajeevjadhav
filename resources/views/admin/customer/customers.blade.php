@extends('admin_master')
@section('title', 'Homepage')
@section('content')

<div class="container">
    <!--begin::Inbox-->
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <!--end::Aside-->
        <!--begin::List-->
        <div class="flex-row-fluid ml-lg-8 d-block" id="kt_inbox_list">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <!--begin::Header-->
                <div class="card-header row row-marginless align-items-center flex-wrap py-5 h-auto">
        
                    <!--begin::Search-->
                    <div class="col-xxl-3 d-flex order-1 order-xxl-2 align-items-center justify-content-center">
                        <div class="input-group input-group-lg input-group-solid my-2">
                            <input type="text" class="form-control pl-4" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text pr-3">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end::Search-->
        
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body table-responsive px-0">
                    <!--begin::Items-->
                    <div class="list list-hover min-w-500px" data-inbox="list">
                        <!--begin::Item-->

                        <!--end::Item-->
                        <!--begin::Item-->
                        @if($users)
                        @foreach($users as $key=>$data)

                        <div class="d-flex align-items-start list-item card-spacer-x py-3" data-inbox="message">
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                    <!-- <label class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                        <h4></h4>
                                    </label>-->
                                    <a href="#" onclick="return confirm('Are you sure?')" class="btn btn-icon btn-xs text-hover-warning active" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete customer">
                                        <i class="fas fa-trash"></i>
                                    </a> 
                                    <!--<a href="#" class="btn btn-icon btn-xs text-hover-warning" data-toggle="tooltip" data-placement="right" title="" data-original-title="Mark as read">-->
                                    <!--    <i class="flaticon-add-label-button text-muted"></i>-->
                                    <!--</a> -->
                                </div>
                                <!--end::Actions-->
                                <!--begin::Author-->


                                <div class="d-flex align-items-center flex-wrap w-xxl-200px mr-3" data-toggle="view">
                                    <div class="symbol symbol-light-danger symbol-35 mr-3">
                                        <span class="symbol-label font-weight-bolder">{{$key+1}}</span>
                                    </div>
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary"></a>
                                </div>
                                <!--end::Author-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Info-->


                            <div class="flex-grow-1 mt-2 mr-2" data-toggle="view">
                                <div>
                                    <span class="font-weight-bolder font-size-lg mr-2">{{$data->first_name}} {{$data->last_name}}</span>
                                    <span class="text-muted"><i class="fa fa-envelope text-primary mr-2"></i> {{$data->emailId}}  </span>
                                    <span class="text-muted"><i class="fa fa-phone text-primary mr-2"></i>{{$data->contact}} </span>

                                </div>
                                <div class="mt-2">
                                    <div class="d-flex flex-column">
                                        <div class="toggle-off-item">
                                            <span class="font-weight-bold text-muted cursor-pointer" data-toggle="dropdown"><span class="label label-light-danger font-weight-bold label-inline">package</span>
                                                <!-- <i class="flaticon2-down icon-xs ml-1 text-dark-50"></i>-->
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left p-5">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted min-w-75px py-2">Package</td>
                                                            <td>{{$data->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted py-2">Date:</td>
                                                            <td>{{$data->added_at}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted py-2">Que Remain </td>
                                                            <td> {{$data->remaining_ques}}</td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <td class="text-muted py-2">Status</td>
                                                            <td>{{$data->status}}</td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                           
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_{{$data->user_id}}">
                                                <i class="flaticon2-chat-1"></i>
                                            </a>
                                           

                                        </div>


                                    </div>



                                </div>
                            </div>
                            <!--end::Info-->
                            <!--begin::Datetime-->
                            <div class="mt-2 mr-3 font-weight-bolder w-100px text-right" data-toggle="view">{{$data->added_at}}</div>
                            <!--end::Datetime-->
                        </div>
                        <!--end::Item-->                        

                        <div class="modal modal-sticky  show" id="kt_{{$data->user_id}}" role="dialog" data-backdrop="false" aria-modal="true" style="padding-right: 17px; display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <!--begin::Card-->
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center px-4 py-3">
                                            <div class="text-left flex-grow-1">
                                                <!--begin::Dropdown Menu-->
                                                <div class="dropdown dropdown-inline">
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg> -->
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </button>

                                                </div>
                                                <!--end::Dropdown Menu-->
                                            </div>
                                            <div class="text-center flex-grow-1">

                                                <div class="text-dark-75 font-weight-bold font-size-h5">{{$data->first_name}} {{$data->last_name}}</div>
                                                <!-- <div>
                                                    <span class="label label-dot label-success"></span>
                                                    <span class="font-weight-bold text-muted font-size-sm">Active</span>
                                                </div> -->
                                            </div>
                                            <div class="text-right flex-grow-1">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                                    <i class="ki ki-close icon-1x"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Scroll-->
                                            <div class="scroll scroll-pull ps ps--active-y" data-height="375" data-mobile-height="300" style="height: 375px; overflow: hidden;">
                                                <!--begin::Messages-->
                                                @if($userQA )
                                                @foreach($userQA as $uQA)
                                                @if($uQA->user_id==$data->user_id)


                                                <div class="messages">
                                                    <!--begin::Message In-->
                                                    
                                                    <div class="d-flex flex-column mb-5 align-items-start">
                                                        <div class="d-flex align-items-center">
                                                            <!-- <div class="symbol symbol-circle symbol-40 mr-3">
                                                                <img alt="Pic" src="assets/media/users/300_12.jpg">
                                                            </div> -->
                                                            <div>
                                                           
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">{{$data->first_name}} {{$data->last_name}}</a>
                                                                <span class="text-muted font-size-sm">{{$uQA->added_at}}</span>
                                                            </div>
                                                        </div>

                                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">{{$uQA->ques}}</div>
                                                    </div>
                                                    <!--end::Message In-->
                                                    <!--begin::Message Out-->

                                                    <div class="d-flex flex-column mb-5 align-items-end">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span class="text-muted font-size-sm">{{$uQA->ans_at}}</span>
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Coach</a>
                                                            </div>
                                                            <!-- <div class="symbol symbol-circle symbol-40 ml-3">
                                                                <img alt="Pic" src="assets/media/users/300_21.jpg">
                                                            </div> -->
                                                        </div>
                                                        @if($uQA->answer!='')
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">{!! $uQA->answer !!}</div>
                                                        @else
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">No Response</div>
                                                        @endif

                                                    </div>

                                                    <!--end::Message Out-->
                                                </div>
                                                @endif

                                                @endforeach
                                                @endif


                                               


                                               

                                                <!--end::Messages-->
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: -2px; height: 375px;">
                                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 133px;"></div>
                                                </div>
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="card-footer align-items-center">
                                            <!--begin::Compose-->
                                            <!-- <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>-->
                                            <!--<div class="d-flex align-items-center justify-content-between mt-5">-->
                                            <!--    <div class="mr-3">-->
                                            <!--        <a href="#" class="btn btn-clean btn-icon btn-md mr-1">-->
                                            <!--            <i class="flaticon2-photograph icon-lg"></i>-->
                                            <!--        </a>-->
                                                    <!--<a href="#" class="btn btn-clean btn-icon btn-md">-->
                                                    <!--    <i class="flaticon2-photo-camera icon-lg"></i>-->
                                                    <!--</a>-->
                                            <!--    </div>-->
                                            <!--    <div>-->
                                            <!--        <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>-->
                                            <!--    </div>-->
                                            <!--</div> -->
                                            <!--begin::Compose-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                        </div>
                        

                        @endforeach
                        @endif



                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::List-->
        <!--begin::View-->

        <!--end::View-->
    </div>
    <!--end::Inbox-->

    <!--begin::Compose-->

    <!--end::Compose-->

</div>
@endsection