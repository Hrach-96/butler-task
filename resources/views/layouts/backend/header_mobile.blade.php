<div class='container containerHomeMob'>
	<div class='row pt-3'>
		<div class='col-2'>
            <img class='header-hamburger-icon' src="{{url('assets/images/icons/hamburger-black.png')}}" alt="img"/>
		</div>
		<div class='col-6 pl-0 text-center'>
			<a href="/">
            	<img class='header-logo-mob' src="{{url('assets/images/main-logo.png')}}" alt="img"/>
			</a>
		</div>
		<div class='col-4 pl-0 text-white'>
			@if (Auth::check())
				<ul class='headerUserNavbarMob pl-0'>
	               <li class="nav-item dropdown no-arrow">
	                    <a class="nav-link dropdown-toggle btnStyleDesB w-100" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <img class="img-profile rounded-circle mr-2" style='width:35px' src="{{url('assets/images/icons/avatar.png')}}">
	                        <span class="mr-2 textBlack"> John</span>
	                    </a>
	                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
	                        aria-labelledby="userDropdown">
	                        <a class="dropdown-item" href="{{route('profile.addresses')}}">
	                            Profile & Addresses
	                        </a>
	                        <a class="dropdown-item" href="{{route('bookings')}}">
	                            Bookings
	                        </a>
	                        <a class="dropdown-item" href="{{route('credits')}}">
	                            Credits
	                        </a>
	                        <a class="dropdown-item" href="{{route('referrals')}}">
	                            Referrals
	                        </a>
	                        <a class="dropdown-item" href="{{route('payment.method')}}">
	                            Your Payment Methods
	                        </a>
	                        <div class="dropdown-divider"></div>
	                        <a class="dropdown-item" href="{{route('logout')}}">
	                            Logout
	                        </a>
	                    </div>
	                </li>
	            </ul>
	        @else
				<span data-toggle="modal" data-target="#loginModal">log in</span>
	        @endif
		</div>
		<div class='form-group mt-4'>
			<input type='text' class='form-control' placeholder="Maison Matisse">
		</div>
		<div class='form-group'>
			<input type='text' class='form-control' placeholder="Maison Matisse">
		</div>
		<div class="stonehenge stonehengeMobSlider">
            <div>
                <button class='btn btnStyleDesB'>General Cleaning</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Beauty Salon</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Home Essentials</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Medical</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Other Services</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>General Cleaning</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Beauty Salon</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Home Essentials</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Medical</button>
            </div>
            <div>
                <button class='btn btnStyleDesB'>Other Services</button>
            </div>
        </div>
	</div>
</div>