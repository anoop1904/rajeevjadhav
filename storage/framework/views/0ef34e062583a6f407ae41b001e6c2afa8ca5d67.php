<!doctype html>
<html>
<head>
<meta charset=utf-8>
<html lang=en-in dir=ltr>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<title><?php echo $__env->yieldContent('title'); ?></title>
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
<div class="top-header wow fadeInUp">
	<div class="container-fluid">
		<div class="d-flex">
			<div class="soccial-icons">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="fa fa-facebook"></a></li>
                    <li class="list-inline-item"><a href="#" class="fa fa-instagram"></a></li>
                    <li class="list-inline-item"><a href="#" class="fa fa-twitter"></a></li>
                    <li class="list-inline-item"><a href="#" class="fa fa-linkedin"></a></li>
                    <li class="list-inline-item"><a href="#" class="fa fa-youtube"></a></li>
                </ul>
            </div>
			<div class="ml-auto header-no"><i class="fa fa-phone"></i> 1-00-222-2222</div>
		</div>
	</div>
</div>
<header class="shadow-sm sticky-top wow fadeInUp">
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
                          <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(url('/about')); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/services')); ?>">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/testimonials')); ?>">Testimonials</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            <div class="notification-box"><a href="#"><i class="fa fa-bell"></i><span class="notif-count">2</span></a></div>
            <?php if(auth()->guard("customer")->check()): ?>	
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
</header><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/include/Top.blade.php ENDPATH**/ ?>