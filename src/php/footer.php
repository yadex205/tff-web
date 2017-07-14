      <!-- Global footer -->
      <footer class="global-footer-wrapper">
        <div class="global-footer">

          <div class="copyright-wrapper">
            <span class="copyright">
              <a href="#"><i class="fa fa-file-code-o"></i> Site policy</a> |
              <i class="fa fa-copyright"></i> 2017 Three for Flavin.
            </span>
          </div>
        </div>
      </footer> <!-- .global-footer-wrapper -->
    </div> <!-- .global -->

    <!-- Popup menu -->
    <nav :class="['global-popup-nav-wrapper', { 'menu-shown': menuShown }]"
         id="global-popup-nav">
      <div class="global-popup-nav">
        <ul class="primary-nav">
          <li class="nav-item"><a href="#">News</a></li>
          <li class="nav-item"><a href="#">Live</a></li>
          <li class="nav-item"><a href="#">Works</a></li>
          <li class="nav-item"><a href="#">Profile</a></li>
        </ul>

        <ul class="secondary-nav">
          <li class="nav-item">Top</li>
          <li class="nav-item">Contact</li>
          <li class="nav-item">Site policy</li>
        </ul>
      </div>
    </nav>

    <!-- Popup menu trigger -->
    <div id="global-popup-nav-trigger-wrapper">
      <div :class="['global-popup-nav-trigger', { 'menu-shown': menuShown }]"
           v-on:click="trigger">
        <span class="icon-menu-hidden"><i class="fa fa-th-list"></i></span>
        <span class="icon-menu-shown"><i class="fa fa-times"></i></span>
      </div> <!-- .global-popup-nav-trigger -->
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
