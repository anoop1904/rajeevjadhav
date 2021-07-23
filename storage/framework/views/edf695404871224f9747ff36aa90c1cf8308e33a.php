
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>



<!--begin::Container-->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Card-->
			<div class="card card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">Add packages</h3>
					<div class="card-toolbar">
						<div class="example-tools justify-content-center">
							<a type="button" class="btn btn-outline-info" href="<?php echo e(url('admin/package')); ?>">Back</a>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="form" action="<?php echo e(url('admin/add-package')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="card-body">
					

						<?php if(session()->has('message')): ?>
						<div class="alert alert-success">
							<?php echo e(session()->get('message')); ?>

						</div>
						<?php endif; ?>
						<div class="form-group">
							<label> Package For<span class="text-danger">*</span></label>
							<select class="form-control form-control-solid" name="pckg_for">
								<option value="">--Select Package For--</option>
								<option value="1">Call </option>
								<option value="2">Message</option>

							</select>
							<?php $__errorArgs = ['pckg_for'];
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
							<label for="exampleTextarea">Amount<span class="text-danger">*</span></label>
							<input type="text" id="amount" name="amount" class="form-control form-control-lg" placeholder="Add Amount">
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
						<div class="form-group">
							<label for="exampleTextarea">Package<span class="text-danger">*</span></label>
							<textarea class="form-control form-control-solid" rows="3" name="packg_name"></textarea>
							<?php $__errorArgs = ['packg_name'];
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
							<label for="exampleTextarea">Description
							</label>
							<textarea class="form-control form-control-solid" rows="3" name="descp"></textarea>

						</div>


						<!--end: Code-->
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary mr-2">Submit</button>
						<!--<button type="reset" class="btn btn-secondary">Cancel</button>-->
					</div>
				</form>
				<!--end::Form-->
			</div>
			<!--end::Card-->
		</div>
	</div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/package/addpackage.blade.php ENDPATH**/ ?>