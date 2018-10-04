<!DOCTYPE HTML>
<html lang="en" style="background-color:<?php echo get_option('backround_color'); ?>">
<head>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<!-- CSS & FONT LINKS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="shortcut icon" href="http://www.iconj.com/ico/q/9/q91grdqee9.ico" type="image/x-icon" />
	<?php wp_head();?>
</head>
<body style="background-color:<?php echo get_option('backround_color'); ?>">
	<div id="home-head" class="page-section banner" style="background-image:url(<?php echo get_option('backround_image'); ?>);">
		<div class="navi-mobile-cont">
			<div class="navi-mobile-btn"></div> 
		</div> 
		<nav class="navi">
			<ul class="nav-list">
				<!-- <li>
					<a>Home</a>
				</li> 
				<li>
					<a>Cypher</a>
				</li>
				<li>
					<a>Music</a>
				</li> 
				<li>
					<a>#JustHipHop</a>
				</li>
				<li>
					<a>TheJam</a>
				</li> -->
			</ul> 
		</nav>
		<nav class="social-media-nav">
			<ul class="social-media-nav-list">
				<li>
					<a href="<?php echo get_option('soundcloud'); ?>"><i class="fab fa-soundcloud"></i></a>
				</li> 
				<li>
					<a href="<?php echo get_option('instagram'); ?>"><i class="fab fa-instagram"></i></a>
				</li>
				<li>
					<a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter"></i></a>
				</li> 
				<li>
					<a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook"></i></a>
				</li>
			</ul> 
		</nav>
		<nav class="mobile-navi">
			<ul class="mobile-nav-list">
				<!-- <li>
					<a>Home</a>
				</li> 
				<li>
					<a>Cypher</a>
				</li>
				<li>
					<a>Music</a>
				</li> 
				<li>
					<a>#JustHipHop</a>
				</li>
				<li>
					<a>TheJam</a>
				</li> -->
			</ul> 
			<div class="x_btn mobile_x"></div>
		</nav>