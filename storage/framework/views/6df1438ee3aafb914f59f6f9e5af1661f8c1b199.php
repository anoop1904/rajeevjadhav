
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
                    <div class="py-4 pr-4 pr-md-4 pl-4 pl-lg-2 sign-right text-center">
                        <div class="steps-c">Step 1</div>

                        <div class="thanks-txt"><span>Thank You!!</span> Your payment is successfully done!</div>
                        <div class="downarrow"><i class="fa fa-long-arrow-down arrow-moving"></i></div>

                        <div class="steps-c">Step 2</div>

                        <h3>Please click below button to schedule your booking</h3>

                        <a href="#" class="btn btn-primary"><i class="fa fa-long-arrow-right arrow-moving2"></i> Book Call Schedule</a>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/payment_thankyou.blade.php ENDPATH**/ ?>