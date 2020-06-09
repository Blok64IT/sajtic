<?php
function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' );
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' );
}

add_action( 'woocommerce_single_product_summary', 'add_to_cart_button_woocommerce', 20 );
function add_to_cart_button_woocommerce() {
    echo '
    Free Worldwide Shipping
    30-day Return Policy
';
}


?>
