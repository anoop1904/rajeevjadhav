
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
                    <img src="images/user.png" class="user-image"/>
                    <div class="user-txt">
                        <small>Hello,</small>
                        <p>Jhone Wick Patel</p>
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
                    <h4>Change Password</h4>
                    <form class="mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Old Password"/>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="New Password"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Confirm New Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="text-center cha-pass-btn"><button class="btn btn-primary">Save Password</button></div>
                </form>



                </div>

            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/change_password.blade.php ENDPATH**/ ?>