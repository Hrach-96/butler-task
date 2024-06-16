<div class="col-3">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),urlencode(__('msg.profille-addresses-route'))) == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			{{ __('msg.profille-addresses') }}
			</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),urlencode(__('msg.bookings-route'))) == 1 ? "active" : "" }}" href="{{route('bookings',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/bookings.png')}}" class='mr-2' alt="Bookings"/>
			{{ __('msg.bookings') }}
		</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),urlencode(__('msg.credits-route'))) == 1 ? "active" : "" }}" href="{{route('credits',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/credits.png')}}" class='mr-2' alt="Credits"/>
			{{ __('msg.credits') }}
		</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),urlencode(__('msg.referrals-route'))) == 1 ? "active" : "" }}" href="{{route('referrals',['lang'=>getLanguage()])}}" >
	    	<img src="{{url('assets/images/icons/referrals.png')}}" class='mr-2' alt="Referrals"/>
			{{ __('msg.referrals') }}
		</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),urlencode(__('msg.payment-methods-route'))) == 1 ? "active" : "" }}" href="{{route('payment.method',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/payment-methods.png')}}" class='mr-2' alt="Payment methods"/>
			{{ __('msg.payment_methods') }}
		</a>
	</div>
</div>