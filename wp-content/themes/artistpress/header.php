<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<!-- CSS & FONT LINKS -->
	<link rel="stylesheet" type="text/css" href="http://static.tumblr.com/voy8cl3/t32on9uwl/reset.css">
	<link href='//fonts.googleapis.com/css?family=Titillium+Web:900' rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="shortcut icon" href="http://www.iconj.com/ico/q/9/q91grdqee9.ico" type="image/x-icon" />
	<link href="//static.tumblr.com/voy8cl3/7BZon9uyz/bootstrap.min.css" rel="stylesheet">
	<link href="//static.tumblr.com/voy8cl3/a2rp3bufi/custom_1.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<div id="home-head" class="page-section banner">
		<div class="navi-mobile-cont">
			<div class="navi-mobile-btn"></div> 
		</div> 
		<nav class="navi">
			<ul class="nav-list">
				<?php wp_list_pages( '&title_li=' ); ?>
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
		<nav class="mobile-navi">
			<ul class="mobile-nav-list">
				<?php wp_list_pages( '&title_li=' ); ?>
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