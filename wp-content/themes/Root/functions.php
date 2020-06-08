<?php
function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );



function sajtic_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/assets/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'sajtic_enqueue_styles');

function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'sajtic_enqueue_scripts');

?>
