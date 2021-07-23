
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="content d-flex flex-column flex-column-fluid">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Card-->
                        <div class="card mb-20">
                            <!--begin::Card body-->                        
                            <div class="card-body">
                                    <div class="row">                               
                                        <div class="col-12">
                                            <h6 class="text-dark font-weight-bold mb-10">Coach Registration</h6>
                                        </div>
                                    </div>

                                   <?php
                                    $path = 'storage/app/coach/profile/'.$profile->photo;            
                                   ?>


                                <form method="post" action="<?php echo e(url('coach/update_coach/'.$profile->id)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                   <!--begin::Group-->
                                   <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                                        <div class="col-6">
                                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                             
                                                                <div class="image-input-wrapper" style="background-image: url(<?php echo e(asset($path)); ?>)"></div>

                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="profile_avatar" value="" />
                                                                    <input type="hidden" name="profile_avatar_remove" value="" />
                                                                </label>

                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <?php $__errorArgs = ['profile_avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-3 text-lg-right text-left">Coach Name</label>
                                                    <div class="col-6">
                                                        <input class="form-control form-control-lg form-control-solid" type="text" name="firstname" value="<?php echo e($profile->name); ?>">
                                                        <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>                           
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Contact Phone</label>
                                                        <div class="col-6">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="phone" value="<?php echo e($profile->phone); ?>" >
                                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Email</label>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="email" value="<?php echo e($profile->email); ?>" >
                                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Qualification</label>
                                                        <div class="col-6">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="qualification" value="<?php echo e($profile->qualification); ?>">
                                                            <?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-3 text-lg-right text-left">Years of Experience</label>
                                                        <div class="col-6">
                                                            <input class="form-control form-control-lg form-control-solid" type="text" name="expertise" value="<?php echo e($profile->expertise); ?>">
                                                            <?php $__errorArgs = ['expertise'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>   
                                       <div class="card-footer">
                                       <input class="btn btn-primary" type="submit" value="Submit" style="position:absolute; right:20px;">
                                       </div>
                                </form>

                            </div>
                            <!--begin::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('coach_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/coach/edit_profile.blade.php ENDPATH**/ ?>