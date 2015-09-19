<?php get_header(); ?>

    <?php while( have_posts() ) : the_post(); ?>

      <main class="site-main" role="main">
        <div class="post">
            <h2><?php the_title(); ?></h2>
            <?php get_template_part( 'content', get_post_format() ); ?>
            <div class="meta">
                <?php the_tags('Tags: ') ?>.
                Category: <?php the_category(', ') ?>. <?php the_time('l, j F, Y') ?>
            </div>
        </div>

        <div class="navigation">
            <div class="nav-prev"><?php previous_post_link('&laquo; %link') ?></div>
            <div class="nav-next"><?php next_post_link('%link &raquo;') ?></div>
        </div>
      </main>

    <?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
