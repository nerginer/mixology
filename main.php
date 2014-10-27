<!doctype html>
<html lang="en">	
<head>
	<meta charset="utf-8">
	<title>Reveal.js 3 Slide Demo</title>
<!--	<link rel="stylesheet" href="css/reveal.min.css">
	<link rel="stylesheet" href="css/theme/default.css" id="theme">	
	-->
	
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">  
	

</head>

<body>
	<!-- Wrap the entire slide show in a div using the "reveal" class. -->
	<div class="reveal">
		<!-- Wrap all slides in a single "slides" class -->
		<div class="slides">

			<!-- ALL SLIDES GO HERE -->
			<!-- Each section element contains an individual slide -->
			<section>
				<?php include 'inside.php';?>		
			</section>

			<section id="show-a-link">
				<h1>Show a live link</h1>
				<p>Slide 2 discussed here</p>
				<p>See <a href="http://www.htmlcheats.com">HTMLCheats.com</a><p>
			</section>

			<section>
				<h1>Slide 3</h1>
				<p>How does one revisit an arbitrary slide in code?</p>
				<p>Visit internal slide<a href="#/show-a-link"> 2</a>
			</section>

			</div>
	</div>
	<script src="lib/js/head.min.js"></script>
	<script src="js/reveal.min.js"></script>

	<script>
	
		// Required, even if empty.
		Reveal.initialize({
		});
	</script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>