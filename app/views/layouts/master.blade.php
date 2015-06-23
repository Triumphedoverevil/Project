<!doctype html> 
<html lang="en">

<head>
	<title></title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	
  	{{ HTML::script('../js/jquery-2.1.4.js') }}

	{{ HTML::script('../js/bootstrap.js') }}
 	
 	{{ HTML::script('../js/bootstrap-datepicker.js') }}

 	{{ HTML::style('../css/bootstrap.css'); }}
 	
 	{{ HTML::style('../css/bootstrap-datepicker3.css'); }}

@yield('toolbar')

</head>


<body style="background: url({{ URL::to('../img/Track.jpg') }}) no-repeat; background-size: 100%;">

	<div class="container" style ="background-color:#F8F8F8  ;">
	@yield('content')
	</div>	

</body>

</html>