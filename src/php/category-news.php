<?php get_header(); ?>

<header class="page-content-header">
  <h1>News / Announce</h1>
</header>

<article class="page-content-main">
  <div class="news-holder">
    <?php foreach( get_news_posts() as $post ): setup_postdata( $post ); ?>
      <a class="plain news-item" href="<?php the_permalink(); ?>">
        <div class="news-item-date"><?php echo get_post_time( 'Y.m.d D' ); ?></div>
        <div class="news-item-title"><?php the_title(); ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</article>

<?php get_footer(); ?>
