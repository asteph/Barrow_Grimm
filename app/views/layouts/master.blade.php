<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title>Barrow &amp; Grimm - Home</title>
	<meta name="description" content="">
	<meta name="author" content="">

<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">

<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="images/favicon.png">

	@yield('head')
	<style>
		.column{
			border-style: solid;
		}

	</style>

</head>
<body>

<!-- Primary Page Layout
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top: 25%">
				@yield('content')
			</div>
		</div>
	</div>

	<footer>

	</footer>
<!-- End Document 
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	@yield('script')
</body>
</html>