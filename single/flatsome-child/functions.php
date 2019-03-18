<?php
// Add custom Theme Functions here

/**
 * Code goes in theme functions.php
 */
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'ow_css', get_theme_file_uri('/assets/css/owl.carousel.min.css'),array(), 'v1.0');
        wp_enqueue_style( 'ow_css_theme', get_theme_file_uri('/assets/css/owl.theme.default.min.css'),array(), 'v1.0');
        wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style( 'mystyle', get_theme_file_uri('/assets/css/mystyle.css'),array(), 'v1.0');
        wp_enqueue_style( 'fonts-google', 'https://fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_style( 'font-awesome-4.7', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(), 'v1.0');
        wp_enqueue_style( 'hover-css', get_theme_file_uri('assets/css/hover-min.css'),array(), 'v1.0');


        //script
        wp_enqueue_script('my_script', get_theme_file_uri('/assets/js/myscript.js'), array('jquery'), 'v1.0',true);
        wp_enqueue_script('ow_js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), 'v1.0',true);
	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), 'v1.0',true);
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );