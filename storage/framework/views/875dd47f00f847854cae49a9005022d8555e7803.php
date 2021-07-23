
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Services'); ?>
<?php $__env->startSection('link', 'services'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="faq-container profile-container py-5 bg-light wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-boxes shadow-sm py-2 px-3">
                   <div class="user-name position-relative">
                    <img src="<?php echo e(asset('public/front/images/user.png')); ?>" class="user-image"/>
                    <div class="user-txt">
                        <small>Hello,</small>
                        <p><?php echo e($customer->name); ?></p>
                    </div>
                    </div>
                </div>

                <div class="user-boxes shadow-sm py-2">
                    <div class="user-links">
                       <ul class="list-unstyled">
                        <li><a href="<?php echo e(url('/customer/pfofile')); ?>" class="<?php echo e(Request::segment(2) == 'pfofile' ? 'cus_active' : ''); ?>"><i class="icon-user icons <?php echo e(Request::segment(2) == 'pfofile' ? 'cus_active' : ''); ?>"></i> My Profile</a></li>
                        <li><a href="<?php echo e(url('/customer/response')); ?>" class="<?php echo e(Request::segment(2) == 'response' ? 'cus_active' : ''); ?>"><i class="icon-envelope icons <?php echo e(Request::segment(2) == 'response' ? 'cus_active' : ''); ?>"></i> Responses</a></li>
                        <li><a href="<?php echo e(url('/customer/creadit')); ?>" class="<?php echo e(Request::segment(2) == 'creadit' ? 'cus_active' : ''); ?>"><i class="fa fa-usd <?php echo e(Request::segment(2) == 'pfofile' ? 'creadit' : ''); ?>"></i> My Credits</a></li>
                        <li><a href="<?php echo e(url('/customer/change_password')); ?>" class="<?php echo e(Request::segment(2) == 'change_password' ? 'cus_active' : ''); ?>"><i class="fa fa-lock <?php echo e(Request::segment(2) == 'change_password' ? 'cus_active' : ''); ?>"></i> Change Password</a></li>
                        <li><a class="" href="<?php echo e(url('/customer/logout')); ?>" ><i class="icon-login icons"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 min-height-380">
                    <h3>Reasponses</h3>
                    <div class="msg-info">
                        <ul class="list-inline">
                            <li class="list-inline-item"><input type="radio" name="read_unread" id="unread" checked> Unread Responses</li>
                            <li class="list-inline-item"><input type="radio" name="read_unread" id="read"> Read Responses</li>
                        </ul>
                    </div>
                <div class="faqs-con responces-qa">
                    <div class="accordion" id="accordionExample">
                        
                        <?php $__currentLoopData = $response; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$response): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($response->status == 0): ?>
                        <div class="card">
                            <div class="card-header <?php echo e($response->status == 1 ? 'read-responce' : ''); ?>" id="reheading" onclick="responcestatus(<?php echo e($response->ques_id); ?>)" >
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responceone<?php echo e($key+1); ?>" aria-expanded="true" aria-controls="responceone">
                                    <?php $question_data = DB::table('customer_questions')->where('id', $response->ques_id)->first(); ?>
                                    <?php if(isset($question_data->question_check)): ?>
                                    <?php echo e($question_data->question_check); ?>

                                    <?php else: ?> 
                                    <?php echo e("No response"); ?>

                                    <?php endif; ?>                                     
                                </button>
                                <span class="responce-date">30 JUN</span>
                            </div>
                            <div id="responceone<?php echo e($key+1); ?>" class="collapse" aria-labelledby="reheading" data-parent="#accordionExample">
                              <div class="card-body">
                                <?php echo e($response->answer); ?>

                              </div>
                            </div>
                          </div>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
        
                    </div>
                
                
                </div>
            </div>
            </div>
        </div>
        
    </div>
</section>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/my_response.blade.php ENDPATH**/ ?>