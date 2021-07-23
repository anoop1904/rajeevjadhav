					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
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
												<span class="menu-text">Dashboard</span>
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
				
								<!--begin::Quick panel-->
									<div class="topbar-item">
									<div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
										
										
										<span class="svg-icon svg-icon-primary svg-icon-2x" style="position: relative;">
											<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Notifications1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000" />
													<rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />
												</g>
											</svg>
											<!--end::Svg Icon-->	
						                    <?php 	
											$customer_questions = DB::table('customer_questions')->where('notification_status', '0')->orWhere('notification_status', '0,1')->orderBy('id', 'desc')->get()->toArray();
											$key = -1;
											?>	

											<?php $__currentLoopData = $customer_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$customer_questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											
											<?php if($key == 0): ?>
											<span style="display:block; background:red; color:#ffffff; width: 20px; height:20px; position:absolute; top:-10px; right:-10px; border-radius:50%;"> <?php echo e(1); ?> </span>											
											<?php elseif($key > 0): ?>
											<span style="display:block; background:red; color:#ffffff; width: 20px; height:20px; position:absolute; top:-10px; right:-10px; border-radius:50%;"> <?php echo e($key+1); ?> </span>	
											<?php endif; ?>																	
											
										</span>
									</div>
								</div>
								<!--end::Quick panel-->											
								<!--begin::User-->	
								<?php if(Route::has('login')): ?>								
										
									<?php if(auth()->guard("coach")->check()): ?>								
										<div class="topbar-item">
											<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
												<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
												<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo e(Auth::guard('coach')->user()->name); ?></span>
												<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
													<span class="symbol-label font-size-h5 font-weight-bold">S</span>
												</span>
											</div>
										</div>											
										<?php else: ?>										
											<div class="topbar-item">
											<a href="<?php echo e(route('login')); ?>" class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">										
												<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline my-3">Login</span>									
											</a>
											</div>
											<?php if(Route::has('register')): ?>
											<div class="topbar-item">
												<a href="<?php echo e(route('register')); ?>" class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">										
													<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline my-3">Register</span>									
												</a>
											</div>												
											<?php endif; ?>
										<?php endif; ?>								
								<?php endif; ?>
								<!--end::User-->				
								
				
								
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header--><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/includes/coach_header.blade.php ENDPATH**/ ?>