<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<div class="navbar-fixed">
		@include('includes.navbar')
	</div>
	
	@include('includes.sidebar')
	
	@yield('content')

	@include('includes.scripts')
</body>
</html>