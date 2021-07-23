<?php echo $__env->make('includes.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<!--begin::Header-->
                <div class="header">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
									<!--begin::Header Nav-->
									<ul class="menu-nav">
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active" data-menu-toggle="click" aria-haspopup="true">
											<!-- <a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Coach Login</span>
												<i class="menu-arrow"></i>
											</a>									 -->
										</li>							
								
									</ul>
									<!--end::Header Nav-->
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
							<!--begin::User-->	
								<?php if(Route::has('login')): ?>
									
										<?php if(auth()->guard()->check()): ?>
										<div class="topbar-item">
											<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
												<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
												<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo e(Auth::user()->name); ?></span>
												<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
													<span class="symbol-label font-size-h5 font-weight-bold">S</span>
												</span>
											</div>
										</div>											
										<?php else: ?>										
											<div class="topbar-item">
											<a href="<?php echo e(url('/admin')); ?>" class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">										
												<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline my-3">Login As Admin</span>									
											</a>
											</div>									
										<?php endif; ?>								
								<?php endif; ?>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->



<div class="container p-0" style="height: 100% !important; position:relative;">
    <div class="row m-0" style="position: absolute; width:100%; top:50%; transform:translateY(-50%);">
        <div class="col-md-6 offset-3">
      <div class="card p-5">
            <!--begin::Login Sign in form-->
            <div class="login-signin text-center">
                <div class="mb-20">
                    <h3>Coach Login</h3>
                    <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
					<?php if($errors->any()): ?>
					<h4 class="text-danger">	<?php echo e('Credantial Do not match'); ?> </h4>
					<?php endif; ?>
				</div>
                <form method="POST" action="<?php echo e(url('login_coach')); ?>">
                 <?php echo csrf_field(); ?>
                    <div class="form-group mb-5">
                    <input class="form-control h-auto form-control-solid py-4 px-8" type="email" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>"/>
			        </div>
                    <div class="form-group mb-5">
                    <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" id="password"/>
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                        <div class="checkbox-inline">
                            <!--<label class="checkbox m-0 text-muted">-->
                            <!--    <input type="checkbox" name="remember" />-->
                            <!--    <span></span>Remember me</label>-->
                        </div>
                        <a href="<?php echo e(url('/coach/forgot_password')); ?>" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
                    </div>
                    <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
                </form>
                <!--<div class="mt-10">-->
                <!--    <span class="opacity-70 mr-4">Don't have an account yet?</span>-->
                <!--    <a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Sign Up!</a>-->
                <!--</div>-->
            </div>
            <!--end::Login Sign in form-->
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('includes.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/admin/coach/login.blade.php ENDPATH**/ ?>