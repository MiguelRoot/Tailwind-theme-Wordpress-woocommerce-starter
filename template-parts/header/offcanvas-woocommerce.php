<?php

/**
 * Template part for displaying the offcanvas user and cart if WooCommerce is installed
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<!-- Offcanvas user -->
<?php
if ( is_account_page() || is_checkout() ) {
 // Do nothing
} else { ?>

<!-- drawer component -->
<div id="drawer-example" class="fixed top-admin top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label">
   <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      X
   </button>
  <div class="">
      <?= do_shortcode('[woocommerce_my_account]'); ?>
   </div>
</div>



<?php } ?>


<!-- Offcanvas cart -->
<?php
if ( is_checkout() || is_cart() ) {
 // Do nothing
} else { ?>


  <!-- drawer component -->
  <div id="drawer-right-example" class="fixed top-admin right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-full md:w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
      <!-- <div class="offcanvas-header">
        <span class="h5 offcanvas-title"><?= apply_filters('bootscore/offcanvas/cart/title', __('Cart', 'bootscore')); ?></span>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div> -->
        </svg>Right drawer</h5>
   <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      X
      <span class="sr-only">Close menu</span>
   </button>
      <div class="offcanvas-body p-0">
        <div class="cart-list">
          <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
        </div>
      </div>
  </div>


<?php } ?>