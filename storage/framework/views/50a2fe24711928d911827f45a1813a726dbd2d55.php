
<div class="modal fade" id="registraion-modal" tabindex="-1" role="dialog" aria-labelledby="registraion-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="pt-4 pr-4 pr-md-4 pl-4 pl-lg-2">
                <h4 class="mb-3">Please below information</h4>
                <form id="modelForm">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="d-md-flex">
                                    <div class="mr-2">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="customertype" id="signup-new" value="new-signup" checked>
                                            <label class="custom-control-label" for="signup-new">
                                                New Registration
                                            </label>
                                          </div>
                                    </div>
                                    <div class="ml-0 ml-md-2">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="customertype" id="asaguest" value="guest">
                                            <label class="custom-control-label" for="asaguest">
                                                Continue as a Guest
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="validation-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name"/>
                                <span id="fullname"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
                               <span id="email"></span>                                                         
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter mobile no."/>
                                <span id="phone"></span>
                            </div>
                        </div>
                    </div>

                    <div id="as-a-guest">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password"/>
                                <span id="password"></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password"/>
                                <span id="password_confirmation"></span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="submit-btn text-center">
                    
                    <button class="btn btn-primary" type="button" onclick="customerRegister()">Continue</button>
                </div>
                
                </form>
                </div>
        </div>
      </div>
    </div>
  </div>

<!-- credit Modal -->
<div class="modal fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="credit-modal" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

              <p>You Have 0 Credits</p>

            <a href="payment-thankyou.html" class="btn btn-primary">Please make Payment</a>
        </div>
      </div>
    </div>
  </div>
<?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/include/schedule_model.blade.php ENDPATH**/ ?>