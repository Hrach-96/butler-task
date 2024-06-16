<div class='container containerHome headerImage'>
	<div class='row pt-3 headerAnimation pb-2'>
		<div class='col-md-3 text-end'>
	        <a href='{{route('main',['lang'=>getLanguage()])}}'>
	            <img class='header-logo-pc' src="{{url('assets/images/main-logo.png')}}" alt="img"/>
	        </a>
	    </div>
	    <div class='col-md-6'>
	        <input type='text' class='form-control inputBackgroundStyle mt-2' placeholder="Maison Matisse">
	    </div>
	    <div class='col-md-1 text-center'>
	        <img data-toggle="modal" data-target="#changeLanguageModal" src="{{url('assets/images/flags/' . getLanguage() . '.png')}}" class='rounded-circle customStyleCursor flagLanguage'>
	        <h6 data-toggle="modal" data-target="#changeLanguageModal" class='customStyleCursor' >{{otherLanguagesNames()}}</h6>
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
	                        <a class="dropdown-item" href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	                            {{__('msg.profille-addresses')}}
	                        </a>
	                        <a class="dropdown-item" href="{{route('bookings',['lang'=>getLanguage()])}}">
	                            {{__('msg.bookings')}}
	                        </a>
	                        <a class="dropdown-item" href="{{route('credits',['lang'=>getLanguage()])}}">
	                            {{__('msg.credits')}}
	                        </a>
	                        <a class="dropdown-item" href="{{route('referrals',['lang'=>getLanguage()])}}">
	                            {{__('msg.referrals')}}
	                        </a>
	                        <a class="dropdown-item" href="{{route('payment.method',['lang'=>getLanguage()])}}">
	                            {{__('msg.payment-methods')}}
	                        </a>
	                        <div class="dropdown-divider"></div>
	                        <a class="dropdown-item" href="{{route('logout',['lang'=>getLanguage()])}}">
	                            {{__('msg.logout')}}
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
	                <button class='btn btnStyleDes'>{{ __('msg.general-cleaning') }}</button>
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
