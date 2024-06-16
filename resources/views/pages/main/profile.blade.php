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
		      	<p class='textBlackNorm'>{{__('msg.personal-information')}}</p>
		      	<div class='col-12'>
		      		<div class='row backgroundCustomLightTheme roundedCustom16 p-2 pb-0'>
		      			<div class='col-md-1 col-xs-12 col-sm-12 pt-1'>
		      				<div class="rounded-circle pt-3 userProfileImageCircle text-center align-middle text-white h5">JB</div>
		      			</div>
		      			<div class='col-9'>
		      				<span class='textBlackNorm h5'>Name</span><br>
		      				<span class='textColorTheme font-weight-500'>Add profile picture</span>
		      			</div>
		      		</div>
		      	</div>
	      		<form class='pb-4'>
	      			<div class='row mt-3'>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="Name">
		      			</div>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="Last Name">
		      			</div>
		      		</div>
	      			<div class='row mt-2'>
		      			<div class='col-6'>
		      				<input type='email' class='form-control inputBackground' placeholder="Email address">
		      			</div>
		      			<div class='col-6'>
		      				<input type='text' class='form-control inputBackground' placeholder="Date of birth">
		      			</div>
	      			</div>
	      			<div class='row mt-2'>
	      				<div class='col-12'>
	      					<input type='text' class='form-control inputBackground' placeholder="0000 0000 0000">
	      				</div>
	      			</div>
	      			<div class='row col-12 pl-1 mt-2'>
      					<label>Gender</label>
	      				<div class='col-md-1 col-xs-12 col-sm-12 mr-2'>
		      				<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="maleRadio">
							  <label class="form-check-label" for="maleRadio">
							    {{__('msg.male')}}
							  </label>
							</div>
	      				</div>
	      				<div class='col-md-1 col-xs-12 col-sm-12'>
		      				<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="femaleRadio">
							  <label class="form-check-label" for="femaleRadio">
							    {{__('msg.female')}}
							  </label>
							</div>
	      				</div>
	      			</div>
	      			<div class='row pl-3 pr-3'>
	      				<button type="submit" class="btn mt-3 text-white backgroundStyleColor w-100">
	                        Apply Changes
	                    </button>
	      			</div>
	      		</form>
		  </div>
		  <div class="col-md-9 col-xs-12 col-sm-12 offset-md-3 mt-3 pt-4 pb-2 border roundedCustom16">
	      		<p class='textBlackNorm'>My addresses</p>
	      		<div class='row pl-3 pr-3'>
	      			<div class='myAddressesIt p-3 roundedCustom16'>
	      				<div class="form-check float-left">
						  <input checked class="form-check-input" type="radio" name="flexRadioDefault" id="myaddress">
						  <label class="form-check-label" for="myaddress">
						    Avenue de la Costa, Monte-Carlo<br>
						    <span class='text-muted'>Zip code - 9800
						  </label>
						</div>
	      				<div class="float-right">
            				<img src="{{url('assets/images/icons/edit.png')}}" alt="edit"/>
            				<img src="{{url('assets/images/icons/trash.png')}}" alt="delete"/>
	      				</div>
	      			</div>
	      			<div class='myAddressesIt p-3 roundedCustom16 mt-2'>
	      				<div class="form-check float-left">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="myaddress">
						  <label class="form-check-label" for="myaddress">
						    Avenue de la Costa, Monte-Carlo<br>
						    <span class='text-muted'>Zip code - 9800
						  </label>
						</div>
	      			</div>
	      		</div>
	      		<div class='row pl-3 pr-3'>
      				<button type="submit" data-toggle="modal" data-target="#addNewAddressModal" class="btn mt-3 text-white backgroundStyleColor w-100">
                        Add New Address
                    </button>
      			</div>
		  </div>
		</div>
	</div>
	@include('modals.add_new_address')
@endsection