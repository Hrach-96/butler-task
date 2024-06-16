<div class='container containerHome'>
	<div class='row pt-3'>
		<div class='col-md-3 text-end'>
	        <a href='{{route('main',['lang'=>getLanguage()])}}'>
	            <img class='header-logo-pc' src="{{url('assets/images/main-logo.png')}}" alt="img"/>
	        </a>
	    </div>
	    <div class='col-md-6'>
	        <input type='text' class='form-control inputBackgroundStyleB mt-2' placeholder="Maison Matisse">
	    </div>
	    <div class='col-md-1 text-center'>
	        <img data-toggle="modal" data-target="#changeLanguageModal" src="{{url('assets/images/flags/' . getLanguage() . '.png')}}" class='rounded-circle customStyleCursor flagLanguage'>
	        <h6 data-toggle="modal" class='customStyleCursor' data-target="#changeLanguageModal">{{otherLanguagesNames()}}</h6>
	    </div>
	    <div class='col-md-2 pt-1'>
	        @if (Auth::check())
	            <ul class='headerUserNavbar'>
	               <li class="nav-item dropdown no-arrow">
	                    <a class="nav-link dropdown-toggle btnStyleDesB w-100" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <img class="img-profile rounded-circle mr-3" style='width:35px' src="{{url('assets/images/icons/avatar.png')}}">
	                        <span class="textBlack"> John</span>
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
	</div>
</div>
