@include('includes.top')
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
            @include('includes.aside')
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('includes.header')
					<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->						
							@yield('content')
							<!--end::Container-->
						</div>	
					<!-- </div>		 -->
                    @include('includes.footer')
				</div>
			</div>
		</div>
@include('includes.bottom')