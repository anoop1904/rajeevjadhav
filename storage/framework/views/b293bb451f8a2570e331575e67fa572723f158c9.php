
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>

<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
					    	<?php if($roles): ?>
										<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($row->id == $selectedid): ?>
						<h3 class="card-title"><?php echo e($row->name); ?> Questions</h3>
					
						<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
							
						<h3 class="card-title"><?php echo e($name); ?></h3>
									
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<a href="<?php echo e(url('/admin/add_question')); ?>" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form class="form" action="<?php echo e(url('savequestions')); ?>" method="post">
						<div class="card-body">
						     <?php if(session()->has('message')): ?>
                            						<div class="alert alert-success">
                            							<?php echo e(session()->get('message')); ?>

                            						</div>
                            						<?php endif; ?>
							<div class="form-group">

								<div class="btn-group" role="group">
									<button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Select Role
									</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
										<?php if($roles): ?>
										<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<a class="dropdown-item" href="<?php echo e(url('admin/show_question/'.$row->id)); ?>"><?php echo e($row->name); ?></a>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<table class="table mb-5">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Sr. No.</th>
											<th scope="col">Questions</th>
											<th scope="col">Date</th>
											<!--<th scope="col">Status</th>-->
											<th scope="col">Actions</th>

										</tr>
									</thead>
									<tbody><?php if($quesdata): ?>
										<?php $__currentLoopData = $quesdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<th scope="row"><?php echo e($key+1); ?></th>
											<!-- <td><?php echo e($data->coach_id); ?></td> -->
											<td><?php echo e($data->ques); ?></td>
											<td><?php echo e($data->created_at); ?></td>
											<!--<?php if($data->status==1): ?>-->
											<!--<td>-->
											<!--	<span class="label label-inline label-light-primary font-weight-bold">Active</span>-->
											<!--</td>-->
											<!--<?php else: ?><td>-->
											<!--	<span class="label label-inline label-light-primary font-weight-bold">Deactive</span>-->
											<!--</td>-->
											<!--<?php endif; ?>-->


											<td>
												<a href="<?php echo e(url('/admin/edit-questions/'.$data->id)); ?>"><span class="svg-icon svg-icon-primary svg-icon-2x">
														<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Write.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
												</a></span>
												<!-- <img src="<?php echo e('public/assets/media/svg/icons/General/Trash.svg'); ?>"/> -->
												 <a href='../delete_question/<?php echo e($data->id); ?>'><span class="svg-icon svg-icon-danger svg-icon-2x">
														<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#FF0000" fill-rule="nonzero" />
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#FF0000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>



											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</tbody>
								</table>
							</div>





							<!-- <div class="form-group">
														<label>Subscription</label>
														<div class="input-group input-group-solid">
															<div class="input-group-prepend">
																<span class="input-group-text">$</span>
															</div>
															<input type="text" class="form-control form-control-solid" placeholder="99.9" />
														</div>
													</div>
													<div class="form-group">
														<label>Communication:</label>
														<div class="checkbox-list">
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>Email</label>
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>SMS</label>
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>Phone</label>
														</div>
													</div> -->
							<!--begin: Code-->
							<!-- <div class="example-code mt-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
                                                                    </div>
													</div> -->
							<!--end: Code-->
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
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/admin/question/showquestions.blade.php ENDPATH**/ ?>