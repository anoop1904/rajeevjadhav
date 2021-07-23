
<?php $__env->startSection('title', 'Rajeev Jadhav | Homepage'); ?>
<?php $__env->startSection('bc', 'Services'); ?>
<?php $__env->startSection('link', 'services'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="faq-container profile-container py-5 bg-light wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-boxes shadow-sm py-2 px-3">
                    <div class="user-name position-relative">
                     <img src="<?php echo e(asset('public/front/images/user.png')); ?>" class="user-image"/>
                     <div class="user-txt">
                         <small>Hello,</small>
                         <p>Jhone Wick</p>
                     </div>
                     </div>
                 </div>
 
                 <div class="user-boxes shadow-sm py-2">
                     <div class="user-links">
                         <ul class="list-unstyled">
                         <li><a href="my-profile.html"><i class="icon-user icons"></i> My Profile</a></li>
                         <li><a href="responses.html"><i class="icon-envelope icons"></i> Responses</a></li>
                         <li><a href="my-credits.html"><i class="fa fa-usd"></i> My Credits</a></li>
                         <li><a href="change-password.html"><i class="fa fa-lock"></i> Change Password</a></li>
                         <li><a class="logout-btn" href="#"><i class="icon-login icons"></i> Logout</a></li>
                         </ul>
                     </div>
                 </div>
            </div>
            <div class="col-lg-8">
                <div class="user-boxes shadow-sm py-3 px-4 min-height-380">
                    <h3>Reasponses</h3>
                    <div class="msg-info">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="unread"></span> Unread Responses</li>
                            <li class="list-inline-item"><span class="read"></span> Read Responses</li>
                        </ul>
                    </div>

                <div class="faqs-con responces-qa">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="reheadingOne">
                              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responceone" aria-expanded="true" aria-controls="responceone">
                                Did I know them in an earlier life?
                              </button>
                              <span class="responce-date">30 JUN</span>
                          </div>
                          <div id="responceone" class="collapse" aria-labelledby="reheadingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                While we cannot guarantee a specific timeline for
                                clients (since everyone has a unique situation),
                                most of our previous clients have reported
                                experiencing shifts immediately after each
                                session. Past clients have said they’ve had
                                numerous epiphanies after closely adhering to the
                                coach’s instruction after the session
                            </div>
                          </div>
                        </div>
        
                        <div class="card">
                            <div class="card-header read-responce" id="reheadingtwo">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responcetwo" aria-expanded="true" aria-controls="responcetwo">
                                Were we friends, lovers, business partners or something else?
                                </button>
                                <span class="responce-date">29 JUN</span>
                            </div>
                            <div id="responcetwo" class="collapse" aria-labelledby="reheadingtwo" data-parent="#accordionExample">
                              <div class="card-body">
                                  While we cannot guarantee a specific timeline for
                                  clients (since everyone has a unique situation),
                                  most of our previous clients have reported
                                  experiencing shifts immediately after each
                                  session. Past clients have said they’ve had
                                  numerous epiphanies after closely adhering to the
                                  coach’s instruction after the session
                              </div>
                            </div>
                        </div>
        
                        <div class="card">
                            <div class="card-header read-responce" id="reheadingthree">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responcethree" aria-expanded="true" aria-controls="responcethree">
                                    Where in the world was I when I knew them?
                                </button>
                                <span class="responce-date">27 JUN</span>
                            </div>
                            <div id="responcethree" class="collapse" aria-labelledby="reheadingthree" data-parent="#accordionExample">
                              <div class="card-body">
                                  While we cannot guarantee a specific timeline for
                                  clients (since everyone has a unique situation),
                                  most of our previous clients have reported
                                  experiencing shifts immediately after each
                                  session. Past clients have said they’ve had
                                  numerous epiphanies after closely adhering to the
                                  coach’s instruction after the session
                              </div>
                            </div>
                        </div>
        
                        <div class="card">
                            <div class="card-header read-responce" id="reheadingfour">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#responcefour" aria-expanded="true" aria-controls="responcefour">
                                    What year did I know them?
                                </button>
                                <span class="responce-date">25 JUN</span>
                            </div>
                            <div id="responcefour" class="collapse" aria-labelledby="reheadingfour" data-parent="#accordionExample">
                              <div class="card-body">
                                  While we cannot guarantee a specific timeline for
                                  clients (since everyone has a unique situation),
                                  most of our previous clients have reported
                                  experiencing shifts immediately after each
                                  session. Past clients have said they’ve had
                                  numerous epiphanies after closely adhering to the
                                  coach’s instruction after the session
                              </div>
                            </div>
                        </div>
        
        
        
                    </div>
                
                
                </div>
            </div>
            </div>
        </div>
        
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\rajeevjadhav\resources\views/customer/my_response.blade.php ENDPATH**/ ?>