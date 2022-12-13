<?php
add_action( 'init', 'theme_setup' );
function theme_setup() {

	register_nav_menus(
		array(
			'top_menu' => __( 'Top menu' ),
			'main_menu' => __( 'Main menu' ),
			'side_panel' => __( 'Mobile side menu' ),
			)
	);
}


if (has_nav_menu('top_menu')) {
	wp_nav_menu( array(
		'theme_location' => 'top_menu',
		'menu_class' => 'top_menu',
		'container' => false
	) );
}
