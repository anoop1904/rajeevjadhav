
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Testimonials'); ?>
<?php $__env->startSection('link', ''); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<section class="testimonials-con mt-5 testimonials">
    <div class="container">
        <div class="section-heading wow fadeInUp">
            <h2>Results Delivered!</h2>
        </div>

        <div class="testimonials-main shadow mt-5 mb-5 p-4">
            

          <div id="sync1" class="testi-slider owl-carousel">
              
                  <?php $__currentLoopData = $testim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$testim1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($testim1->link): ?>
               <div class="item">
              <iframe width="560" style="width: 100%;" height="315" src="<?php echo e($testim1->link); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php else: ?>
                <div class="item">
              <div class="text-testimonial position-relative">
                <i class="fa fa-quote-left"></i>
                <?php echo e($testim1->descrp); ?>

                <h4><?php echo e($testim1->name); ?></h4>
                <span> <?php echo e($testim1->design); ?> </span>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 
            </div>
          </div>
          
          
          
          <div id="sync2" class="navigation-thumbs owl-carousel" style="display:block;">
                  <?php $__currentLoopData = $testim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$testim2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item"><img src="<?php echo e(url('storage/app/'.$testim2->photo)); ?>"/></div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
    </div>
</section>



<section class="fearturedin wow fadeInUp mt-5">
    <div class="container">
        <h4 class="text-center">Featured In</h4>
       <div class="featured-slider owl-carousel">
        <div class="item text-center">
            <div class="featured-box">
                <img src="<?php echo e(asset('public/front/images/joyridesmall.png')); ?>"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="<?php echo e(asset('public/front/images/linewstransSmall.png')); ?>"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="<?php echo e(asset('public/front/images/toasttvtransamLL.png')); ?>"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="<?php echo e(asset('public/front/images/wymtranssmall.png')); ?>"/>
            </div>
        </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/testimonials.blade.php ENDPATH**/ ?>