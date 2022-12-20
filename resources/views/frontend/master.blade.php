
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Electro - HTML Ecommerce Template</title>
		
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/css/style.css')}}"/>


    </head>
	<body>
		<!-- HEADER -->
		@include('frontend.fixed.header')
		<!-- /HEADER -->

		{{-- body --}}
		@yield('content')
		{{-- /body --}}

		<!-- FOOTER -->
		@include('frontend.fixed.footer')
		<!-- /FOOTER -->

		{{-- cdn --}}
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
		<!-- jQuery Plugins -->
		<script src="{{url('/frontend/js/jquery.min.js')}}"></script>
		<script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{url('/frontend/js/slick.min.js')}}"></script>
		<script src="{{url('/frontend/js/nouislider.min.js')}}"></script>
		<script src="{{url('/frontend/js/jquery.zoom.min.js')}}"></script>
		<script src="{{url('/frontend/js/main.js')}}"></script>

	</body>
</html>
