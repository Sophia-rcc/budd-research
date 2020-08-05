<?php function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Page Widgets', 'textdomain' ),
        'id'            => 'main-page-widget',
        'description'   => __( 'Widgets in this area will be shown on the main page, before comments.', 'textdomain' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );


add_theme_support('custom-logo');

function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 100,
 'flex-height' => false,
 'flex-width'  => false,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_theme_support('post-thumbnails');

function budd_scripts() {
	wp_enqueue_style( 'budd-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.1', 'all');
	
	wp_enqueue_script( 'budd_navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true);
}

add_action( 'wp_enqueue_scripts', 'budd_scripts' );

register_nav_menus(
	array('primary-menu' => _('Primary Menu'))
);

function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
 
/** SHOWS WHICH TEMPLATE IS USED
add_action( 'wp_footer', 'meks_which_template_is_loaded' );*/
