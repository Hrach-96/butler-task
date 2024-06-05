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
		    <div class='container'>
	            <div class='row border-bottom pb-2'>
	                <div class='col-5 pl-0 textBlackNorm'>Your store credit</div>
	                <div class='col-7 pr-0 text-end themeColorHardGreen font-weight-500'>
	                    <img class='p-2 rounded-circle roundedCircleThemeColor' src="{{url('assets/images/icons/euro.png')}}">
	                    113.68 Eur
	                </div>
	            </div>
	            <div class='row backgroundGreyC mt-2 p-2 pb-3 roundedCustom16'>
	                <span class='textBlack'>Get free credits</span>
	                <span class='textBlackNorm'>Spread the link and treat your friend to a 5 euros discount on their booking! When they use it, you’ll score an automatic 5 euros credit in your account. It’s a triple win for everyone!</span>
	                <div class='col-md-3 col-xs-12 col-sm-12 mt-4'>
				  		<span class='themeColorBadge p-2 roundedCustom7'><img src="{{url('assets/images/icons/time.png')}}"> Expires on 24.03</span>
	                </div>
	                <div class='col-md-9 col-xs-12 col-sm-12 text-end mt-4 themeColorHardGreen'>
	                	120.00 Eur
	                </div>
	            </div>
		  	</div>
		  </div>
		</div>
	</div>	
	@include('modals.store_credit_plan')
@endsection