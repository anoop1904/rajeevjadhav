
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>


<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
								<div class="col-lg-12">
			<!--begin::Card-->
			<?php if($question): ?>
					<?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $que): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">Edit Questions</h3>
					<div class="card-toolbar">
						<div class="example-tools justify-content-center">
						<a  class="btn btn-outline-info" href="<?php echo e(url('admin/show_question/'.$que->coach_id)); ?>">Back</a>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="form" action="<?php echo e(url('admin/edit-questions')); ?>" method="post">
				    <?php echo csrf_field(); ?>
					
					<div class="card-body">	
						<?php if(session()->has('message')): ?>
						<div class="alert alert-success">
							<?php echo e(session()->get('message')); ?>

						</div>
						<?php endif; ?>
						<div class="form-group">
						    	<input type="hidden" id="pid" name="pid" class="form-control form-control-lg" placeholder="Add Amount" value="<?php echo e($que->id); ?>">
							<label>Coach</label>
							<select class="form-control form-control-solid" name="coach_id">
								<?php if($que->coach_id==2): ?>
								<option value="2">Business Coach</option>
								<?php elseif($que->coach_id==1): ?>
								<option value="1">Spiritual Coach</option>
                                 <?php endif; ?>
							</select>
							<?php $__errorArgs = ['coach'];
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
							<label for="exampleTextarea">Questions</label>
							<textarea class="form-control form-control-solid" rows="3" name="ques"><?php echo e($que->ques); ?></textarea>
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
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
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
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/question/editquestions.blade.php ENDPATH**/ ?>