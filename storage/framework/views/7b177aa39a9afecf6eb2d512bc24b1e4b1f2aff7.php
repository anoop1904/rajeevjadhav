
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Services'); ?>
<?php $__env->startSection('link', 'services'); ?>
<?php $__env->startSection('content'); ?>
<section class="signup-container pt-3 pb-5 py-md-5">
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
                    <div class="py-4 pr-4 pr-md-4 pl-4 pl-lg-2 sign-right">
                    <h3>Sign up for new registration</h3>
                    <form accept="<?php echo e(url('/customer/regiser')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <!--<div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="d-md-flex">
                                        <div class="mr-2">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="con-type" id="call-based" checked>
                                                <label class="custom-control-label" for="call-based">
                                                    New Registration
                                                </label>
                                              </div>
                                        </div>
                                        <div class="ml-0 ml-md-2">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="con-type" id="msg-call">
                                                <label class="custom-control-label" for="msg-call">
                                                    Continue as a Guest
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name"/>
                                    <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <small class='text-danger'> <?php echo e($message); ?> </small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email"/>
                                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <small class='text-danger'> <?php echo e($message); ?> </small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Contact No.</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="Enter mobile no."/>
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <small class='text-danger'> <?php echo e($message); ?> </small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password"/>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <small class='text-danger'> <?php echo e($message); ?> </small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password"/>
                                          <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <small class='text-danger'> <?php echo e($message); ?> </small> 
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="signin-link">Have an Account ? click here for <a href="<?php echo e(url('/customer/login')); ?>"> LOGIN</a></div>
        
                    <div class="submit-btn text-center">
                        <input type="submit" class="btn btn-primary" value="Submit">                      
                    </div>
        
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/register.blade.php ENDPATH**/ ?>