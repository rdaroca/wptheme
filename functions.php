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
        __( 'Read More' )
    );
}

<<<<<<< HEAD
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
=======
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
>>>>>>> 4e49ce03d23a18c121e5e552cf8f08acf1b3e3c7
