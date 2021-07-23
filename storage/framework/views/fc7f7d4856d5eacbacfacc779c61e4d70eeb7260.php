
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>


<!--begin::Container-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Add Promocode</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <a type="button" class="btn btn-outline-info" href="<?php echo e(url('/admin/promocode')); ?>">Back</a>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->  
                <form class="form" action="<?php echo e(url('admin/edit-promocode')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                        <?php endif; ?>




                        
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <div class="form-group row">
                            <input type="hidden" id="pid" name="pid" class="form-control form-control-lg" placeholder="Add Amount" value="<?php echo e($pdata->id); ?>">
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>Promocode :</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pcode" placeholder="Enter your code" value="<?php echo e($pdata->name); ?>" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark"></i></span></div>
                                </div>
                                <?php $__errorArgs = ['pcode'];
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
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>Amount :</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="amount" placeholder="Enter Amount" value="<?php echo e($pdata->amount); ?>" />
                                    <div class="input-group-append">  
                                    <select name="type" id="type" class="form-control h-auto form-control-solid py-2 px-4">
                                            <?php if($pdata->type=="$"): ?>
                                            <option value="$" selected>$</option>
                                            <option value="%">%</option>
                                            <?php elseif($pdata->type=="%"): ?>
                                            <option value="%" selected>%</option>
                                            <option value="$" >$</option>
                                            <?php endif; ?>
                                               
                                               
                                        </select></div>
                                </div>
                                <!--<span class="form-text text-muted">Please enter your postcode</span>-->
                                <?php $__errorArgs = ['amount'];
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
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>Start Date :</label>
                            <div class="col-lg-3">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="datepicker" name="startdate" placeholder="Select date" value="<?php echo e($pdata->startdate); ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['startdate'];
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

                            <label class="col-lg-2 col-form-label text-lg-right"><span class="text-danger">*</span>End Date :</label>
                            <div class="col-lg-3">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="datepicker_1" name="enddate" placeholder="Select date" value="<?php echo e($pdata->enddate); ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['enddate'];
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

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <!--<button type="reset" class="btn btn-secondary">Cancel</button>-->
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/promocode/editpromocode.blade.php ENDPATH**/ ?>