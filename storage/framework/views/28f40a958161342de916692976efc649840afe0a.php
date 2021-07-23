
<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('content'); ?>
<!--begin::Container-->
<div class="container pb-10">
   

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-2 py-5">
                     <table class="table table-striped table-bordered table-responsive-sm dataTable" id="example_contra">
                        <thead>
                            <tr>
                                <th class="text-center">Sr. No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th >Company Name</th>
                                <th >I’m Interested in learning about</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contactus = DB::table('contactus')->get()->toArray();
                        ?>
                            <?php if($contactus): ?>
                            <?php $__currentLoopData = $contactus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td ><?php echo e($key+1); ?></td>
                                <td><?php echo e($data->firstname); ?> <?php echo e($data->lastname); ?> </td>
                                <td><?php echo e($data->email); ?> </td>
                                <td> <?php echo e($data->company_name); ?> </td>
                                <td> <?php echo e($data->about); ?> </td>
                                <td><?php echo e($data->created_at); ?> </td>
                                       
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Container-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/contact/contact.blade.php ENDPATH**/ ?>