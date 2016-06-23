<?php
 
function woo_custom_cart_button_text() {
    return __( 'Add to Build', 'woocommerce' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );

    
function pcarena_enqueue_styles() {
    wp_enqueue_style( 'dashicons' );
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', 'dashicons' );

}
add_action( 'wp_enqueue_scripts', 'pcarena_enqueue_styles' );

function my_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'View Cart' :
            $translated_text = __( 'View Build', 'woocommerce' );
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );