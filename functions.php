<?php

// use to setup custom logo
// https://codex.wordpress.org/Theme_Logo

function theme_prefix_setup() {
    
add_theme_support( 'custom-logo', array(
    'height'      => 80,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// use to output the custom logo
// Use function_exists() wrapper to maintain backwards compatibility with older versions of WordPress.

function theme_prefix_the_custom_logo() {
    
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

}


// This theme uses wp_nav_menu() in two locations.
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); //adds the featured image for POST

set_post_thumbnail_size( 1200, 9999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Learn More' )
    );
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// This will create a custom thumbnail size that you can use under
       
// if ( has_post_thumbnail()) {    
//   the_post_thumbnail('full');  
// }

add_image_size( '300x210', 300, 210, true ); // Hard Crop Mode
add_image_size( 'featured_image', 512, 460, true );
















