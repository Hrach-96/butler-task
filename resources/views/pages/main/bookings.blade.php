@extends('layouts.backend.template')
@section('content')
	<div class='container mb-5 mt-5'>
		<h3 class='mt-5'>Account</h3>
		<div class="row mt-5">
		    @if(isMobile() == 1)
			@else
		    	@include('layouts.backend.user.left-sidebar')
			@endif
		  <div class="col-md-9 col-xs-12 col-sm-12 border roundedCustom16 pb-3">
		    <div class="tab-content">
		      	<ul class="nav nav-tabs mt-4 topNavbarTabs" role="tablist">
				  <li class="nav-item" role="presentation">
				    <button class="nav-link m-1 font-weight-500 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">{{__('msg.upcoming')}}</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link m-1 font-weight-500" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">{{__('msg.past')}}</button>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<p class='text-muted mt-2'>{{__('msg.last')}} 12 {{__('msg.hours')}} <img src="{{url('assets/images/icons/information.png')}}" alt="information"/></p>
				  	<div class='row pl-3 pr-3 customStyleCursor' data-toggle="modal" data-target="#bookingsInfo" >
				  		<div class='col-md-3 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<div class='row pl-3 pr-3 customStyleCursor mt-3' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<div class='row pl-3 pr-3 customStyleCursor mt-3' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block-2.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<p class='text-muted mt-3'>More than 12 hours <img src="{{url('assets/images/icons/information.png')}}" alt="information"/></p>
				  	<div class='row pl-3 pr-3 customStyleCursor' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<div class='row pl-3 pr-3 customStyleCursor mt-3' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<div class='row pl-3 pr-3 customStyleCursor mt-3' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block-2.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>

				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<div class='row pl-3 pr-3 customStyleCursor' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block-3.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>Deep clean</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Have your studio looking brand new with deep and thorough cleaning in 180 minutes</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<div class='row pl-3 pr-3 customStyleCursor mt-3' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block-4.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  	<div class='row pl-3 pr-3 customStyleCursor mt-3' data-toggle="modal" data-target="#bookingsInfo">
				  		<div class='col-3 pl-0 backgroundGreyC'>
				  			<img src="{{url('assets/images/left-block-4.png')}}"/>
				  		</div>
				  		<div class='col-md-9 col-xs-12 col-sm-12 pl-0 backgroundGreyC'>
				  			<p class='textBlack mt-3 mb-1'>V-Day combos</p>
				  			<p class='text-muted h5 font-weight-300 mb-4'>Look and feel glamorous with a new set of nails and a voluminous blowout!</p>
				  			<span class='themeColorBadge p-2 roundedCustom7'>24.03.2024</span>
				  			<span class='themeColorBadge p-2 roundedCustom7'>10:00 - 11:00</span>
				  		</div>
				  	</div>
				  </div>
				</div>
		      <!-- <div class="tab-pane fade" id="v-credits-tab" role="tabpanel" aria-labelledby="credits-tab">Messages</div>
		      <div class="tab-pane fade" id="v-referrals-tab" role="tabpanel" aria-labelledby="referrals-tab">Settings</div>
		      <div class="tab-pane fade" id="v-payment-methods" role="tabpanel" aria-labelledby="payment-methods">payment-methods</div> -->
		    </div>
		  </div>
		</div>
	</div>	
	@include('modals.bookings_info')
@endsection