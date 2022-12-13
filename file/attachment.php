<?php
add_action( 'wp_enqueue_scripts', 'hamayrwp_assets' );
function hamayrwp_assets() {
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0' );

	// Scripts
	wp_enqueue_script( 'jQuery-Cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array( 'jquery' ), '1.4.1', true );
}
