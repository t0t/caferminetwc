<?php
/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/assets/img' );
define( 'SCRIPTS', THEMEROOT . '/assets/js' );

/**
 * ----------------------------------------------------------------------------------------
 * Register Custom Post Types.
 * ----------------------------------------------------------------------------------------
 */
 // function create_post_type() {
 // 	register_post_type('habitaciones', array(
 // 		'labels' => array('name' => __('Habitaciones'), 'singular_name' => __('Habitacion')),
 // 		'public' => true,
 // 		'has_archive' => false,
 // 		'rewrite' => array('slug' => 'habitacion'),
 // 		'taxonomies' => array('category'),
 // 		'supports' => array('title', 'editor', 'thumbnail')
 // 	));
 // }
 // add_action('init', 'create_post_type');


 /**
  * ----------------------------------------------------------------------------------------
  *  - Include the native WP Custom Fields
  *  - instructions: http://www.sitepoint.com/wp-api/
  * ----------------------------------------------------------------------------------------
  */
 //  function register_post_custom_field() {
 // 	 register_api_field( 'post',
 // 	     'custom_field',
 // 	     array(
 // 	         'get_callback'    => 'get_custom_field',
 // 	         'update_callback' => null,
 // 	         'schema'          => null,
 // 	     )
 // 	 );
 // }
 // // poner el callback a la funcion en el template
 // function get_custom_field( $object, $field_name, $request ) {
 //   return get_post_meta( $object[ 'id' ], $field_name, true );
 // }


// Register Sidebar
register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar-1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>',
));

// Register menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * ----------------------------------------------------------------------------------------
 * 10.0 - Load the custom scripts for the theme.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'alpha_scripts' ) ) {
	function alpha_scripts() {
		wp_register_script( 'alpha-custom', SCRIPTS . '/build.js', array( '' ), false, true );
		wp_enqueue_style( 'alpha-master', THEMEROOT . '/style.css', false );
	}

	add_action( 'wp_enqueue_scripts', 'alpha_scripts' );
}


/***************
 * Woo Theme support Declaration
 ***************/
add_theme_support( 'woocommerce' );
//unhookd woocommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//Then hook in your own functions to display the wrappers your theme requires;
add_action('woocommerce_before_main_content', 'ek_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'ek_theme_wrapper_end', 10);

function ek_theme_wrapper_start() {
  echo '<section class="main">';
}

function ek_theme_wrapper_end() {
  echo '</section>';
}
