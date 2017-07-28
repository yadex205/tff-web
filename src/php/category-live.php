<?php get_header(); ?>

<header class="page-content-header">
  <h1>Live schedule</h1>
</header>

<article class="page-content-main">
  <div class="live-schedule">
    <?php foreach( get_scheduled_live_posts() as $post ): setup_postdata( $post ); ?>
      <a class="plain live-schedule-item" href="<?php the_permalink(); ?>">
        <div class="live-schedule-item-title"><?php the_title(); ?></div>
        <div class="live-schedule-item-date">
          <i class="fa fa-fw fa-lg fa-calendar-o"></i>
          <?php echo get_post_time( 'Y.m.d D' ); ?>
        </div>
        <div class="live-schedule-item-place">
          <i class="fa fa-fw fa-lg fa-map-marker"></i>
          <?php echo get_post_custom()['place'][0] ?>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</article>

<?php get_footer(); ?>
