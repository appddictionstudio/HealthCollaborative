<footer class="content-info">
  <div class="container">
    <div class="row flex-items-xs-center flex-items-xs-middle">
      <div class="col-xs-12 text-xs-center">
        <ul class="social-icons list-unstyled nav nav-inline">
          <li class="nav-item">
            <a href="#" alt="..." class="nav-link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" alt="..." class="nav-link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" alt="..." class="nav-link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" alt="..." class="nav-link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" alt="..." class="nav-link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>

      <div class="col-xs-12 text-xs-center">
        <address>
          The Health Collaborative<br>
          3010 N St. Mary's, Suite 1101<br>
          San Antonio, TX 78212
        </address>
      </div>

      <div class="col-xs-12 text-xs-center">
        <?php if (has_nav_menu('footer')) {
            wp_nav_menu([
              'theme_location' => 'footer',
              'depth'          => -1,
              'container'      => false,
              'menu_class'     => 'nav nav-inline',
              'walker'         => new \jorgelsaud\WordpressTools\NavWalker()
            ]);
          }
        ?>
      </div>

      <div class="col-xs-12 text-xs-center">
        <span class="copyright">Copyright &copy; 2016-2017 Bexar County Health Collaborative.</span>
        <br>Powered by <a href="http://appddictionstudio.com">Appddiction Studio</a>.
      </div>
    </div>
  </div>
</footer>


