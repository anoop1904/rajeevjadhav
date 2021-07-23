

<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>

<?php $__env->startSection('content'); ?>



<div class="container">

    <div class="row">

        <div class="col-12">       
            <?php if(session()->get('service_type') == 1): ?>  
            <div class="calendly-inline-widget" data-url="https://calendly.com/yourfutureisbright" style="min-width:320px;height:630px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <?php else: ?>
            <iframe id="ycbmiframeresults-coaching" style="width: 100%; height: 1000px; border: 0px; background-color: transparent;" src="https://results-coaching.youcanbook.me/?noframe=true&amp;skipHeaderFooter=true" frameborder="0"></iframe>
            <?php endif; ?>
            <?php
                // session()->forget('service_type');
            ?>
        </div>

    </div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/book_call_schedule.blade.php ENDPATH**/ ?>