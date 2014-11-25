<!DOCTYPE html>
<html>
	<head>
		<title>{{$title}}</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{HTML::style('assets/stylesheets/bootstrap.min.css');}}
		{{HTML::style('assets/stylesheets/neumo.css');}}
		{{HTML::style('assets/stylesheets/bootstrap-responsive.css');}}
		<link rel="icon"   type="image/png"  href="assets/images/favicon.ico">

		<!-- Fonts Start -->
	    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
	    <!-- Fonts Ends -->
		@yield('header')
	</head>
	<body class='recolhap-intro'>
		<div class='hide'  id='base'>{{URL::to('/')}}</div>
		<!-- 
		| header above
		|
		|
		|
		|
		| -->
		@yield('content')
		<!-- 
		|
		|
		|
		|
		| Footer below
		| -->
		
		 
	</body>
	{{HTML::script('assets/js/jquery.min.js');}}
	{{HTML::script('assets/js/bootstrap.min.js');}}
	@yield('scripts')
</html>

