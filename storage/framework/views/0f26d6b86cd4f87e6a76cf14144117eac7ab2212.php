
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Services'); ?>
<?php $__env->startSection('link', 'services'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="services-p-con mt-5">
    <div class="container">
        <div class="section-heading wow fadeInUp">
            <h2>Greatness is Within Your Reach</h2>
            <p class="text-center">Live a purpose driven life with clarity on What you should be doing When and with Whom – to achieve the balance you seek between work and the life beyond that. Rajiv Jadhav’s one-on-one private coaching programs or corporate group coaching programs/group workshops will help you get you past the finish line – Fast!</p>
        </div>

        <div class="services-lists mt-5">
            <div class="service-list-box bg-dark wow fadeInUp">
                <div class="service-images-list-right"><img src="<?php echo e(asset('public/front/images/soulmate.png')); ?>"></div>
                <div class="service-list-text-right">
                    <div class="d-flex align-items-center">
                    <div>
                        <h3>Find your Soulmate</h3>
                        <p>Tired of being alone? We’ll help you find your significant other</p>
                        <a href="<?php echo e(url('/service-details-soulmate')); ?>" class="btn btn-primary">Read More</a>
                </div>
                </div>
                </div>
            </div>

            <div class="service-list-box wow fadeInUp">
                <div class="service-images-list-left"><img src="<?php echo e(asset('public/front/images/Influencer.png')); ?>"></div>
                <div class="service-list-text-left">
                    <div class="d-flex align-items-center">
                        <div class="align-self-center">
                    <h3>Become an Influencer</h3>
                    <p>Tired of not been taken seriously by peers? We’ll help you become an Influencer</p>
                    <a href="<?php echo e(url('/service-details-influencer')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>


            <div class="service-list-box bg-dark wow fadeInUp">
                <div class="service-images-list-right"><img src="<?php echo e(asset('public/front/images/business.png')); ?>"></div>
                <div class="service-list-text-right">
                    <div class="d-flex align-items-center">
                    <div class="align-self-center">
                        <h3>Start/Grow your Business</h3>
                        <p>Have an idea but unclear how to make it a business? We help you start or grow your business</p>
                        <a href="<?php echo e(url('/service-details-business')); ?>" class="btn btn-primary">Read More</a>
                </div>
                </div>
                </div>
            </div>

            <div class="service-list-box wow fadeInUp">
                <div class="service-images-list-left"><img src="<?php echo e(asset('public/front/images/corporate-coaching.png')); ?>"></div>
                <div class="service-list-text-left">
                    <div class="d-flex align-items-center">
                        <div class="align-self-center">
                    <h3>CORPORATE COACHING</h3>
                    <p>Need help in elevating your team’s performance or elevating your team’s profile at work? </p>
                    <a href="<?php echo e(url('/service-details-corporate')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="service-list-box bg-dark wow fadeInUp">
                <div class="service-images-list-right"><img src="<?php echo e(asset('public/front/images/private-coaching.png')); ?>"></div>
                <div class="service-list-text-right">
                    <div class="d-flex align-items-center">
                    <div class="align-self-center">
                        <h3>PRIVATE COACHING</h3>
                        <p>Need help in elevating your  performance or elevating your  profile at work?</p>
                        <a href="<?php echo e(url('/service-details-private')); ?>" class="btn btn-primary">Read More</a>
                </div>
                </div>
                </div>
            </div>

            <div class="service-list-box wow fadeInUp">
                <div class="service-images-list-left"><img src="<?php echo e(asset('public/front/images/Book-Me-1a.png')); ?>"></div>
                <div class="service-list-text-left">
                    <div class="d-flex align-items-center">
                        <div class="align-self-center">
                    <h3>BOOK ME</h3>
                    <p>Hire Rajiv or any of our talented roster of speakers to speak at your next event. Available in person and virtually (through zoom, teams, meet, skype, etc.)</p>
                    <a href="<?php echo e(url('/bookme')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fearturedin wow fadeInUp">
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
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/services.blade.php ENDPATH**/ ?>