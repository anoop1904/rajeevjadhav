
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>
<!--begin::Container-->
<div class="container pb-10">

    <?php if($users): ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#anoopkumar_<?php echo e($data->id); ?>">
                                    <span class="nav-text">Customer Details</span>
                                </a>
                            </li>
                            <?php

                            $userQA =
                             DB::table('customer_questions')->where('customer_id',$data->id)->where('customer_type','guest')->orderBy('created_at','Desc')->get()->toArray();
                             
                            ?>
                            <?php if($userQA): ?>
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#anooppackage_<?php echo e($data->id); ?>">
                                    <span class="nav-text">Packages</span>
                                </a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#anoopquestion_<?php echo e($data->id); ?>">
                                    <span class="nav-text">Questions</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content pt-5">
                        <div class="tab-pane active" id="anoopkumar_<?php echo e($data->id); ?>" role="tabpanel">
                            <div class="container">
                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="<?php echo e(url('public/assets/media/users/default.jpg')); ?>">
                                            </div>
                                            <div class="timeline-content">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="mr-2">
                                                        <span
                                                            class="font-weight-bolder font-size-lg mr-2"><?php echo e($data->name); ?></span>
                                                        <span class="text-muted"><i
                                                                class="fa fa-envelope text-primary mr-2"></i><?php echo e($data->email); ?>

                                                        </span>
                                                        <span class="text-muted"> <i
                                                                class="fa fa-phone text-primary mr-2"></i><?php echo e($data->phone); ?>

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="anooppackage_<?php echo e($data->id); ?>" role="tabpanel">
                            <div class="container">
                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="<?php echo e(url('public/assets/media/users/default.jpg')); ?>">
                                            </div>
                                            <div class="timeline-content">

                                                <?php $userPckg =
                                                DB::table('user_package')->where('user_id',$data->id)->where('user_type','guest')->orderBy('added_at','Desc')->get()->toArray();
                                                ?>
                                                <?php if( $userPckg): ?>

                                                <table>
                                                    <tbody>
                                                        <?php $__currentLoopData = $userPckg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$datap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($datap->pack_id != ""): ?>
                                                        <?php $pckg =
                                                        DB::table('package')->where('id',$datap->pack_id)->orderBy('added_at','Desc')->get()->toArray();
                                                        ?>
                                                        <?php if($pckg): ?>
                                                        <?php $__currentLoopData = $pckg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>

                                                            <td><?php echo e($p->name); ?></td>

                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <!--<tr>-->
                                                        <!--    <td class="text-muted py-1">Que Remain </td>-->
                                                        <!--    <td></td>-->
                                                        <!--</tr>-->

                                                    </tbody>
                                                </table>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane" id="anoopquestion_<?php echo e($data->id); ?>" role="tabpanel">
                            <div class="container">
                                <?php

                                $userQA =
                                DB::table('customer_questions')->where('customer_id',$data->id)->orderBy('created_at','Desc')->get()->toArray();


                                ?>
                                <?php if($userQA ): ?>
                                <?php $__currentLoopData = $userQA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uQA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($uQA->question_check !=""): ?>

                                <div class="timeline timeline-3">
                                    <div class="timeline-items">
                                        <div class="timeline-item">
                                            <div class="timeline-media">
                                                <img alt="Pic" src="<?php echo e(url('public/assets/media/users/default.jpg')); ?>">
                                            </div>

                                            <div class="timeline-content mb-4">

                                                <table class="mb-4">
                                                    <tr>
                                                         <td>
                                                            <?php if($uQA->fname != ""): ?>
                                                            <!-- <p>Name : <?php echo e($uQA->fname); ?> <?php echo e($uQA->lname); ?></p>
                                                             <p>Partner Name : <?php echo e($uQA->partner_fname); ?> <?php echo e($uQA->partner_lname); ?></p> -->
                                                            <?php endif; ?>

                                                            <p><?php echo e($uQA->question_check); ?></p>

                                                        </td>
                                                        <td>
                                                            <?php if($uQA->status == 0): ?>
                                                            <a href="<?php echo e(url('admin/response/'.$uQA->id)); ?>"
                                                                class="btn btn-outline-danger"
                                                                style="position:absolute; right:20px;">Response</a>
                                                            <?php elseif($uQA->status == 1): ?>
                                                            <a href="<?php echo e(url('admin/response/'.$uQA->id)); ?>"
                                                                class="btn btn-outline-success"
                                                                style="position:absolute; right:20px;">Response</a>
                                                            <?php endif; ?>

                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>





</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/customer/guestlist.blade.php ENDPATH**/ ?>