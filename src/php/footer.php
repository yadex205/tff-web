      <!-- Global footer -->
      <footer class="global-footer-wrapper">
        <div class="global-footer">
          <nav class="global-footer-nav-wrapper">
            <ul class="global-footer-nav">
              <?php get_template_part( 'partial/nav_primary' ); ?>
            </ul>
          </nav>

          <div class="copyright-wrapper">
            <span class="copyright">
              <a href="#"><i class="fa fa-file-code-o"></i> About this site</a> |
              <i class="fa fa-copyright"></i> 2017 Three for Flavin.
            </span>
          </div>
        </div>
      </footer> <!-- .global-footer-wrapper -->
    </div> <!-- .global -->

    <!-- Popup menu -->
    <nav class="global-popup-nav-wrapper">
      <ul class="global-popup-nav primary">
        <?php get_template_part( 'partial/nav_primary' ); ?>
      </ul>

      <ul class="global-popup-nav secondary">
        <li class="nav-item">About this site</li>
      </ul>
    </nav>

    <!-- Popup menu trigger -->
    <div class="global-popup-nav-trigger">
      <span class="icon-menu-hidden"><i class="fa fa-th-list"></i></span>
      <span class="icon-menu-shown"><i class="fa fa-times"></i></span>
    </div> <!-- .global-popup-nav-trigger -->

    <?php wp_footer(); ?>
  </body>
</html>
