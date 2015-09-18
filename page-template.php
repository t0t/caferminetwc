<?php
/**
 * The template for displaying products.
 * Template name: Productos
 */

get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <main class="site-main" role="main">
          <div class="post">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
