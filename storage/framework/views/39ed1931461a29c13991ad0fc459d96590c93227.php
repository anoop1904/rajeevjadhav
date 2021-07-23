
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Services'); ?>
<?php $__env->startSection('link', 'services'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="profile-container py-5 bg-light wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-boxes shadow-sm py-2 px-3">
                   <div class="user-name position-relative">
                    <img src="<?php echo e(asset('public/front/images/user.png')); ?>" class="user-image"/>
                    <div class="user-txt">
                        <small>Hello,</small>
                        <p><?php echo e($customer->name); ?></p>
                    </div>
                    </div>
                </div>

                <div class="user-boxes shadow-sm py-2">
                    <div class="user-links">
                       <ul class="list-unstyled">
                        <li><a href="<?php echo e(url('/customer/pfofile')); ?>" class="<?php echo e(Request::segment(2) == 'pfofile' ? 'cus_active' : ''); ?>"><i class="icon-user icons <?php echo e(Request::segment(2) == 'pfofile' ? 'cus_active' : ''); ?>"></i> My Profile</a></li>
                        <li><a href="<?php echo e(url('/customer/response')); ?>" class="<?php echo e(Request::segment(2) == 'response' ? 'cus_active' : ''); ?>"><i class="icon-envelope icons <?php echo e(Request::segment(2) == 'response' ? 'cus_active' : ''); ?>"></i> Responses</a></li>
                        <li><a href="<?php echo e(url('/customer/creadit')); ?>" class="<?php echo e(Request::segment(2) == 'creadit' ? 'cus_active' : ''); ?>"><i class="fa fa-usd <?php echo e(Request::segment(2) == 'creadit' ? 'cus_active' : ''); ?>"></i> My Credits</a></li>
                        <li><a href="<?php echo e(url('/customer/change_password')); ?>" class="<?php echo e(Request::segment(2) == 'change_password' ? 'cus_active' : ''); ?>"><i class="fa fa-lock <?php echo e(Request::segment(2) == 'change_password' ? 'cus_active' : ''); ?>"></i> Change Password</a></li>
                        <li><a class="" href="<?php echo e(url('/customer/logout')); ?>" ><i class="icon-login icons"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 user-infor min-height-380">
                    <h4>Change Password</h4>
                    <form class="mt-4" action="<?php echo e(url('/customer/update_password')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="old_password" type="text" value="<?php echo e(old('old_password')); ?>" placeholder="Old Password"/>
                                <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                               <small class="text-danger"> <?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                   
                            <?php if(session()->has('error')): ?>
                            <small class="text-danger"> <?php echo e(session()->get('error')); ?></small>
                             <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="new_password" type="text" value="<?php echo e(old('new_password')); ?>" placeholder="New Password"/>
                                <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"> <?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="new_password_confirmation"  type="text" value="<?php echo e(old('new_password_confirmation')); ?>" placeholder="Confirm New Password"/>
                                <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"> <?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center cha-pass-btn">                
                        <input type="submit" class="btn btn-primary" value="Save Password">
                    </div>
                </form>



                </div>

            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/change_password.blade.php ENDPATH**/ ?>