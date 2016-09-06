<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>It is phpgirls</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog for phpgirls">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">
       <!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/freelancer.css') }}">	


    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">	
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
    	

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

	<style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->



  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<script type="text/javascript">
	</script>  	
</head>
<body>
	<!-- Navigation Menu -->
	
	<!-- @yield('header') -->

	@yield('content')


        <!-- jQuery -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>

    <!-- Contact Form JavaScript -->
	<script type="text/javascript" src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/contact_me.js') }}"></script>
    <!-- Theme JavaScript -->
	<script type="text/javascript" src="{{ URL::asset('js/freelancer.js') }}"></script>

</body>
</html>