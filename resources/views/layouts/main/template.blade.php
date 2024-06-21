<!DOCTYPE html>
<html>
<head>
	<title>Butler Task</title>
	@include('layouts.main.styles')
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name='csrf-token' content="{{csrf_token()}}" >
</head>
<body>
	@if(isMobile() == 1)
	    @include('layouts.main.header_mobile')
	@else
	    @include('layouts.main.header_pc')
	@endif
		@yield('content')
		@include('modals.change_language')
		@include('modals.login')
		@include('modals.signup')
	@if(isMobile() == 1)
		@include('layouts.main.footer_mobile')
	@else
		@include('layouts.main.footer_pc')
	@endif
</body>
	@include('layouts.main.scripts')
</html>