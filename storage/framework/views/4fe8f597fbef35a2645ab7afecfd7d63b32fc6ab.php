
<?php $__env->startSection('title', 'Rajeev Jadhav | Login'); ?>
<?php $__env->startSection('bc', 'Schedule call'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="signup-container py-5">
    <div class="container">
        <div class="signup-box shadow">
            <div class="row">
                    <div class="col-12 col-lg-4 bg-primary position-relative mobile-none">
                        <div class="form-left-panel">
                            <h2><span>DISCUSS YOUR</span>ASSESSMENT WITH US</h2>
                            <div class="left-img"><img src="<?php echo e(asset('public/front/images/4398.png')); ?>"/></div>
                        </div>
                    </div>
                <div class="col-12 col-lg-8">
                    <div class="py-4 pr-4 pl-4 pl-lg-2 sign-right">
                    <h3>Sign in</h3>
                    <form action="<?php echo e(url('/customer/login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email"/>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                       <small class='text-danger'><?php echo e($message); ?></small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                       <small class='text-danger'><?php echo e($message); ?></small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <!--<div class="forgot-password mt-2 mb-3 text-center"><a href="#">Forgot Password</a></div>-->
        
                    <div class="submit-btn text-center">
                        <input type="submit" class="btn btn-primary" value="Submit">                     
                    </div>
                    <div class="signin-link">Don't have an Account ? click here for <a href="<?php echo e(url('/customer/register')); ?>"> SIGNUP</a></div>
        
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/login.blade.php ENDPATH**/ ?>