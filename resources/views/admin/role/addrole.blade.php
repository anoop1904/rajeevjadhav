@extends('admin_master')
@section('title', 'Homepage')
@section('content')


<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Add Role</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
													<!--<button type="button" class="btn btn-outline-info">Back</button>-->
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" action="{{url('admin/add_role')}}" method="post">
												@csrf
												<div class="card-body">
                                                <div class="form-group">
														<label>Role</label>
														<input type="text" id="role" name="role" class="form-control form-control-lg" placeholder="Add Role">
													</div>
                                             
																	
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<button type="submit" class="btn btn-primary mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
                                </div>
                            </div>
</div>



@endsection