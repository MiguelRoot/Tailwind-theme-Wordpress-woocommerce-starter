<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

      <main id="main" class="">

        <!-- Header -->
        <div>
          <h1 class="text-red-600 text-2xl"><?php bloginfo('name'); ?></h1>
          <p class=""><?php bloginfo('description'); ?></p>
        </div>

        <!-- Sticky Post -->
        <?php if (is_sticky() && is_home() && !is_paged()) : ?>
          <div class="">
            <div class="">
              <?php
              $args      = array(
                'posts_per_page'      => 2,
                'post__in'            => get_option('sticky_posts'),
                'ignore_sticky_posts' => 2
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

                            <div class="">
                              <div class="">
                                <?php bootscore_category_badge(); ?>
                              </div>
                              <div class="">
                                <span class=""><i class=""></i></span>
                              </div>
                            </div>

                            <a class="" href="<?php the_permalink(); ?>">
                              <?php the_title('<h2 class="text-xl text-red-400 font-semibold">', '</h2>'); ?>
                            </a>

                            <?php if ('post' === get_post_type()) : ?>
                              <p class="text-sm text-red-400">
                                <?php
                                bootscore_date();
                                bootscore_author();
                                bootscore_comments();
                                bootscore_edit();
                                ?>
                              </p>
                            <?php endif; ?>

                            <p class="text-red-400">
                              <a class="" href="<?php the_permalink(); ?>">
                                <?= strip_tags(get_the_excerpt()); ?>
                              </a>
                            </p>

                            <p class="text-red-400">
                              <a class="read-more" href="<?php the_permalink(); ?>">
                                <?php _e('Read more »', 'bootscore'); ?>
                              </a>
                            </p>

                            <?php bootscore_tags(); ?>

                          </div>
                        </div>
                      </div>
                    </div>

                  </article>
                <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </div>

            <!-- col -->
          </div>
          <!-- row -->
        <?php endif; ?>

        <!-- Post List -->
        <div class="">
          <div class="">
            <!-- Grid Layout -->
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php if (is_sticky()) continue; //ignore sticky posts
                ?>

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
                          <?php the_title('<h2 class="blog-post-title h5">', '</h2>'); ?>
                        </a>

                        <?php if ('post' === get_post_type()) : ?>
                          <p class="meta small mb-2 text-body-secondary">
                            <?php
                            bootscore_date();
                            bootscore_author();
                            bootscore_comments();
                            bootscore_edit();
                            ?>
                          </p>
                        <?php endif; ?>

                        <p class="card-text">
                          <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                            <?= strip_tags(get_the_excerpt()); ?>
                          </a>
                        </p>

                        <p class="card-text">
                          <a class="read-more" href="<?php the_permalink(); ?>">
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

            <div class="entry-footer">
              <?php bootscore_pagination(); ?>
            </div>

          </div>
          <!-- col -->
          <?php get_sidebar(); ?>
        </div>
        <!-- row -->
      </main><!-- #main -->

    </div><!-- #primary -->
  </div><!-- #content -->
<?php
get_footer();
