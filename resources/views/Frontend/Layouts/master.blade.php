<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') </title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('Frontend/assets/dest/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Frontend/assets/dest/vendors/colorbox/example3/colorbox.css') }}">
	<link rel="stylesheet" href="{{ asset('Frontend/assets/dest/rs-plugin/css/settings.css') }}">
	<link rel="stylesheet" href="{{ asset('Frontend/assets/dest/rs-plugin/css/responsive.css') }}">
	<link rel="stylesheet" title="style" href="{{ asset('Frontend/assets/dest/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('Frontend/assets/dest/css/animate.css') }}">
	<link rel="stylesheet" title="style" href="{{ asset('Frontend/assets/dest/css/base.css') }}">
</head>
<body>

	<!-- #header -->
	@include('Frontend.Layouts.header')
	@yield('content')

	<!-- #footer -->
	@include('Frontend.Layouts.footer')
	 <!-- .copyright -->
	 


	<!-- include js files -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="{{ asset('Frontend/assets/dest/js/jquery.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('Frontend/assets/dest/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/vendors/animo/Animo.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/vendors/dug/dug.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/js/scripts.min.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('Frontend/assets/dest/js/wow.min.js') }}"></script>
	<!--customjs-->
	<script src="{{ asset('Frontend/assets/dest/js/custom2.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
	
<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	});

	$(document).ready(function() {
		toastr.options.timeOut = 10000;
		@if (session()->has('error'))
			toastr.error('{{ Session::get('error') }}');
		@elseif(session()->has('success'))
			toastr.success('{{ Session::get('success') }}');
		@endif
	});
</script>
</body>
</html>
