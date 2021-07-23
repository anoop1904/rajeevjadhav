
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>



<!--begin::Container-->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Card-->
			<div class="card card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">Add Questions</h3>
					<div class="card-toolbar">
						<div class="example-tools justify-content-center">
							<a href="<?php echo e(url('admin/serviceType')); ?>" class="btn btn-outline-info">Back</a>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="form" action="<?php echo e(url('admin/add-serviceType')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="card-body">
						<?php if(session()->has('message')): ?>
						<div class="alert alert-success">
							<?php echo e(session()->get('message')); ?>

						</div>
						<?php endif; ?>
						<div class="form-group">
							<label>Question Type<span class="text-danger">*</span></label>
							<select class="form-control form-control-solid" name="coach_id">
								<option value="">--Select Type--</option>
									<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>													
								    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?> Type</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<!--<option value="2">Business Type</option>-->
								<!--<option value="1">Spiritual Type</option>-->
							

							</select>
							<?php $__errorArgs = ['coach_id'];
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
							<label for="exampleTextarea">Questions<span class="text-danger">*</span></label>
							<textarea class="form-control form-control-solid" rows="3" name="ques"></textarea>
							<?php $__errorArgs = ['ques'];
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
					<div class="card-footer">
						<button type="submit" class="btn btn-primary mr-2">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</form>
				<!--end::Form-->
			</div>
			<!--end::Card-->
		</div>
	</div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/servicetype/add.blade.php ENDPATH**/ ?>