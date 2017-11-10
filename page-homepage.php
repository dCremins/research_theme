<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php if (is_dynamic_sidebar('sidebar-home-left') || is_dynamic_sidebar('sidebar-home-right') || is_dynamic_sidebar('sidebar-home-wide')) { ?>
  <div class="widgets">
<?php } ?>

<?php if (is_dynamic_sidebar('sidebar-home-left') && is_dynamic_sidebar('sidebar-home-right')) { ?>
  <div class='home-left'>
    <?php dynamic_sidebar('sidebar-home-left'); ?>
  </div>

  <div class='home-right'>
    <?php dynamic_sidebar('sidebar-home-right'); ?>
  </div>

<?php }

if (is_dynamic_sidebar('sidebar-home-wide')) { ?>
  <div class='home-wide'>
    <?php dynamic_sidebar('sidebar-home-wide'); ?>
  </div>
<?php }

if (is_dynamic_sidebar('sidebar-home-left') || is_dynamic_sidebar('sidebar-home-right') || is_dynamic_sidebar('sidebar-home-wide')) { ?>
  </div>
<?php } ?>

<?php get_template_part('templates/content', 'page'); ?>
