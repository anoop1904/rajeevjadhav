<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>

<?php $__env->startSection('bc', 'Contact'); ?>

<?php $__env->startSection('link', ''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- <div class="container my-5">

    <div class="card">

        <div class="card-body">

            <h4>Page under Construction</h4>

        </div>

    </div>

</div> -->



<section class="contact-container my-5 wow fadeInDown">

     <div class="container">
        <div class="section-heading px-0 px-lg-5">
            <h2 class="text-center mb-5">Get In touch</h2>
            <form action="<?php echo e(url('/contactus')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="mx-5 contact-con shadow px-4 py-5">

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo e(asset('public/front/images/contact.jpg')); ?>" class="img-fluid" />
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="Enter First Name"
                                            name="firstname" />
                                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                							<span class="text-danger"> <?php echo e('Required'); ?></span>
                                							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Last Name"
                                            name="lastname" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="Enter Email" name="email" />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                							<span class="text-danger"> <?php echo e('Required'); ?></span>
                                							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input class="form-control" type="text" placeholder="Enter Company" name="companyname" />
                            </div>
                            <div class="form-group">
                                <label>I’m Interested in learning about</label>
                                <select class="form-control" name="about">
                                    <option>Manifestation Coaching</option>
                                    <option>Divine Healing</option>
                                    <option>Finding My Soulmate</option>
                                    <option>Healing My Sickness</option>
                                    <option>Booking a Speaker</option>
                                    <option>Helping my team</option>
                                    <option>Helping me</option>
                                </select>
                                <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                							<span class="text-danger"> <?php echo e('Required'); ?></span>
                                							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                           <?php if(Session::has('message')): ?>
                          <h5 class="text-success text-center"> <?php echo e(Session::get('message')); ?> </h5>
                           <?php endif; ?>
                            <div class="send-btn text-center"><button class="btn btn-primary">Submit</button></div>

                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/contact.blade.php ENDPATH**/ ?>