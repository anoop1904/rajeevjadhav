
<?php $__env->startSection('title', 'coach dashboard'); ?>
<?php $__env->startSection('content'); ?>


<!--begin::Container-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Questions Response</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <!--<a type="button" class="btn btn-outline-info" href="<?php echo e(url('admin/package')); ?>">Back</a>-->
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form action="<?php echo e(url('admin/response/'.$userQA->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                        <?php endif; ?>

                        

                        <?php if($userQA ): ?>
                        <?php if($userQA->fname != ""): ?>
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg"
                                value="<?php echo e($userQA->id); ?>">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">

                                    <h4><?php echo e($userQA->fname); ?> <?php echo e($userQA->lname); ?></h4>



                                </div>

                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($userQA->partner_fname != ""): ?>
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg"
                                value="<?php echo e($userQA->id); ?>">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Partner Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">
                                    <h4> <?php echo e($userQA->partner_fname); ?> <?php echo e($userQA->partner_lname); ?></h4>

                                </div>

                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <input type="hidden" id="id" name="id" class="form-control form-control-lg"
                                value="<?php echo e($userQA->id); ?>">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Question:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">

                                    <?php if($userQA->question_check != ""): ?>
                                    <h3><?php echo e($userQA->question_check); ?> </h3>
                                    <?php endif; ?>



                                </div>

                            </div>
                        </div>
                        <?php
                        $response = DB::table('responses')->where(['ques_id'=>$userQA->id])->first();
                        

                        ?>
                        <?php if($userQA->status ==0): ?>
                        <div class="form-group row">
                            
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->

                                <textarea name="kt_ckeditor_2" id="kt-ckeditor-2">NO RESPONSE</textarea>

                            </div>
                        </div>
                       
                        <?php elseif($userQA->status ==1 && $response->coach_id != ""): ?>
                        <?php
                        $coaches = DB::table('coaches')->where(['id'=>$response->coach_id])->first();
                        ?>

                        <div class="form-group row">
                          
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Coach Name:</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">

                                <div class="input-group">
                                    <h4> <?php echo e($coaches->name); ?> </h4>

                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->

                                <p name="answer" id="answer"><?php echo $response->answer; ?></p>

                            </div>
                        </div>
                        <?php else: ?>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Response:</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <!-- <div class="summernote" id="kt_summernote_1"></div> -->

                                <textarea name="answer" id="answer">RESPONDED</textarea>

                            </div>
                        </div>
                        <?php endif; ?>


                        <?php endif; ?>

                    </div>
                </form>

                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/customer/response.blade.php ENDPATH**/ ?>