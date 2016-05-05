<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $description;?>">
	<meta name="keywords" content="<?php echo $keywords;?>">
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
	<!-- bxSlider Javascript file -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="css/jquery.bxslider.css" rel="stylesheet" />

</head>
<body>
	<div class="wra home">
		<aside class="col-md-4 col-sm-12">
			<a href="/"><header>
					<p><span>Kai Liu Visual</span><br/>Affordable Food Photographer / Videographer in New York</p>	
			</header></a>	
			
			<!-- Mobile only -->
			<nav class="navbar navbar-inverse mobile-only">
				<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Kai Liu Visual<br/><span>Affordable food protographer in New York</span></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="/">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="testimonials">Testimonials</a></li>
						<li><a href="service-and-quotes">Service and Quotes</a></li>
						<li><a href="blog">Blog</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
				</div>
			</nav>
			<!-- END -->
			
			<!-- PC, Tablet only -->
			<nav class="navbar mobile-hide">
				<a href="/">Home</a>
				<a href="about">About</a>
				<a href="testimonials">Testimonials</a>
				<a href="service-and-quotes">Service and Quotes</a>
				<a href="blog">Blog</a>
				<a href="contact">Contact Us</a>
			</nav>
			<!-- END -->
			
			<?php foreach($parts as $part){
				require_once('includes/'.$part.'.php');
				echo "\n\n";
			} ?>
					
			<footer>
			<div class="infobar"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> liukaitc@gmail.com | <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> (646)-750-1803</div>
			&copy; 2011-2016, designed and promoted by <a href="http://www.369usa.com">www.369usa.com</a>
			</footer>
		</aside>
		<section class="col-md-8">
		<section>
	</div>
</body>
</html>