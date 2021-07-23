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
					<h3 class="card-title">Edit Pakages</h3>
					<div class="card-toolbar">
						<div class="example-tools justify-content-center">
							<a  class="btn btn-outline-info" href="{{url('admin/package')}}">Back</a>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="form" action="{{url('admin/edit-package')}}" method="post">
					@csrf
					@if($packg)
					@foreach($packg as $pack)
					<div class="card-body">
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif
						<div class="form-group">
							<input type="hidden" id="pid" name="pid" class="form-control form-control-lg" placeholder="Add Amount" value="{{$pack->id}}">
							<label> Package For<span class="text-danger">*</span></label>
							<select class="form-control form-control-solid" name="pckg_for">

								@if($pack->packg_for==1)
								<option value="1">Call </option>
								@elseif($pack->packg_for==2)
								<option value="2">Message</option>
								@endif

							</select>
							@error('pckg_for')
							<span class="text-danger"> {{ 'Required' }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="exampleTextarea">Amount<span class="text-danger">*</span></label>
							<input type="text" id="amount" name="amount" class="form-control form-control-lg" placeholder="Add Amount" value="{{$pack->price}}">
							@error('amount')
							<span class="text-danger"> {{ 'Required'}}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="exampleTextarea">Package<span class="text-danger">*</span></label>
							<textarea class="form-control form-control-solid" rows="3" name="packg_name">{{$pack->name}}</textarea>
							@error('packg_name')
							<span class="text-danger"> {{ 'Required'}}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="exampleTextarea">Description
							</label>
							<textarea class="form-control form-control-solid" rows="3" name="descp">{{$pack->description}}</textarea>

						</div>


						<!--end: Code-->
					</div>
					@endforeach
					@endif
					<div class="card-footer">
						<button type="submit" class="btn btn-primary mr-2">Submit</button>
						<!--<button type="reset" class="btn btn-secondary">Cancel</button>-->
					</div>
				</form>
				<!--end::Form-->
			</div>
			<!--end::Card-->
		</div>
	</div>
</div>




@endsection