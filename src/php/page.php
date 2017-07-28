<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
  <header class="page-content-header">
    <h1><?php the_title(); ?></h1>
  </header>

  <article class="page-content-main">
    <?php the_content('続きを読む'); ?>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
