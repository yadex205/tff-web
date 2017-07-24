<?php
$welcome_image_uri = get_template_directory_uri() . '/image/home-welcome.jpg';
?>

<?php get_header(); ?>

<div class="welcome-image-wrapper">
  <img class="welcome-image" alt="welcome-image" src="<?php echo $welcome_image_uri; ?>"/>
</div>

<div class="home-topics">
  <div class="home-topics-row">
    <header class="home-topics-row-header">
      News
    </header>
    <ul class="home-topics-row-content">
      <?php foreach( get_news_posts( 5 ) as $post): setup_postdata( $post ); ?>
        <li>
          <a class="plain" href="<?php the_permalink(); ?>>">
            <div class="date"><?php echo get_post_time( 'Y.m.d D' ); ?></div>
            <div class="title"><?php the_title(); ?></div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="home-topics-row">
    <header class="home-topics-row-header">
      Live
    </header>
    <ul class="home-topics-row-content">
      <?php foreach( get_scheduled_live_posts() as $post): setup_postdata( $post ); ?>
        <li>
          <a class="plain" href="<?php the_permalink(); ?>">
            <div class="date"><?php echo get_post_time( 'Y.m.d D' ); ?></div>
            <div class="title"><?php the_title(); ?></div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="home-topics-row">
    <header class="home-topics-row-header">
      Tweet
    </header>
    <a class="twitter-timeline"
       data-theme="light"
       data-tweet-limit="4"
       data-link-color="#dcdc42"
       data-chrome="transparent nofooter noheader noscrollbar"
       href="https://twitter.com/ThreeforFlavin">Tweets by ThreeforFlavin</a>
  </div>
</div>


<?php get_footer(); ?>
