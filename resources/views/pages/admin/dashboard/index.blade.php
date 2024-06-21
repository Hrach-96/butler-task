@extends('layouts.backend.template')
@section('content')
	<div class='container mb-5 mt-5'>
		<h3 class='mt-5'>Account</h3>
		<div class="row mt-5">
		   @if(isMobile() == 1)
			@else
		    	@include('layouts.backend.admin.left-sidebar')
			@endif
		  <div class="col-md-9 col-xs-12 col-sm-12 border pt-3 roundedCustom16 pb-4">
		  	Dashboard
		  </div>
		</div>
	</div>	
	@include('modals.store_credit_plan')
@endsection