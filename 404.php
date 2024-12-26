<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>
  <div id="content" class="">
    <div id="primary" class="max-w-screen-2xl m-auto px-4 mt-10 mb-4">

      <main id="main" class="">

        <section class="">
          <div class="">

            <h1 class="mb-3">404</h1>
            <!-- Remove this line and place some widgets -->
            <p class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50"><?php esc_html_e('Page not found.', 'bootscore'); ?></p>
            <!-- 404 Widget -->
            <?php if (is_active_sidebar('404-page')) : ?>
              <div><?php dynamic_sidebar('404-page'); ?></div>
            <?php endif; ?>
            <a class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="<?= esc_url(home_url()); ?>" role="button">
              <?php esc_html_e('Back Home &raquo;', 'bootscore'); ?>
            </a>
          </div>
        </section><!-- .error-404 -->

      </main><!-- #main -->

    </div><!-- #primary -->
  </div><!-- #content -->

<?php
get_footer();
