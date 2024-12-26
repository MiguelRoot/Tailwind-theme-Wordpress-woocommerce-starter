<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

      <div class="">
        <div class="">

          <main id="main" class="">

            <?php if (have_posts()) : ?>

              <div class="">
                <h1>
                  <?php
                  /* translators: %s: search query. */
                  printf(esc_html__('Search Results for: %s', 'bootscore'), '<span class="bg-red-500>' . get_search_query() . '</span>');
                  ?>
                </h1>
              </div>

              <?php
              /* Start the Loop */
              while (have_posts()) :
                the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part('template-parts/search/content', 'search');

              endwhile;

              bootscore_pagination();

            else :

              get_template_part('template-parts/search/content', 'none');

            endif;
            ?>

          </main><!-- #main -->

        </div><!-- col -->
        <?php get_sidebar(); ?>
      </div><!-- row -->

    </div><!-- #primary -->
  </div><!-- #content -->
<?php
get_footer();
