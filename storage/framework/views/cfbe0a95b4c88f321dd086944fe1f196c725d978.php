
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
                        <p>Jhone Wick</p>
                    </div>
                    </div>
                </div>

                <div class="user-boxes shadow-sm py-2">
                    <div class="user-links">
                        <ul class="list-unstyled">
                        <li><a href="my-profile.html"><i class="icon-user icons"></i> My Profile</a></li>
                        <li><a href="responses.html"><i class="icon-envelope icons"></i> Responses</a></li>
                        <li><a href="my-credits.html"><i class="fa fa-usd"></i> My Credits</a></li>
                        <li><a href="change-password.html"><i class="fa fa-lock"></i> Change Password</a></li>
                        <li><a class="logout-btn" href="#"><i class="icon-login icons"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 user-infor min-height-380">
                    <h4>Personal Information <a href="#">Edit</a></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value="Jhone" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value="Wick" disabled/>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-4">Email Address <a href="#">Edit</a></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="email" value="jhonewick864@gmail.com" disabled/>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-4">Mobile Number <a href="#">Edit</a></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" value="+919306569875" disabled/>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/my_profile.blade.php ENDPATH**/ ?>