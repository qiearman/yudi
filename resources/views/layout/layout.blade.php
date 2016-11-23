<!doctype "html">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<title>@section('title') Yudi @show</title>
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
	<link rel="stylesheet" href="{{ asset('css/twbs/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('scripts/calendar/zabuto_calendar.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('scripts/jQCloud/dist/jqcloud.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
	<div class="container">
        
		@include('layout.header-section')
		
		<!-- <Content -->
		<div class="row content">
			<div class="col-sm-8">
                @yield('content')
				
			</div>
			<div class="col-sm-4">
				@include('layout.sidebar-section')
			</div>
		</div>
		<!-- Content /> -->
		
		@include('layout.footer-section')
	</div>
	
	
	<script src="{{ asset('scripts/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('css/twbs/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('scripts/calendar/zabuto_calendar.min.js') }}"></script>
	<script src="{{ asset('scripts/jQCloud/dist/jqcloud.min.js') }}"></script>
	<script src="{{ asset('scripts/script.js') }}"></script>
    
<body>
</html>