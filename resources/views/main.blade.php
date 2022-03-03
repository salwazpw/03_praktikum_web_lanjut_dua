<!DOCTYPE html>
<html lang="en">
<head>
	<title>Onetel Bootstrap Template</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
OneTel Template
http://www.templatemo.com/tm-468-onetel
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/nivo-lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('css/nivo_themes/default/default.css')}}">
	<link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
	
<!-- navigation -->
@include('navbar')
		

@yield('content')	

<!-- footer section -->
@include('footer')

<!-- javascript js -->	
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>	
<script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>