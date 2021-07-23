<!doctype html>

<html>

<head>

<meta charset=utf-8>

<html lang=en-in dir=ltr>

<meta http-equiv=X-UA-Compatible content="IE=edge">

<title><?php echo $__env->yieldContent('title'); ?></title>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<link rel="icon" type="image/x-icon" href="<?php echo e(asset('public/front/favicon.ico')); ?>">

<link href="<?php echo e(asset('public/front/css/bootstrap.min.css')); ?>" rel=stylesheet>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet"/>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link href="<?php echo e(asset('public/front/css/animate.css')); ?>" rel=stylesheet>

<link href="<?php echo e(asset('public/front/css/owl.carousel.css')); ?>" rel=stylesheet>

<link href="<?php echo e(asset('public/front/css/style.css')); ?>" rel=stylesheet>

<style>

::selection {background:#3764EB;color:#fff;}

::-moz-selection {background: #3764EB;color:#fff;}



</style>

</head>

<body>

<div class="top-header">

	<div class="container-fluid">

		<div class="d-flex">

			<div class="soccial-icons">

                <ul class="list-inline mb-0">

                    <li class="list-inline-item"><a href="https://www.facebook.com/ManifestationCoaching" class="fa fa-facebook"></a></li>

                    <li class="list-inline-item"><a href="https://www.instagram.com/rajivness" class="fa fa-instagram"></a></li>

                    <li class="list-inline-item"><a href="https://twitter.com/rajivness" class="fa fa-twitter"></a></li>

                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/rajivjadhav" class="fa fa-linkedin"></a></li>

                    <li class="list-inline-item"><a href="https://www.youtube.com/user/rajivness" class="fa fa-youtube"></a></li>

                </ul>

            </div>

			<div class="ml-auto header-no"><i class="fa fa-whatsapp"> </i> : +1516-451-7759   |   <i class="fa fa-phone"> </i> : +1646-96-5866</div>

			</div>

	</div>

</div>

<header class="shadow-sm sticky-top">

    <div class="container-fluid">

        <div class="d-flex">

            <div class="flex-grow-1">

                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/front/images/logo.png')); ?>"/></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                      <span class="navbar-toggler-icon"></span>

                    </button>

                  

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                      <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">

                          <a class="nav-link <?php echo e(Request::segment(1) == '' ? 'cus_menu' : ''); ?>" href="<?php echo e(url('/')); ?>">Home</a>

                        </li>

                        <?php echo e(Request::segment(0)); ?>


                        <li class="nav-item">

                          <a class="nav-link <?php echo e(Request::segment(1) == 'about' ? 'cus_menu' : ''); ?>" href="<?php echo e(url('/about')); ?>">About Us</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link <?php echo e(Request::segment(1) == 'services' ? 'cus_menu' : ''); ?>" href="<?php echo e(url('/services')); ?>">Services</a>

                          </li>

                          <li class="nav-item">

                            <a class="nav-link <?php echo e(Request::segment(1) == 'testimonials' ? 'cus_menu' : ''); ?>" href="<?php echo e(url('/testimonials')); ?>">Testimonials</a>

                          </li>

                          <li class="nav-item">

                            <a class="nav-link <?php echo e(Request::segment(1) == 'contact' ? 'cus_menu' : ''); ?>" href="<?php echo e(url('/contact')); ?>">Contact</a>

                          </li>

                      </ul>

                    </div>

                  </nav>

            </div>

            

            <?php if(auth()->guard("customer")->check()): ?>
           
        <div class="user-dropdown">
            <div class="btn-group">
              <div class="notification-box" class="dropdown-toggle" data-toggle="dropdown"><a href="#"><i class="fa fa-bell">   
                <span class="notif-count1" id="front_noti" style="position: relative;">  
                  <?php 	  
                  // $customer_questions = DB::table('customer_questions')->where('notification_status', '0')->orWhere('notification_status', '0,2')->orderBy('id', 'desc')->get()->toArray();
                  $id = Auth::guard('customer')->user()->id;  
                  $customer_questions = DB::table('responses')->where('user_id', $id)->where('status', '1')->orderBy('id', 'desc')->get()->toArray();
                  $key = -1;  
                 
                  ?>	   
                  <?php $__currentLoopData = $customer_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$customer_questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                  <?php if($key == 0): ?>  
                  <span style="display:block; background:red; color:#ffffff; width: 20px; height:20px; position:absolute; top:-18px; right:-12px; border-radius:50%; font-size:12px;line-height:20px"> <?php echo e(1); ?> </span>											
  
                  <?php elseif($key > 0): ?>  
                  <span style="display:block; background:red; color:#ffffff; width: 20px; height:20px; position:absolute; top:-18px; right:-12px; border-radius:50%; font-size:12px;line-height:20px"> <?php echo e($key+1); ?> </span>	
                    <?php endif; ?>  
                  <div style="position: absolute; right:0px;top:20px; background:white; border:1px solid grey; display:none;">
                      <div class="notifi" id="notifi" style="width:300px; padding:10px;">
                        <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci qui repudiandae deserunt soluta id sapiente nobis corrupti!</small>
                      </div>                
                    </div>	
                </span>
              </i></a>    
            </div>
                <div class="dropdown-menu dropdown-menu-right" style="width:250px;">

                  <?php
                  $id = Auth::guard('customer')->user()->id;
                  $responses = DB::table('responses')->where('user_id', $id)->where('status', '1')->orderBy('id', 'desc')->get()->toArray();
                  $key = -1;
                  ?>
                    
                  <?php $__currentLoopData = $responses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$response): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="p-2 text-center" id="notify_area">
                   <div class="p-1">
                    <?php echo $response->answer; ?>

                   </div>                 
                    <small class="text-muted font-size-sm">You have a new response</small>
                    <button id="<?php echo e($response->id); ?>" onclick="customer_notification_update(id)" class="btn btn-light text-warning">Unread</button>
                  </div>
                  <div class="dropdown-divider"></div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 


               
                    

                    
                    
                </div>
              </div>
        </div>

            <div class="user-dropdown">
              <div class="btn-group">
                  <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo e(asset('public/front/images/user-pic.png')); ?>"/>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="<?php echo e(url('/customer/pfofile')); ?>"><i class="icon-user icons"></i> My Profile</a>
                      <a class="dropdown-item" href="<?php echo e(url('/customer/response')); ?>"><i class="icon-envelope icons"></i> Responses</a>
                      <a class="dropdown-item" href="<?php echo e(url('/customer/creadit')); ?>"><i class="fa fa-usd"></i> My Credits</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item logout-btn" href="<?php echo e(url('/customer/logout')); ?>"><i class="icon-login icons"></i> Logout</a>
                  </div>
                </div>
          </div>
            <?php else: ?>	 

            <div class="login-btn">

              <a href="<?php echo e(url('/customer/login')); ?>" class="btn btn-primary"><i class="icon-user icons"></i> <span>Login</span></a>

          </div>

            <?php endif; ?>

          </div>

    </div>

</header><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/include/Top.blade.php ENDPATH**/ ?>