
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Services'); ?>
<?php $__env->startSection('link', 'services'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(session('user_package')): ?>

<div class="row">
    <div class="col-6 offset-3">   

<?php
// echo '<pre>';
//     print_r(session('user_package.total_question'));
//     echo '</pre>';
//     die;
    if(session('user_package'))
    {
        $user_id = session('user_package.user_id');
        $pack_id = session('user_package.pack_id');
        $user_type = session('user_package.user_type');
        $amount = session('user_package.total_amount');
        $count_q_amount = session('user_package.count_q_amount');
        $is_package = session('is_package');
    }
 
    $selected_pack = DB::table('package')->where('id', $pack_id)->first();
    if(isset($selected_pack->name)){
        $package_name = $selected_pack->name;
    }
    else{
        $package_name = "Question(s) x " .session('user_package.total_question');
    }

    $customer_creadit = DB::table('customer_creadit')->where('customer_id', $user_id)->get();
    $customer_creadit_amount = 0; 
    $customer_used_amount = 0;
    $discount_coupon = 0;  
    $total_amount = 0; 
    $minus_paypal = 0;
?>
            <?php $__currentLoopData = $customer_creadit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer_creadit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php     
            $customer_creadit_amount += $customer_creadit->creadit_amount;
            $customer_used_amount += $customer_creadit->used_amount;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
        <?php
                // if($customer_creadit_amount > $customer_used_amount){
                // $total_amount = $customer_creadit_amount - $customer_used_amount;
                // }
                // if($customer_creadit_amount <= $customer_used_amount){
                //     $total_amount = 0;
                // }  
               $total_amount = $customer_creadit_amount - $customer_used_amount;        
        ?>
<section class="payment-container py-5">
    <div class="container">
        <div class="shadow p-3 py-3 p-md-4 py-md-4">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="sign-right1">
           
                    <h3 class="mt-4 mb-3">Order Summary</h3>

                    <div class="border-box ordertable">
                        <form action="<?php echo e(url('/payment_with_paypal')); ?>" method="POST" id="formSubmitWithPaypal">
                            <?php echo csrf_field(); ?>
                        <table class="table">
                            <tr>
                                
                                
                                <input type="hidden" name="total_payment" id="customer_creadit_amount" value="<?php echo e($total_amount); ?>">
                                <input type="hidden" name="cus_id" id="cus_id" value="<?php echo e($user_id); ?>">
                                <input type="hidden" name="count_q_amount" id="count_q_amount" value="<?php echo e($count_q_amount); ?>">
                                <input type="hidden" name="is_package" id="is_package" value="<?php echo e($is_package); ?>">
                            </tr>
                            <tr>
                                <?php if(auth()->guard("customer")->check()): ?>
                                <td><?php echo e($package_name); ?></td>
                                <td>$<span id="package_value"><?php echo e($amount); ?></span></td> 
                                <?php else: ?> 
                                <td><?php echo e($package_name); ?></td>
                                <td>$<span id="package_value"><?php echo e($amount); ?></span></td>    
                                <?php endif; ?>                 
                            </tr>
                            <tr id="coupon_row" style="display: none;">
                                <td>Discount Coupon:</td>
                                <td>$<span id="discount_value"><?php echo e($discount_coupon); ?></span></td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <?php
                                    $grand_total_amt = $amount - $discount_coupon;
                                ?>
                                <th><span>$</span><span id="discount_value_total"><?php echo e($grand_total_amt); ?></span></th>                                                   
                                <input type="hidden" name="total_payment" id="total_payment" value="<?php echo e($grand_total_amt); ?>">
                            </tr>
                        <?php if(auth()->guard("customer")->check()): ?>       
                          <?php if($total_amount > $amount): ?>
                                <tr>
                                    <td colspan="2" style="text-center"><a href="" style="color:#000000;">Your wallet balance is $<?php echo e($total_amount); ?> </a></td>  
                                 </tr>
                            <?php else: ?>                               
                                <tr>
                                    <td colspan="2" style="text-center"><a href="" data-toggle="modal" data-target="#exampleModal" style="color:#000000;">Your wallet balance is $<?php echo e($total_amount); ?>, <span style="color:#dc3545;">Recharge now</span> </a></td>  
                                     <input type="hidden" name="less_amount" id="less_amount" value="<?php echo e($total_amount); ?>">
                                </tr>                         
                            <?php endif; ?>  
                        <?php endif; ?>                     
                            <?php if($total_amount >= $grand_total_amt): ?>
                             <?php
                                $amount_total = 'plus_amount'; 
                             ?> 
                            <?php else: ?>
                            <?php
                                $minus_paypal = $grand_total_amt - $total_amount;
                                $amount_total = 'minus_amount'; 
                             ?> 
                          <?php endif; ?>
                          <input type="hidden" name="minus_paypal" id="minus_paypal" value="<?php echo e($minus_paypal); ?>">
                          <input type="hidden" name="amount_total" id="amount_total" value="<?php echo e($amount_total); ?>">
                        </table>
                    </form>
                    </div>

                    <div class="border-box mt-3">
                        <form class="d-flex">
                            <div class="form-group mr-2 flex-fill mb-0">
                              <label for="couponcode" class="sr-only">Enter Coupon Code</label>
                              <input type="text" class="form-control" name="couponcode" id="couponcode" placeholder="Enter Coupon Code">
                            </div>
                            <button type="button" onclick="applay_coupen()" id="couponcode_btn" class="btn btn-primary">Apply</button>
                        </form>
                    </div>

                    <div class="text-center mt-3">
                        <span class="text-danger" id="wallet_error"></span>  
                        <?php if(auth()->guard("customer")->check()): ?>             
                        <ul class="list-inline">
                            <li class="list-inline-item pay_with_paypal"><input type="radio" name="payment_radio" id="pay_with_paypal" value="pay_with_paypal"> Pay Online </li>
                            <li class="list-inline-item pay_with_vallet"><input type="radio" name="payment_radio" id="pay_with_vallet" value="pay_with_vallet"> Pay from Wallet </li>
                        </ul>
                        
                        <button type="submit" onclick="creaditPayment()" class="btn btn-primary btn-block" id="proceed_payment">Proceed to Payment</button>
                        <button type="submit" onclick="creaditPaywithPaypal()" class="btn btn-primary btn-block" id="proceed_paypay" style="display:none;">Proceed to Pay</button>
                        <button type="submit" onclick="creaditPaywithWallet()" class="btn btn-primary btn-block" id="proceed_wallet" style="display:none;">Proceed to Wallet</button>
                        <?php else: ?> 
                        <button type="submit" onclick="creaditPaywithPaypal()" class="btn btn-primary btn-block" id="proceed_paypay">Proceed to Pay</button>
                        <?php endif; ?>
                       
                      </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form action="<?php echo e(url('/add_amount_balance')); ?>" method="post" id="customerCreadit">
              <?php echo csrf_field(); ?>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Credits</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Enter Amount <span class="text-danger">*</span></label>
                <small id="customer_creadit_error" class="text-danger"></small> 
               <input type="text" name="customer_creadit" id="customer_creadit" class="form-control" value="" required="required">
             <small style="margin-top:10px;">Note: clicking on "Add Money" button will be redirected to payment gateway</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="save_creadit" onclick="customerCreaditUpadate()" class="btn btn-primary">Add Amount</button>
         </div>
            </form>
      </div>
    </div>
  </div>
  


<!-- credit Modal -->
<div class="modal fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="credit-modal" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

              <p>You Have 00 Credits</p>
                <button type="button" id="save_creadit_with_model" onclick="cumstomerPayBoth()" class="btn btn-primary">Add Amount 11</button>
 
        </div>
      </div>
    </div>
  </div>
<!-- credit Modal -->


<?php else: ?>
  <script>window.location.href = "<?php echo e(url('/customer/creadit')); ?>";</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<script>
    
    function customerCreaditUpadate() {
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

// ==================================== pay with paypay =========================== 
// name="payment_radio" id="pay_with_paypal" 
function creaditPayment()
{
    alert('please select atleast one payment mode.');
}

function creaditPaywithWallet()
{   
// customer_creadit_amount = $('#customer_creadit_amount').val();

// total_payment = $('#total_payment').val();
amount_total = $('#amount_total').val();
// alert(amount_total);
if(amount_total ==  'minus_amount'){
    document.getElementById('wallet_error').innerText = 'Insufficiant balance, Please add balance';
    $('#credit-modal').modal("show");
    return false;
}
else{  
    total_payment = $('#total_payment').val();   
    cus_id = $('#cus_id').val();   
    count_q_amount = $('#count_q_amount').val(); 
    is_package = $('#is_package').val(); 
    $.ajax({
            type: 'POST',
            url: "<?php echo e(url('/payment_with_wallet')); ?>",
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "total_payment": total_payment,
                "cus_id": cus_id,
                "count_q_amount": count_q_amount, 
            },
            success: function(data) {    	   
                alert(is_package);
                        if(is_package){
                            window.location.href = "<?php echo e(url('/call_package')); ?>";
                        } 
                        else{
                            window.location.href = "<?php echo e(url('/payment-thankyou')); ?>";
                        }
                   
                }
	    }) 
}

}


function creaditPaywithPaypal()
{
   $('#formSubmitWithPaypal').submit();
}




// onclick="applay_coupen()" id="couponcode_btn"

function applay_coupen() {  
    var couponcode = document.getElementById('couponcode');
    var c_value = couponcode.value;
    var package_value = document.getElementById("package_value").innerHTML;    
    // alert(package_value);
    $.ajax({
            type: 'POST',
            url: "<?php echo e(url('/apply_coupon')); ?>",
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "c_value": c_value,
            },
            success: function(data) {        
                // alert(data);
                $('#coupon_row').show();
                document.getElementById("discount_value").innerHTML = data;
                document.getElementById("discount_value_total").innerHTML = package_value-data;  
                document.getElementById("total_payment").value = package_value-data;  
                },
            error: function(data){
                $('#coupon_row').hide();
                alert("Coupon code not apply");
            }
	    }) 

     }
     
     


function cumstomerPayBoth()
{
    var total_payment = $('#total_payment').val(); 
    var less_amount = $('#less_amount').val(); 
     var cus_id = $('#cus_id').val();   
      var count_q_amount = $('#count_q_amount').val(); 
    var bothPaymentMode = 'bothPaymentMode';
                is_package = $('#is_package').val(); 
        $.ajax({
                type: 'POST',
                url: "<?php echo e(url('/payment_with_both')); ?>",
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "total_payment": total_payment,
                    "less_amount": less_amount,
                    "cus_id": cus_id,
                    "count_q_amount": count_q_amount, 
                    "bothPaymentMode": bothPaymentMode,
                },
                success: function(data) {    	   
                        $('#formSubmitWithPaypal').submit();
                    }
    	    })
}
     
     
     
  
     
     

    </script>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/check_creadit.blade.php ENDPATH**/ ?>