
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
                    <h3>My Credits</h3>
                    
                    <div class="mycreadits">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="creadit-bal">
                                    Available Credits : <span>$100.00</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary">Add Credits</a>
                            </div>
                        </div>
                        <div class="notes"><strong>Notes:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/my_creadit.blade.php ENDPATH**/ ?>