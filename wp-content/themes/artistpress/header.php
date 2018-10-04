<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<!-- CSS & FONT LINKS -->
	<link rel="shortcut icon" href="http://www.iconj.com/ico/q/9/q91grdqee9.ico" type="image/x-icon" />
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