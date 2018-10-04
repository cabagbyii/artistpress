<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
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