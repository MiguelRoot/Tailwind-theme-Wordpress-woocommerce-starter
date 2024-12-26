<?php
/**
 * Template Post Type: post
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

      <?php the_breadcrumb(); ?>

      <div class="">
        <div class="">

          <main id="main" class="">

            <div class="">
              <?php the_post(); ?>
              <?php bootscore_category_badge(); ?>
              <h1 class="text-2xl font-semibold"><?php the_title(); ?></h1>
              <p class="">
                <small class="text-gray-500">
                  <?php
                  bootscore_date();
                  bootscore_author();
                  bootscore_comment_count();
                  ?>
                </small>
              </p>
              <?php bootscore_post_thumbnail(); ?>
            </div>

            <div class="text-gray-700">
              <?php the_content(); ?>
            </div>

            <!-- comments -->
            <div class="mt-12">
              <div class="mb-4">
                <?php bootscore_tags(); ?>
              </div>
              <!-- Related posts using bS Swiper plugin -->
              <?php if (function_exists('bootscore_related_posts')) bootscore_related_posts(); ?>
              <nav aria-label="bs page navigation">
                <ul class="">
                  <li class="">
                    <?php previous_post_link('%link'); ?>
                  </li>
                  <li class="">
                    <?php next_post_link('%link'); ?>
                  </li>
                </ul>
              </nav>
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
