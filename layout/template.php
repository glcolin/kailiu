<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="wwww.369usa.com">
	<meta name="format-detection" content="telephone=no">
	<!--Load bootstrap library and JQuery-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/masonry.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wra home">
		<aside class="col-md-4 col-sm-12">
			<header>
					<p>The Most Affordable<br/>Food Photographer in Queens</p>		
			</header>
			
			<!-- Mobile only -->
			<nav class="navbar navbar-inverse mobile-only">
				<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Kai Liu Visual Studio<br/><span>The most affordable food protographer in town</span></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#">About Kai</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Service and Quotes</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				</div>
			</nav>
			<!-- END -->
			
			<!-- PC, Tablet only -->
			<nav class="navbar mobile-hide">
				<a href="#">About Kai</a>
				<a href="#">Testimonials</a>
				<a href="#">Service and Quotes</a>
				<a href="#">Blog</a>
				<a href="#">Contact Us</a>
			</nav>
			<!-- END -->
			
			<?php foreach($parts as $part){
				require_once('includes/'.$part.'.php');
				echo "\n\n";
			} ?>
					
			<footer>
			<div class="infobar"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> liukaitc@gmail.com | <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> (646)-750-1803</div>
			&copy; 2011-2016, designed and promoted by <a href="http://www.369usa.com">www.369usa.com</a>
			</footer>
		</aside>
		<section class="col-md-8">
		<section>
	</div>
</body>
</html>