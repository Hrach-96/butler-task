@extends('layouts.backend.template')
@section('content')
	<div class='container mb-5 mt-5'>
		<h3 class='mt-5'>Account</h3>
		<div class="row mt-5">
		   @if(isMobile() == 1)
			@else
		    	@include('layouts.backend.user.left-sidebar')
			@endif
		  <div class="col-md-9 col-xs-12 col-sm-12 border pt-3 roundedCustom16 pb-4">
	      	<p class='textBlackNorm'>Choose payment card</p>
		    <div class='container'>
	            <!-- <div class='col-6 offset-3 text-center mt-5'>
	            	You don’t have any card added yet.
	            </div> -->
	            <div class='row backgroundGreyC pt-3 pb-3 roundedCustom16'>
	                <div class='col-4'>
						<input class="form-check-input mt-1 ml-1" type="radio" name="flexRadioDefault" id="maleRadio">
				  		<img class='cardStyle ml-4' src="{{url('assets/images/icons/mastercard.png')}}"> 4395
	                </div>
	            </div>
	            <div class='row backgroundGreyC pt-3 pb-3 mt-2 roundedCustom16'>
	                <div class='col-4'>
						<input class="form-check-input mt-1 ml-1" type="radio" name="flexRadioDefault" id="maleRadio">
				  		<img class='cardStyle ml-4' src="{{url('assets/images/icons/mastercard.png')}}"> 4395
	                </div>
	                <div class='col-8 text-end themeColorHardGreen'>
	                    <img src="{{url('assets/images/icons/trash.png')}}">
	                </div>
	            </div>
	            <div class='col-md-2 col-xs-12 col-sm-12 offset-md-5 text-center'>
	            	<a href='{{route('add.new.card')}}' class="btn mt-3 text-white backgroundStyleColor w-100">
                        Add a card
                    </a>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>	
@endsection