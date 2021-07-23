@extends('admin_master')
@section('title', 'Homepage')
@section('content')



<!--begin::Container-->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Card-->
			<div class="card card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">Add Questions</h3>
					<div class="card-toolbar">
						<div class="example-tools justify-content-center">
							<a href="{{url('admin/serviceType')}}" class="btn btn-outline-info">Back</a>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="form" action="{{url('admin/add-serviceType')}}" method="post">
					@csrf
					<div class="card-body">
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif
						<div class="form-group">
							<label>Question Type<span class="text-danger">*</span></label>
							<select class="form-control form-control-solid" name="coach_id">
								<option value="">--Select Type--</option>
									@foreach($roles as $role)													
								    <option value="{{ $role->id }}">{{ $role->name }} Type</option>
									@endforeach
								<!--<option value="2">Business Type</option>-->
								<!--<option value="1">Spiritual Type</option>-->
							

							</select>
							@error('coach_id')
							<span class="text-danger"> {{ 'Required' }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="exampleTextarea">Questions<span class="text-danger">*</span></label>
							<textarea class="form-control form-control-solid" rows="3" name="ques"></textarea>
							@error('ques')
							<span class="text-danger"> {{ 'Required' }}</span>
							@enderror
						</div>
						
						
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




@endsection