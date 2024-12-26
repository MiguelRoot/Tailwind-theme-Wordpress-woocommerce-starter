<?php

/**
 * The template for displaying archive pages
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
    <div id="primary" class="max-w-screen-2xl m-auto px-4 mt-10 mb-4">
      <div class="">
        <div class="<?= apply_filters('bootscore/class/main/col', 'col') ?>">
          <main id="main" class="site-main">
            <div class="page-header mb-4">
              <?php the_archive_title('<h1 class="text-2xl font-semibold">', '</h1>'); ?>
              <?php the_archive_description('<div class="">', '</div>'); ?>
            </div>

            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                  <div class="">

                    <?php if (has_post_thumbnail()) : ?>
                      <div class="">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('medium', array('class' => 'card-img-lg-start')); ?>
                        </a>
                      </div>
                    <?php endif; ?>

                    <div class="">
                      <div class="">

                        <?php bootscore_category_badge(); ?>

                        <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                          <?php the_title('<h2 class="text-2xl font-semibold">', '</h2>'); ?>
                        </a>

                        <?php if ('post' === get_post_type()) : ?>
                          <p class="text-sm text-gray-400">
                            <?php
                            bootscore_date();
                            bootscore_author();
                            bootscore_comments();
                            bootscore_edit();
                            ?>
                          </p>
                        <?php endif; ?>

                        <p class="">
                          <a class="text-gray-700 hover:font-semibold" href="<?php the_permalink(); ?>">
                            <?= strip_tags(get_the_excerpt()); ?>
                          </a>
                        </p>

                        <p class="">
                          <a class="text-gray-400" href="<?php the_permalink(); ?>">
                            <?php _e('Read more »', 'bootscore'); ?>
                          </a>
                        </p>

                        <?php bootscore_tags(); ?>

                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>
            
            <!-- pagination -->
            <div class="entry-footer">
              <?php bootscore_pagination(); ?>
            </div>

          </main>

        </div>
        <!-- <?php get_sidebar(); ?> -->
      </div>

    </div>
  </div>

<?php
get_footer();
