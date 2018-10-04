<?php get_header(); ?>
	<div class="container section-inner">
		<div class="banner-title"><?php echo get_bloginfo( 'name' ); ?></div>
		<a class="main_btn_container" href="<?php echo get_option('action_url'); ?>"><div class="main_btn" id="home_btn"><?php echo get_option('action_text'); ?></div></a>
		<div class="scroll_prompt">scroll for more
			<br>
			<p style="width: 0;height: 0;border-left: 10px solid transparent;border-right: 10px solid transparent;border-top: 10px solid #fff;margin: 0 auto;"></p>
		</div>
	</div>
</div> <!-- #home_head -->
<!-- <div class="content-main"> -->
<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : 
			the_post(); 
			get_template_part( 'content', get_post_format() );
		endwhile; 
	endif; 
?>

<!-- </div> -->
<?php get_footer(); ?>

	