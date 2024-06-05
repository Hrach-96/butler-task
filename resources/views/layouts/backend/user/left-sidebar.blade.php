<div class="col-3">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),"profile-addresses") == 1 ? "active" : "" }}"  href="{{route('profile.addresses')}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
	  		Profile & Addresses
			</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),"bookings") == 1 ? "active" : "" }}" href="{{route('bookings')}}">
	    	<img src="{{url('assets/images/icons/bookings.png')}}" class='mr-2' alt="Bookings"/>
			Bookings
		</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),"credits") == 1 ? "active" : "" }}" href="{{route('credits')}}">
	    	<img src="{{url('assets/images/icons/credits.png')}}" class='mr-2' alt="Credits"/>
			Credits
		</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),"referrals") == 1 ? "active" : "" }}" href="{{route('referrals')}}" >
	    	<img src="{{url('assets/images/icons/referrals.png')}}" class='mr-2' alt="Referrals"/>
			Referrals
		</a>
		<a class="nav-link textBlackNorm backTabTStyle {{ (Str::contains(url()->current(),"add-new-card") == 1 || Str::contains(url()->current(),"payment-method") == 1 ) ? "active" : "" }}" href="{{route('payment.method')}}">
	    	<img src="{{url('assets/images/icons/payment-methods.png')}}" class='mr-2' alt="Payment methods"/>
			Payment methods
		</a>
	</div>
</div>