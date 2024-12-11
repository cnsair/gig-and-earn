<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ config('app.name', 'GigAndEarn') }} - Find Your Gig</title>
	<meta charset="utf-8">
	<meta name="description" content="GigAndEarn, your go-to platform for finding job opportunities and upskilling for a brighter future. Founded in June 2024. We are dedicated to bridging the gap between job seekers and employers, while empowering individuals to enhance their skills through our carefully curated courses.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.ico') }}">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>

	<!-- header component -->
	<x-header-home />

		@yield('content')

	<!-- footer component -->
	<x-footer-home />

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('assets/js/google-map.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>