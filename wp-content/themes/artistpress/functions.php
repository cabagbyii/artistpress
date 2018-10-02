<?php
	// Add scripts and stylesheets
	function artistpress_scripts() {
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '2.0' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );
		wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/style.css' );
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
		wp_enqueue_script( 'info', get_template_directory_uri() . '/js/info.js', array( 'jquery', 'bootstrap'), '1', true );
		wp_enqueue_script( 'load', get_template_directory_uri() . '/js/load.js', array( 'jquery' ,'bootstrap', 'info' ), '1', true );
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

	// Custom settings
	function custom_settings_add_menu() {
	  add_menu_page( 'Social Media Settings', 'Social Media Settings', 'manage_options', 'social-media-settings', 'social_media_settings_page', null, 99 );
	}
	add_action( 'admin_menu', 'custom_settings_add_menu' );

	// Create Custom Global Settings
	function social_media_settings_page() { ?>
	  <div class="wrap">
	    <h1>Social Media Settings</h1>
	    <form method="post" action="options.php">
	       <?php
	           settings_fields( 'section' );
	           do_settings_sections( 'theme-options' );      
	           submit_button(); 
	       ?>          
	    </form>
	  </div>
	<?php }
	// Twitter
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


	function social_media_settings_page_setup() {
	  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
	  add_settings_field( 'soundcloud', 'Soundcloud URL', 'setting_soundcloud', 'theme-options', 'section' );
	  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
	  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
	  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );

	  register_setting('section', 'instagram');
	  register_setting('section', 'twitter');
	  register_setting('section', 'facebook');
	  register_setting('section', 'soundcloud');
	}
	add_action( 'admin_init', 'social_media_settings_page_setup' );
?>