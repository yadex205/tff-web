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
      <header class="global-header-wrapper">
        <div class="global-header">

          <nav class="global-header-primary-row">
            <div class="global-header-logo-wrapper">
              <a href="/" class="plain">
                <img alt="logo"
                     class="global-header-logo"
                     src="<?php echo get_header_logo_uri(); ?>"
                     srcset="<?php echo get_header_logo_uri() ?> 1x,
                          <?php echo get_header_logo_uri( '@2x' ) ?> 2x,
                          <?php echo get_header_logo_uri( '@3x' ) ?> 3x"
                />
              </a>
            </div>

            <ul class="global-header-pc-nav-primary">
              <li class="nav-item"><a class="plain" href="#">News</a></li>
              <li class="nav-item"><a class="plain" href="#">Live</a></li>
              <li class="nav-item"><a class="plain" href="#">Works</a></li>
            </ul>
          </nav> <!-- .global-header-pc-nav-primary-row -->

          <nav class="global-header-secondary-row">
            <ul class="global-header-pc-nav-secondary">
              <li class="nav-item"><a href="#">Top</a></li>
              <li class="nav-item"><a href="#">Profile</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
          </nav> <!-- .global-header-pc-nav-secondary-row -->

        </div>
      </header> <!-- .global-header-wrapper -->
