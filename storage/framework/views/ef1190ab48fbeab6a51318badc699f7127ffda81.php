
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
                        <?php
                        $role = DB::table('roles')->where('status', '0')->get()->toArray();
                        ?>

                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body">
                                <?php if($role): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-dark font-weight-bold mb-10">Coach Registration</h6>
                                    </div>
                                </div>
                                <form method="post" action="<?php echo e(route('store_coach')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Image</label>
                                        <div class="col-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url(assets/media/users/100_1.jpg)"></div>

                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar" value="" />
                                                    <input type="hidden" name="profile_avatar_remove" value="" />
                                                </label>

                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title="Cancel Image">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                            <?php $__errorArgs = ['profile_avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Name</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="firstname" value="<?php echo e(old('firstname')); ?>">
                                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Password</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                type="password" name="password" value="">
                                            <?php $__errorArgs = ['password'];
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
                                        <label class="col-form-label col-3 text-lg-right text-left">Confirm
                                            Password</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                type="password" name="password_confirmation" value="">
                                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span
                                                class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Contact
                                            Phone</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="phone" value="<?php echo e(old('phone')); ?>">
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
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="email" value="<?php echo e(old('email')); ?>">
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
                                        <label
                                            class="col-form-label col-3 text-lg-right text-left">Title</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="qualification" value="<?php echo e(old('qualification')); ?>">
                                            <?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Years of
                                            Experience</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="expertise" value="<?php echo e(old('expertise')); ?>">
                                            <?php $__errorArgs = ['expertise'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Role</label>
                                        <div class="col-6">
                                            <select name="coach_type" id="coach_type"
                                                class="form-control h-auto form-control-solid py-4 px-8">
                                                <option value="">Select Coach</option>
                                                <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($role_data->id); ?>"><?php echo e($role_data->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['coach_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div> -->
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Coach Role</label>
                                        <div class="col-6">
                                            <div class="multiselect">
                                                <div class="selectBox" onclick="showCheckboxes()">
                                                    <select class="form-control">
                                                        <option>Select an option</option>
                                                    </select>
                                                    <div class="overSelect"></div>
                                                </div>
                                                <div id="checkboxes" >
                                                <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label ><input type="checkbox" id="<?php echo e($role_data->id); ?>" name="role[]" value="<?php echo e($role_data->id); ?>"  /><?php echo e($role_data->name); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- <div class="multiselect">
                                        <div class="selectBox form-control" onclick="showCheckboxes()">
                                            <select>
                                                <option>Select an option</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            <label for="one">
                                                <input type="checkbox" id="one" />First checkbox</label>
                                            <label for="two">
                                                <input type="checkbox" id="two" />Second checkbox</label>
                                            <label for="three">
                                                <input type="checkbox" id="three" />Third checkbox</label>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">About Coach</label>
                                        <div class="col-6">
                                            <textarea class="form-control form-control-lg form-control-solid"
                                                name="about_coach" id="about_coach" cols="30" rows="4"
                                                placeholder="optional"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                       <input class="btn btn-primary" type="submit" value="Submit">
                                    </div>
                                </form>
                                <?php else: ?>
                                <h2 class="text-center"> <?php echo e('Please Create new Role for Coach'); ?> </h2>
                                <?php endif; ?>
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
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/coach/add.blade.php ENDPATH**/ ?>