<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-light navbar-full transparent-nav">
  <div class="container-fluid">
    <div class="navbar-header page-scroll">
      <a class="navbar-brand page-scroll text-hide" href="<?= esc_url(home_url('/')); ?>"><img src="/wp-content/themes/healthy/dist/images/logo.png" alt="Bexar County Health Collaborative" class="img-fluid"></a>

      <button id="navbar-toggle" class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-2x fa-bars"></i></button>
    </div>

    <div class="collapse navbar-toggleable-md" id="navbar-collapse">
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline navbar-form" method="get">
        <button class="btn btn-response" type="submit"><i class="fa fa-2x fa-search"></i></button>
        <input type="text" class="form-control" placeholder="Enter Search Term">
      </form> <!-- .searchform -->

      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'depth'          => 2,
          'container'      => false,
          'menu_class'     => 'nav navbar-nav',
          'walker'         => new \jorgelsaud\WordpressTools\NavWalker()
        ]);
      endif;
      ?>
    </div>
  </div>
</nav>
