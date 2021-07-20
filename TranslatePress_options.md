


// Add menus
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'languages', 'Языки' );
}

wp_nav_menu( [
	'theme_location'  => 'languages',
	'menu'            => 'Языки',
	'container'       => false,
	'menu_class'      => 'languages',
] );

