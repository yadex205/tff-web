<?php
$welcome_image_uri = get_template_directory_uri() . '/image/home-welcome.jpg';
?>

<?php get_header(); ?>

<div class="welcome-image-wrapper">
  <img class="welcome-image" alt="welcome-image" src="<?php echo $welcome_image_uri; ?>"/>
</div>

<?php get_footer(); ?>
