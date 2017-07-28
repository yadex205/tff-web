<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
  <header class="page-content-header">
    <h1><?php the_title(); ?></h1>
    <h3>
      <?php if ( in_category( 'live' ) ): ?>
        <i class="fa fa-fw fa-lg fa-calendar-o"></i>
      <?php endif; ?>
      <?php echo get_post_time( 'Y.m.d D' ); ?>
    </h3>
    <?php if ( in_category( 'live' ) ): ?>
      <h3>
        <i class="fa fa-lg fa-fw fa-map-marker"></i>
        <?php echo get_post_custom()['place'][0] ?>
      </h3>
    <?php endif; ?>
  </header>

  <article class="page-content-main">
    <?php the_content('続きを読む'); ?>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
