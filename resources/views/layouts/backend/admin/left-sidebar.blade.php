<div class="col-3">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'dashboard') == 1 ? "active" : "" }}"  href="{{route('dashboard')}}">
	    	<img src="{{url('assets/images/icons/dashboard.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Dashboard
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'orders') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Orders
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'products') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/products.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Products
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'services') == 1 ? "active" : "" }}"  href="{{route('service.main.category.list')}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Services
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'reports') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Reports
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'user-managment') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			User Managment
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'settings') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Settings
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'customer-support') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/profile.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Customer Support
		</a>
	  	<a class="nav-link textBlackNorm backTabTStyle {{ Str::contains(url()->current(),'invoice') == 1 ? "active" : "" }}"  href="{{route('profile.addresses',['lang'=>getLanguage()])}}">
	    	<img src="{{url('assets/images/icons/invoice.png')}}" class='mr-2' alt="Profile & Addresses"/>
			Invoice
		</a>
	</div>
</div>