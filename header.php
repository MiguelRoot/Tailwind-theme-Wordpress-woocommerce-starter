<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="">
  
  <!-- <a class="skip-link visually-hidden-focusable" href="#primary">
    <?php esc_html_e( 'Skip to content', 'bootscore' ); ?>
  </a> -->

  <!-- Top Bar Widget -->
  <?php if (is_active_sidebar('top-bar')) : ?>
    <?php dynamic_sidebar('top-bar'); ?>
  <?php endif; ?>  

  <header id="masthead" class="sticky top-0 z-50 bg-gray-50 bg-primary-base text-sm" role="banner">

    <nav id="nav-main" class="max-w-screen-2xl mx-auto">

      <div class="flex flex-wrap items-center justify-between mx-auto px-4 py-4 text-white">
        
        <!-- Navbar Brand -->
        <a class="navbar-brand" href="<?= esc_url(home_url()); ?>">
          <img src="<?= esc_url(apply_filters('bootscore/logo', get_stylesheet_directory_uri() . '/assets/img/logo/logo.svg', 'default')); ?>" alt="<?php bloginfo('name'); ?> Logo" class="d-td-none me-2">
          <!-- <img src="<?= esc_url(apply_filters('bootscore/logo', get_stylesheet_directory_uri() . '/assets/img/logo/logo-theme-dark.svg', 'theme-dark')); ?>" alt="<?php bloginfo('name'); ?> Logo" class="d-tl-none me-2"> -->
        </a>

        <!-- Offcanvas Navbar -->
        <div class="flex gap-5 font-semibold" tabindex="-1" id="offcanvas-navbar">
          <!-- <div class="">
            <span class=""><?= apply_filters('bootscore/offcanvas/navbar/title', __('Menu', 'bootscore')); ?></span>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div> -->
          <div class="">

            <!-- Bootstrap 5 Nav Walker Main Menu -->
            <?php get_template_part('template-parts/header/main-menu'); ?>

            <!-- Top Nav 2 Widget -->
            <?php if (is_active_sidebar('top-nav-2')) : ?>
              <?php dynamic_sidebar('top-nav-2'); ?>
            <?php endif; ?>

          </div>
        </div>

        <div class="flex buttonsxd">

          <!-- Top Nav Widget -->
          <?php if (is_active_sidebar('top-nav')) : ?>
            <?php dynamic_sidebar('top-nav'); ?>
          <?php endif; ?>

          <?php
          if (class_exists('WooCommerce')) :
            get_template_part('template-parts/header/actions', 'woocommerce');
          else :
            get_template_part('template-parts/header/actions');
          endif;
          ?>

          <!-- Navbar Toggler -->
          <button class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
              <svg class="icon--menu-toggle" viewBox="0 0 60 30">
                <g class="icon-group">
                  <g class="icon--menu">
                    <path d="M 6 0 L 54 0" />
                    <path d="M 6 15 L 54 15" />
                    <path d="M 6 30 L 54 30" />
                  </g>
                  <g class="icon--close">
                    <path d="M 15 0 L 45 30" />
                    <path d="M 15 30 L 45 0" />
                  </g>
                </g>
              </svg>
          </button>

        </div><!-- .header-actions -->

      </div><!-- .container -->

    </nav><!-- .navbar -->

    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/collapse-search', 'woocommerce');
    else :
      get_template_part('template-parts/header/collapse-search');
    endif;
    ?>

    <!-- Offcanvas User and Cart -->
    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/offcanvas', 'woocommerce');
    endif;
    ?>

  </header><!-- #masthead -->
