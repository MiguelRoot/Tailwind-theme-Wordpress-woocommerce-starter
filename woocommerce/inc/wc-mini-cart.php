<?php

/**
 * WooCommerce Mini Cart
 *
 * @package Bootscore 
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Mini cart Header v2
 */
if (!function_exists('bootscore_mini_cart')) :
  function bootscore_mini_cart($fragments) {

    ob_start();
    $count = WC()->cart->cart_contents_count; ?>
    <span class="cart-content">
      <?php if ($count > 0) { ?>
        <span class="cart-content-count absolute flex justify-center items-center -top-[3px] font-semibold leading-tight -right-[9px] min-w-[18px] min-h-[18px] bg-white text-primary-600 rounded-full text-[11px] px-[3px]"><?= esc_html($count); ?></span>

      <?php } ?>
    </span>

    <?php
    $fragments['span.cart-content'] = ob_get_clean();

    return $fragments;
  }
  // GAAAAAAAAAAAAAAAAAAAA()
  add_filter('woocommerce_add_to_cart_fragments', 'bootscore_mini_cart');

endif;