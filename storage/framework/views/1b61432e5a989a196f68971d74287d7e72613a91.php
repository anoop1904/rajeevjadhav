
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Payment Thankyou'); ?>
<?php $__env->startSection('link', 'payment-thankyou'); ?>
<?php $__env->startSection('content'); ?>


<section class="schedule-call-container py-5">
    <div class="container">
        <div class="schedulecall-con thanks-payment shadow">

            <div class="row">
                <div class="col-12 col-lg-4 bg-primary position-relative mobile-none">
                    <div class="form-left-panel">
                        <h2><span>DISCUSS YOUR</span>ASSESSMENT WITH US</h2>
                        <div class="left-img"><img src="<?php echo e(asset('public/front/images/4398.png')); ?>"/></div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="py-4 pr-4 pr-md-4 pl-4 pl-lg-2 sign-right text-center" style="display: flex; flex-direction: column; justify-content: center;">
                        

                        
                        

                        
                        
                         <div class="thanks-txt"><span>Thank You!!</span></div>
                        <div class="thanks-txt mb-3">Your payment is successfully done!</div>
                     
                        <h3>Please click below button to schedule your booking</h3>
                        <div class="btn_div">
                            <form action="<?php echo e(url('/customer/book_call_schedule')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            
                            <button type="submit" class="btn btn-primary"><i class="fa fa-long-arrow-right arrow-moving2"></i> Book Call Schedule</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/call_package.blade.php ENDPATH**/ ?>