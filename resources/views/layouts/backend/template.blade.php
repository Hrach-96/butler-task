<!DOCTYPE html>
<html>
<head>
	<title>Butler Task</title>
	@include('layouts.main.styles')
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	@if(isMobile() == 1)
	    @include('layouts.backend.header_mobile')
	@else
	    @include('layouts.backend.header_pc')
	@endif
		@yield('content')
		@include('modals.login')
		@include('modals.signup')
		@include('modals.change_language')
	@if(isMobile() == 1)
		@include('layouts.main.footer_mobile')
	@else
		@include('layouts.main.footer_pc')
	@endif
</body>
	@include('layouts.main.scripts')
</html>