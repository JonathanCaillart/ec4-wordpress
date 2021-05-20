<?php
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );


function wp_version_remove_version() {
    return '';
    };

add_filter('the_generator', 'wp_version_remove_version');

add_action( 'after_setup_theme', 'mytheme_custom_thumbnail_size' );
function mytheme_custom_thumbnail_size(){
    add_image_size( 'thumb-small', 200, 200, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
    add_image_size( 'thumb-medium', 520, 500 ); // Crop to 520px width, unlimited height
    add_image_size( 'thumb-large', 720, 340 ); // Soft proprtional crop to max 720px width, max 340px height
}

