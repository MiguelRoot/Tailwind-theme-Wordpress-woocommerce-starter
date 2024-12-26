<?php

/**
 * Template part for displaying the header-actions if WooCommerce if installed
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<!-- Search toggler -->
<?php if (is_active_sidebar('top-nav-search')) : ?>
  <button class="<?= apply_filters('bootscore/class/header/button', 'btn btn-outline-secondary', 'search-toggler'); ?> ms-1 ms-md-2 search-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
    <i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span>
  </button>
<?php endif; ?>

<!-- User toggler -->
<?php
if ( is_account_page() || is_checkout() ) {
 // Do nothing
} else { ?>

  <!-- drawer init and toggle -->
  <button class="me-3" type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
    <div class="flex items-center">
      <div class="me-1">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 10C14.9853 10 17 7.98528 17 5.5C17 3.01472 14.9853 1 12.5 1C10.0147 1 8 3.01472 8 5.5C8 7.98528 10.0147 10 12.5 10Z" fill="white"/>
        <path d="M21 16C21 18.7611 21 21 12 21C3 21 3 18.7611 3 16C3 13.2389 7.02975 11 12 11C16.9703 11 21 13.2389 21 16Z" fill="white"/>
        </svg>
      </div>
      <div class="text-start  hidden md:block">
        <div class="text-sm opacity-80">Iniciar sesión</div>
        <div class="leading-none ">Cuenta</div>
      </div>
    </div>

  </button>

<?php } ?>


<!-- Mini cart toggler -->
<?php
if ( is_cart() ) {
 // Do nothing
} elseif ( is_checkout() ) { ?>
  <!-- Add a back-to-cart button -->
  <?php
  // Check the filter and AJAX cart option
  $skip_cart_filter = apply_filters('bootscore/skip_cart', true);
  $ajax_cart_en = 'yes' === get_option('woocommerce_enable_ajax_add_to_cart');

 if ($skip_cart_filter && $ajax_cart_en) {
    $back_to_cart_url = get_permalink(wc_get_page_id('shop'));
  } else {
    $back_to_cart_url = wc_get_cart_url();
  }

  ?>
  <a class="<?= apply_filters('bootscore/class/header/button', 'btn btn-outline-secondary', 'back-to-cart'); ?> ms-1 ms-md-2 back-to-cart" href="<?= esc_url($back_to_cart_url); ?>">
    <i class="fa-solid fa-arrow-left d-none d-md-inline me-2"></i><i class="fa-solid fa-bag-shopping"></i>
    <span class="visually-hidden-focusable">Return to <?= ($back_to_cart_url == wc_get_cart_url()) ? 'Cart' : 'Shop'; ?></span>
  </a>
<?php } else { ?>

  <!-- drawer init and toggle -->
<!-- <div class="text-center"> -->
   <button class="relative me-2" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
     
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.51694 1.76001C2.30735 1.76001 2.10634 1.84327 1.95814 1.99147C1.80994 2.13967 1.72668 2.34067 1.72668 2.55026C1.72668 2.75985 1.80994 2.96085 1.95814 3.10905C2.10634 3.25726 2.30735 3.34051 2.51694 3.34051V1.76001ZM4.62427 2.55026L5.41242 2.48915C5.39703 2.29069 5.30731 2.10535 5.16119 1.97018C5.01507 1.835 4.82333 1.75994 4.62427 1.76001V2.55026ZM21.483 5.71127L22.268 5.79872C22.2803 5.68829 22.2691 5.57649 22.2353 5.47065C22.2015 5.3648 22.1457 5.26729 22.0716 5.18446C21.9975 5.10163 21.9068 5.03536 21.8054 4.98996C21.704 4.94457 21.5941 4.92108 21.483 4.92102V5.71127ZM2.51694 3.34051H4.62427V1.76001H2.51694V3.34051ZM7.82427 16.8865L18.735 16.1078L18.6223 14.5315L7.71258 15.3112L7.82427 16.8865ZM21.4082 13.5369L22.268 5.79872L20.698 5.62381L19.8382 13.363L21.4082 13.5369ZM3.83613 2.61032L4.07953 5.77238L5.65582 5.65016L5.41242 2.48915L3.83613 2.61032ZM4.07953 5.77238L4.72964 14.2186L6.30488 14.0974L5.65582 5.65016L4.07953 5.77238ZM21.483 4.92102H4.86662V6.50152H21.483V4.92102ZM18.735 16.1078C19.4109 16.0595 20.0484 15.7758 20.5368 15.3061C21.0252 14.8364 21.3335 14.2103 21.4082 13.5369L19.8382 13.363C19.8042 13.6693 19.6639 13.9539 19.4418 14.1674C19.2196 14.3809 18.9296 14.5098 18.6223 14.5315L18.735 16.1078ZM7.71258 15.3102C7.36545 15.3352 7.02254 15.2218 6.75877 14.9947C6.495 14.7677 6.33182 14.4455 6.30488 14.0985L4.72964 14.2186C4.7884 14.9819 5.14685 15.6909 5.72669 16.1908C6.30653 16.6907 7.06063 16.9408 7.82427 16.8865L7.71258 15.3102Z" fill="white"/>
        <path d="M8.31213 20.9895H8.32267V21H8.31213V20.9895ZM17.7952 20.9895H17.8057V21H17.7952V20.9895Z" stroke="white" stroke-width="3.25" stroke-linejoin="round"/>
      </svg>

      <?php if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
        $count = WC()->cart->cart_contents_count;
        ?>

        <span class="cart-content">
          <?php if ($count > 0) { ?>
            <?= esc_html($count); ?>
          <?php } ?>
        </span>

      <?php } ?>
   </button>
<!-- </div> -->

<?php } ?>
