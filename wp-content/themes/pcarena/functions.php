<?php
 
function woo_custom_cart_button_text() {
    return __( 'View Build', 'woocommerce' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );

    
function pcarena_enqueue_styles() {
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'pcarena_enqueue_styles' );