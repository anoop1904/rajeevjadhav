
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

                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-dark font-weight-bold mb-10">Add Testimonials</h6>
                                    </div>
                                   
                                </div>
                                
                                <form method="post" action="<?php echo e(url('admin/edit-testimonial')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <!--begin::Group-->
                                    <div class="form-group row ">
                                       <?php if(session()->has('message')): ?>
                                        <div class="form-group row alert alert-success col-6">
                                            <?php echo e(session()->get('message')); ?>

                                        </div>
                                        <?php endif; ?>
                                        
                                      </div>

                                    <div class="form-group row">
                                       
                                        <?php if($data): ?>
                                        <input  type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                        <input  type="hidden" name="old_image" value="<?php echo e($data->photo); ?>">

                                        <label class="col-form-label col-3 text-lg-right text-left">Customer Image</label>
                                        <div> <img alt="Pic" width="100px" height="100px" name="old_image" src="<?php echo e(url('/storage/app/'.$data->photo)); ?>" /></div>
                                        <div class="col-6">

                                            <div class="image-input image-input-outline image-input-circle" id="kt_image_1">

                                                <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_3.jpg)"></div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>

                                                    <input type="file" name="profile_avatar" value="" />
                                                    <input type="hidden" name="profile_avatar_remove" value="" />
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel Image">
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
                                    <?php if($data->video != '0'): ?>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right">Old Video File:</label>

                                        <div class="col-lg-9">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="old_profile_video" value="<?php echo e($data->video); ?>" readonly />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right">Upload Video:</label>

                                        <div class="col-lg-9">
                                            <input type="file" name="profile_video" value="" />
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                   
                                    <?php if($data->link != '0'): ?>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right">Old Video Link:</label>

                                        <div class="col-lg-9">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="old_profile_link" value="<?php echo e($data->link); ?>" readonly />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right">Video Link:</label>

                                        <div class="col-lg-9">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="profile_link" value="" />
                                        </div>
                                    </div>
                                    <?php endif; ?>



                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Name</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="firstname" value="<?php echo e($data->name); ?>">
                                            <?php $__errorArgs = ['Name'];
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
                                        <label class="col-form-label col-3 text-lg-right text-left">Title</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="design" value="<?php echo e($data->design); ?>">
                                            <?php $__errorArgs = ['Designation'];
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
                                        <label class="col-form-label col-3 text-lg-right text-left">Service Type</label>
                                        <div class="col-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text" name="type" value="<?php echo e($data->type); ?>">
                                            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <?php endif; ?>

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Description</label>
                                        <div class="col-6">
                                            <textarea class="form-control form-control-lg form-control-solid" name="descrp" id="descrp" cols="30" rows="4" placeholder="optional"><?php echo e($data->descrp); ?></textarea>
                                        </div>
                                    </div>
                                    <input class="btn btn-primary mr-2" type="submit" value="Submit">
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
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/testimonial/edit.blade.php ENDPATH**/ ?>