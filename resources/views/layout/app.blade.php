<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>First laravel website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/app.css">
</head>
<body>

@include('inc.navbar')
	

		<div class="container">

			@if(Request::is('/'))
				@include('inc.showcase')
			@endif
			<div class="row">
				<div class="col-md-8 col-lg-8">

					@include('inc.message')

					@yield('content')
				</div>

				<div class="col-md-4 col-lg-4">
					@include('inc.sidebar')
				<div>
			</div>
		</div>	

<footer id="footer" class="text-center">
	
</footer>
<div id="footer">
  <div class="container text-center">
    <p class="" style="color:#fff;background:#333;margin-top:30px;padding: 20px;
	">Copyright 2018 &copy;Neptech</p>
  </div>
</div>	
	

</body>
</html>