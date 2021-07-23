@extends('admin_master')
@section('title', 'Homepage')
@section('content')


<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
								<div class="col-lg-12">
			<!--begin::Card-->
			@if($question)
					@foreach($question as $que)
			<div class="card card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">Edit Questions</h3>
					<div class="card-toolbar">
						<div class="example-tools justify-content-center">
						<a  class="btn btn-outline-info" href="{{url('admin/show_question/'.$que->coach_id)}}">Back</a>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="form" action="{{url('admin/edit-questions')}}" method="post">
				    @csrf
					
					<div class="card-body">	
						@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
						@endif
						<div class="form-group">
						    	<input type="hidden" id="pid" name="pid" class="form-control form-control-lg" placeholder="Add Amount" value="{{$que->id}}">
							<label>Coach</label>
							<select class="form-control form-control-solid" name="coach_id">
								@if($que->coach_id==2)
								<option value="2">Business Coach</option>
								@elseif($que->coach_id==1)
								<option value="1">Spiritual Coach</option>
                                 @endif
							</select>
							@error('coach')
							<span class="text-danger"> {{ 'Required' }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="exampleTextarea">Questions</label>
							<textarea class="form-control form-control-solid" rows="3" name="ques">{{$que->ques}}</textarea>
							@error('ques')
							<span class="text-danger"> {{ 'Required' }}</span>
							@enderror
						</div>
						
					</div>
					@endforeach
					@endif
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