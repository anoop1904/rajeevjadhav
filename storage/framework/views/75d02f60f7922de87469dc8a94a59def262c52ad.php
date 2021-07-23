
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Schedule call'); ?>
<?php $__env->startSection('link', 'schedule-call'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="schedule-call-container pb-5">
    <div class="container">
        <div class="section-heading wow fadeInUp mb-5 mt-4">
        <h2 class="text-center">Schedule Your Call</h2>
    </div>
        <div class="schedulecall-con shadow">
            <div class="row">
                <div class="col-12 col-lg-4 bg-primary position-relative mobile-none">
                    <div class="form-left-panel">
                        <h2><span>DISCUSS YOUR</span>ASSESSMENT WITH US</h2>
                        <div class="left-img"><img src="<?php echo e(url('public/front/images/4398.png')); ?>"/></div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="py-4 pr-4 pl-4 pl-lg-2">
                    <h3>Personal Details</h3>
            <form class="mt-3" id="question_form" action="<?php echo e(url('/customer/question/submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                <div class="col-12">
                <div class="form-group">
                    <label>Service Type</label>
                    <select class="form-control" id="type" name="service_type">
                        <option>Select Question</option>
                        <?php $__currentLoopData = $s_que['service_question']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <?php if($service_question->coach_id == '1'): ?>
                          <?php  $value = 'spiritual'  ?>
                        <?php else: ?>
                        <?php  $value = 'business'  ?>
                        <?php endif; ?>                  
                                 <option value="<?php echo e($value); ?>"><?php echo e($service_question->ques); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                    </select>
                </div>
            </div>
            </div>
                
                <div class="row" id="row_name">
                    <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name"/>
                    </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Partner First Name</label>
                            <input type="text" name="partner_fname" class="form-control" placeholder="Enter First Name"/>
                        </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Partner Last Name</label>
                                <input type="text" name="partner_lname" class="form-control" placeholder="Enter Last Name"/>
                            </div>
                        </div>
                </div>
                <div class="sep-line mt-2"></div>
                <div class="row">
                    <div class="col-12">
                    <div class="form-group position-relative pr-0 pr-lg-5">
                        <div id="qaCount" class="question-count">0</div>
                        <label class="pr-5 pr-lg-0">Select the Questions you want answered</label>
                        <div id="QA-checkbox">                          
                            <?php $__currentLoopData = $s_que['questions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input question_check" onchange="count_que()" type="checkbox" name="question_check[]" value="Did I know them in an earlier life?" id="check.<?php echo e($key+1); ?>">
                                <label class="custom-control-label" for="check.<?php echo e($key+1); ?>">
                                    <?php echo e($questions->ques); ?>

                                </label>
                              </div>  
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input other_que question_check" onchange="count_que()" type="checkbox" name="question_check[]" value="Other" id="check5">
                            <label class="custom-control-label" for="check5">
                                Other
                            </label>
                          </div>

                        </div>
                          
                    </div>
                </div>
                </div>

                <div class="row other_question">
                    <div class="col-12">
                        <div class="form-group position-relative">
                            <textarea class="form-control" name="other_question" id="custom-qa" rows="4" placeholder="Enter Question"></textarea>
                            <div class="charLim">Total Charector Limit <span id="charNum">500</span></div>
                        </div>
                    </div>
                </div>

                <div class="sep-line"></div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Do you want discovery call ?</label>

                            <div class="d-flex">
                                <div class="mr-2">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="call_m" id="call-yes" value="yes">
                                        <label class="custom-control-label" for="call-yes">
                                            Yes
                                        </label>
                                      </div>
                                </div>
                                <div class="ml-2">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="call_m" id="call-c" value="done">
                                        <label class="custom-control-label" for="call-c">
                                            Already Done
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="payment-row" style="display: none;">
                <div class="sep-line"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Pricing</label>
                            <input type="hidden" name="question_price_total" id="question_price_total" value="">
                            <div class="selected-price">You have select 4 question and total price is <strong id='ttl'>0</strong></div>
                            <div class="row">
                                <?php $__currentLoopData = $s_que['package']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="plan_type" value="<?php echo e($package->name); ?> - <strong>$<?php echo e($package->price); ?></strong>" id="plan.<?php echo e($key+1); ?>">
                                            <label class="custom-control-label" for="plan.<?php echo e($key+1); ?>">
                                                <?php echo e($package->name); ?> - <strong>$<?php echo e($package->price); ?></strong>
                                            </label>
                                        </div>
                                    </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <input type="hidden" id="customer_id" name="customer_id" value="">
                <div class="submit-btn text-center">
              
                    <?php if(Auth::guard('customer')->check() == true): ?> 
                    <input type="submit" value="Countinue" class="btn btn-primary">              
                    <?php else: ?>                       
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#registraion-modal">Countinue</button>
                    <?php endif; ?>
                </div>

            </form>
            </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.include.schedule_model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/schedule_call.blade.php ENDPATH**/ ?>