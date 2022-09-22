<?php
// Add custom Theme Functions here
// shows a customized price based on the user role
add_filter( 'woocommerce_product_get_price', 'mrc_custom_price', 10, 2);
add_filter( 'woocommerce_product_variation_get_price', 'mrc_custom_price', 10, 2 );
add_filter( 'woocommerce_product_get_regular_price', 'mrc_custom_price', 10, 2 );
add_filter( 'woocommerce_product_get_sale_price', 'mrc_custom_price', 10, 2 );
function mrc_custom_price( $price, $product ) {

    // $user = wp_get_current_user();
    // if ( ! in_array( 'customer', (array) $user->roles ) ) {
    //     return $price;
    // }
    
    if ($product->get_id() == 31) {
        if ( is_user_logged_in() ) {
            return 10;
        } else {
            return $price;
        }     
    } // prodotto 31
    else {
        return $price;
    }
   

}
