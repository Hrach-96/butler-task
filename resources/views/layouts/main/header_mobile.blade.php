<div class='container containerHomeMob headerImageMob'>
	<div class='row pt-3'>
		<div class='col-3'>
            <img class='header-hamburger-icon' src="{{url('assets/images/icons/hamburger-icon.png')}}" alt="img"/>
		</div>
		<div class='col-6 text-center'>
			<a href="/">
            	<img class='header-logo-mob' src="{{url('assets/images/main-logo.png')}}" alt="img"/>
			</a>
		</div>
		<div class='col-3 text-end text-white'>
			@if (Auth::check())
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
        <div class='col-md-12 mt-5'>
            <h3 class='textBlack'>Beauty salon</h3>
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