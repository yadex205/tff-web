<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ) ?>"/>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Theme global region -->
    <div class="global">

      <!-- Global header -->
      <header class="global-header">
        <div class="global-header-logo-wrapper"></div>
        <nav class="global-header-pc-nav-wrapper">
          <ul class="global-header-pc-nav">
            <?php get_template_part( 'partial/nav_primary' ); ?>
          </ul>
        </nav>
      </header> <!-- .global-header -->
