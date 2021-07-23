<?php echo $__env->make('includes.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
            <?php echo $__env->make('includes.coach_aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <?php echo $__env->make('includes.coach_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->						
							<?php echo $__env->yieldContent('content'); ?>
							<!--end::Container-->
						</div>	
					<!-- </div>		 -->
                    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</div>
<?php echo $__env->make('includes.coach_bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/coach_master.blade.php ENDPATH**/ ?>