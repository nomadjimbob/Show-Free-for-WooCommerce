<?php
/*
Plugin Name: Show Free for WooCommerce
Plugin URI: https://jamescollins.com.au/resources/woocommerce-show-free
Description: Custom Extension for WooCommerce to show the word Free instead of a $0.00 for products
Version: 1.0
Author: James Collins
Author URI: https://jamescollins.com.au/
*/

add_filter( 'woocommerce_get_price_html', 'wceshowfree_price_free_zero_empty', 100, 2 );
  
/**
 * Replace the price with the word Free if the price is zero
 */
function wceshowfree_price_free_zero_empty( $price, $product ) {
	if ( '' === $product->get_price() || 0 == $product->get_price() ) {
    	$price = 'Free';
	} 
 
	return $price;
}
