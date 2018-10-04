<?php
	// Add scripts and stylesheets
	function artistpress_scripts() {
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '2.0' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );
		wp_enqueue_style( 'main_style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
		wp_enqueue_script( 'load', get_template_directory_uri() . '/js/load.js', array( 'jquery' ,'bootstrap'), '1', true );
	}

	add_action( 'wp_enqueue_scripts', 'artistpress_scripts' );

	// Add Google Fonts
	function artistpress_google_fonts() {
		wp_register_style('Titillium_Web', 'http://fonts.googleapis.com/css?family=Titillium+Web:900');
		wp_enqueue_style( 'Titillium_Web');
		wp_register_style('Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
		wp_enqueue_style( 'Montserrat');
	}

	add_action('wp_print_styles', 'artistpress_google_fonts');

	//Titles
	add_theme_support( 'title-tag' );

	// Support Featured Images
	add_theme_support( 'post-thumbnails' );

	//add post formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

	// Custom settings
	function custom_settings_add_menu() {
	  add_menu_page( 'Custom Theme Settings', 'Custom Theme Settings', 'manage_options', 'custom-theme-settings', 'theme_settings_page', null, 99 );
	}
	add_action( 'admin_menu', 'custom_settings_add_menu' );

	// Create Custom Global Settings
	function theme_settings_page() { ?>
	  <div class="wrap">
	    <h1>Social Media Settings</h1>
	    <form method="post" action="options.php">
	       <?php
	           settings_fields( 'custom-theme-settings' );
	           do_settings_sections( 'theme-settings' );      
	           submit_button(); 
	       ?>          
	    </form>
	  </div>
	<?php }

	function setting_instagram() { ?>
	  <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
	<?php }

	function setting_twitter() { ?>
	  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
	<?php } 

	function setting_facebook() { ?>
	  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
	<?php }

	function setting_soundcloud() { ?>
	  <input type="text" name="soundcloud" id="soundcloud" value="<?php echo get_option( 'soundcloud' ); ?>" />
	<?php } 

	function setting_backround_image() { ?>
	  <input type="text" name="backround_image" id="backround_image" value="<?php echo get_option( 'backround_image' ); ?>" />
	<?php } 

	function setting_backround_color() { ?>
	  <input type="color" name="backround_color" id="backround_color" value="<?php echo get_option('backround_color'); ?>" />
	<?php } 

	function setting_action_text() { ?>
	  <input type="text" name="action_text" id="action_text" value="<?php echo get_option('action_text'); ?>" />
	<?php }

	function setting_action_url() { ?>
	  <input type="text" name="action_url" id="action_url" value="<?php echo get_option('action_url'); ?>" />
	<?php } 


	function custom_theme_settings_page_setup() {
	  add_settings_section( 'custom-theme-settings', 'All Settings', null, 'theme-settings' );
	  add_settings_field( 'backround_image', 'Backround image URL', 'setting_backround_image', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'backround_color', 'Backround color', 'setting_backround_color', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'soundcloud', 'Soundcloud URL', 'setting_soundcloud', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'action_text', 'Action Text', 'setting_action_text', 'theme-settings', 'custom-theme-settings' );
	  add_settings_field( 'action_url', 'Action URL', 'setting_action_url', 'theme-settings', 'custom-theme-settings' );

	  register_setting('custom-theme-settings', 'backround_image');
	  register_setting('custom-theme-settings', 'backround_color');
	  register_setting('custom-theme-settings', 'instagram');
	  register_setting('custom-theme-settings', 'twitter');
	  register_setting('custom-theme-settings', 'action_text');
	  register_setting('custom-theme-settings', 'soundcloud');
	  register_setting('custom-theme-settings', 'action_url');
	}
	add_action( 'admin_init', 'custom_theme_settings_page_setup' );

	// Custom Post Type
	function create_my_custom_post() {
		register_post_type( 'youtube_video_playlist',
				array(
				'labels' => array(
					'name' => __( 'Video Playlists' ),
					'singular_name' => __( 'Video Playlist' ),
				),
				'public' =>		 true,
				'has_archive' => true,
				'supports' => array(
					'title',
					'editor',
					'thumbnail',
					'custom-fields'
				)
		));
	}
	add_action( 'init', 'create_my_custom_post' );
?>