<div class='container containerHome headerImage'>
	<div class='row pt-3 headerAnimation pb-2'>
		<div class='col-md-3 text-end'>
	        <a href='/'>
	            <img class='header-logo-pc' src="{{url('assets/images/main-logo.png')}}" alt="img"/>
	        </a>
	    </div>
	    <div class='col-md-6'>
	        <input type='text' class='form-control inputBackgroundStyle mt-2' placeholder="Maison Matisse">
	    </div>
	    <div class='col-md-1 text-center'>
	        <img src="{{url('assets/images/flags/france.png')}}" class='rounded-circle flagLanguage'>
	        <h6>France / English</h6>
	    </div>
	    <div class='col-md-2 pt-1'>
	        @if (Auth::check())
	            <ul class='headerUserNavbar'>
	               <li class="nav-item dropdown no-arrow">
	                    <a class="nav-link dropdown-toggle btnStyleDes w-100" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <img class="img-profile rounded-circle mr-3" style='width:35px' src="{{url('assets/images/icons/avatar.png')}}">
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
	           <button class='loginBtnHeader btnStyleDes btn mr-2 pt-1 pb-1 mt-2' data-toggle="modal" data-target="#loginModal">Log In / Sign Up</button>
	        @endif
	    </div>
    
	    <div class='col-md-6 offset-3 mt-2'>
		    <div class="stonehenge">
	            <div>
	                <button class='btn btnStyleDes'>General Cleaning</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Beauty Salon</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Home Essentials</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Medical</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Other Services</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>General Cleaning</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Beauty Salon</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Home Essentials</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Medical</button>
	            </div>
	            <div>
	                <button class='btn btnStyleDes'>Other Services</button>
	            </div>
	        </div>
	    </div>
	    <div class='col-md-4 offset-4 mt-4'>
	    	<input type='text' class='form-control inputBackgroundStyle' placeholder="Search">
	    </div>
    </div>
	<div class='row pt-3 firstServiceSlider'>
        <div class='col-md-8 offset-2 headerSlider'>
            <div class='col-md-12'>
                <h3 class='textBlack'>General Cleaning</h3>
            </div>
            <div class="stonehenge">
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
                <div class='text-center'>
                    <img src="{{url('assets/images/service.png')}}" alt="img"/>
                    <h5 class='textBlack'>General Cleaning</h5>
                </div>
            </div>
        </div>
	</div>
</div>
