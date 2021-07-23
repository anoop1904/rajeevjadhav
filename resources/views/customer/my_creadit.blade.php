@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'Services')
@section('link', 'services')
@section('content')
@include('customer.include.breadcrumb')

<section class="profile-container py-5 bg-light wow fadeInUp">
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
                        <li><a href="{{url('/customer/creadit')}}" class="{{Request::segment(2) == 'creadit' ? 'cus_active' : ''}}"><i class="fa fa-usd {{Request::segment(2) == 'creadit' ? 'cus_active' : ''}}"></i> My Credits</a></li>
                        <li><a href="{{url('/customer/change_password')}}" class="{{Request::segment(2) == 'change_password' ? 'cus_active' : ''}}"><i class="fa fa-lock {{Request::segment(2) == 'change_password' ? 'cus_active' : ''}}"></i> Change Password</a></li>
                        <li><a class="" href="{{url('/customer/logout')}}" ><i class="icon-login icons"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 user-infor min-height-380">
                    <h3>My Credits</h3>
                    
                    <div class="mycreadits">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="creadit-bal">
                                @php
                                    $creadit_amount = 0;
                                    $used_amount = 0;
                                @endphp
                                @foreach ($customer_creadit as $key=>$customer_creadit)
                                   @php
                                      $creadit_amount += $customer_creadit->creadit_amount; 
                                      $used_amount += $customer_creadit->used_amount; 
                                   @endphp 
                                @endforeach
                                    Available Amount : <span>${{$creadit_amount - $used_amount}}</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add Credits
                                  </button>
                                {{-- <a href="#" class="btn btn-primary">Add Credits</a> --}}
                            </div>
                        </div>
                        <div class="notes"><strong>Notes:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
 
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form action="{{url('/add_amount')}}" method="post" id="customerCreadit">
              @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Credits</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Enter Amount <span class="text-danger">*</span></label>
               <input type="text" name="customer_creadit" id="customer_creadit" class="form-control" value="" required="required">
               <small id="customer_creadit_error" class="text-danger"></small> 
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="save_creadit" onclick="customerCreaditSave()" class="btn btn-primary">Add Amount</button>
         </div>
            </form>
      </div>
    </div>
  </div>

@endsection

<script>
    
function customerCreaditSave() {
    customer_creadit = document.getElementById('customer_creadit');
    amount = $('#customer_creadit').val();

    if(amount == '')
    {
        document.getElementById('customer_creadit_error').innerText = 'This field is required';
        return false;
    }
    if(amount)
    {
      var numbers = /^[0-9]+$/;
      if(customer_creadit.value.match(numbers))
      { 
      if(amount.length > 6)
            {
            document.getElementById('customer_creadit_error').innerText = 'Maximum 6 character only';
            return false;
            }
            else{
                document.getElementById('customer_creadit_error').innerText = '';
                $('#customerCreadit').submit(); 
            }     
      }
      else
      {
        document.getElementById('customer_creadit_error').innerText = 'Please input numeric characters only';
        $('#customer_creadit').focus();
        return false;
      }  
    }
}
</script>

