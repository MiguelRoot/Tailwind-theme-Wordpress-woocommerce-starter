<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>

  <div id="content" class="">
    <div id="primary" class="max-w-screen-2xl m-auto px-4">

      <div class="row">
        <div class="">

          <main id="main" class="">

            <div class="">
              <?php the_post(); ?>
              <h1 class="text-2xl font-semibold"><?php the_title(); ?></h1>
              <?php bootscore_post_thumbnail(); ?>
            </div>

            <div class="">
              <?php the_content(); ?>
            </div>

            <div class="">
              <?php comments_template(); ?>
            </div>

          </main>

        </div>
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>

<?php
get_footer();
