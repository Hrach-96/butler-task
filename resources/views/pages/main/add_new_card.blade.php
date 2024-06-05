@extends('layouts.backend.template')
@section('content')
	<div class='container mb-5 mt-5'>
		<h3 class='mt-5'>Account</h3>
		<div class="row mt-5">
		   @if(isMobile() == 1)
			@else
		    	@include('layouts.backend.user.left-sidebar')
			@endif
		  <div class="col-md-9 col-xs-12 col-sm-12 border pt-4 pb-2 roundedCustom16">
		      	<p class='textBlack mb-0'>Add new card</p>
		      	<span class='textBlackNorm font-weight-300'>Card details</span>
	      		<form class='pb-4'>
	      			<div class='row mt-3'>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="Card number">
		      			</div>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="Holders name">
		      			</div>
		      		</div>
	      			<div class='row mt-2'>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="Exp. Date (MM/YY)">
		      			</div>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="CVV Number">
		      			</div>
	      				<span class='text-muted mt-2 ml-1'> <img class='mr-1' src="{{url('assets/images/icons/secure.png')}}"> Secure and Encrypted</span>
	      			</div>
                    
	      			<div class='row pl-3 pr-3'>
	      				<button type="submit" class="btn mt-3 text-white backgroundStyleColor w-100">
	                        Save Card
	                    </button>
	      			</div>
	      		</form>
		  </div>
		</div>
	</div>
@endsection