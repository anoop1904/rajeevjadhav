
<?php $__env->startSection('title', 'coach dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mb-10">
    <div class="row">
        <div class="col-md-12">

        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-body p-4">
                    <!--begin::Details-->
                    <div class="d-flex">
                        <!--begin: Pic-->
                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img src="<?php echo e(asset('storage/app/coach/profile/'.$coach->photo)); ?>" alt="image" class="img img-thumbnail">
                            </div>   
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between flex-wrap mt-1">
                                <div class="d-flex mr-3">
                                    <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo e($coach->name); ?></a>
                                    <a href="#">
                                        <i class="flaticon2-correct text-success font-size-h5"></i>
                                    </a>
                                </div>
                                <div class="my-lg-0 my-3">
                                     <a href="<?php echo e(url('admin/edit_profile/'.$coach->id)); ?>" class="btn btn-sm btn-success font-weight-bolder text-uppercase">Edit</a> 
                                    <a class="btn btn-sm btn-danger font-weight-bolder text-uppercase" onclick="return confirm('Are you sure?')" href="<?php echo e(url('/admin/delete_coach', $coach->id)); ?>"><i class="fa fa-trash"></i></a>
                                    
                                </div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap justify-content-between mt-1">
                                <div class="d-flex flex-column flex-grow-1 pr-8">
                                    <div class="d-flex flex-wrap mb-4">
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                             <i class="fa fa-envelope text-primary mr-2"></i><?php echo e($coach->email); ?></a>
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <i class="fa fa-phone text-primary mr-2"></i><?php echo e($coach->phone); ?></a>
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <i class="fa fa-user-graduate text-primary mr-2"></i><?php echo e($coach->qualification); ?></a>
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold">
                                         <i class="fa fa-briefcase text-primary mr-2"></i><?php echo e($coach->expertise); ?></a>
                                            
                                    </div>
                                        
                                    
                                            <?php
                                            $role = explode(',',$coach->role);
                                           
                                            ?>
                                            <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            
                                            $typ = DB::table('roles')->where(['status'=>'0','id'=>$type])->first();
                                            ?>
                                    <span class="font-weight-bold text-dark-50"><?php echo e($typ->name); ?></span>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>  
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->             
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/coach/index.blade.php ENDPATH**/ ?>