<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <?php if (!is_user_logged_in()) : ?>
      <div id="employees" class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <a href="<?php echo wp_login_url( home_url() ); ?>" class="pull-right" title="Login"><i class="fa fa-lock"></i> Login</a>
          </div>
        </div>
      </div>
    <?php elseif (is_user_logged_in()) : ?>
      <div id="employees" class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <a href="/employees" target="_blank" class="pull-right" title="Employees"><i class="fa fa-unlock"></i> Employees</a>
          </div>
        </div>
      </div>
    <?php endif ?>

    <div id="page" class="site-wrapper">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div class="wrap container-fluid" role="document">
        <div class="content row">
          <main class="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
    </div>
  </body>
</html>
