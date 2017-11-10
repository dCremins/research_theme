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
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php if (is_page() && !(is_home() || is_search() || is_category())) {
      if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'wide-page-thumbnail', array('class'=>'featured-page'));
      }
    } elseif (is_category()) {
      if (function_exists('taxonomy_images_plugin_get_queried_term_image')) {
        print apply_filters( 'taxonomy-images-queried-term-image', '', array(
          'attr'       => array(
              'class' => 'featured-page',
              ),
          'image_size' => 'wide-page-thumbnail'
      ) );
      }
    } ?>
    <div class="wrap container" role="document">
      <?php if (!is_front_page()) {
        get_template_part('templates/page', 'header');
      }
      if (is_author() && !is_search()) {
        get_template_part('templates/author', 'description');
      }?>
      <div class="content row">
        <main class="main">
          <?php
          include Wrapper\template_path(); ?>
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
  </body>
</html>
