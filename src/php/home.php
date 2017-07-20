<?php
$welcome_image_uri = get_template_directory_uri() . '/image/home-welcome.jpg';
?>

<?php get_header(); ?>

<div class="welcome-image-wrapper">
  <img class="welcome-image" alt="welcome-image" src="<?php echo $welcome_image_uri; ?>"/>
</div>

<div class="home-topics">
  <div class="home-topics-item">
    <header class="home-topics-item-header">
      Live
    </header>
  </div>
  <div class="home-topics-item">
    <header class="home-topics-item-header">
      News
    </header>
  </div>
  <div class="home-topics-item">
    <header class="home-topics-item-header">
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
