<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <h1 <?php if(is_search()){echo 'class="search-title"';}?>><?= Titles\title(); ?></h1>
  <?php if (is_single()) {
    if ( has_post_thumbnail() ) {
      echo '<div class= "post-image">';
      the_post_thumbnail('single-post-thumbnail');
      echo '</div>';
    }
  }?>
  <?php if (function_exists('breadcrumbs')){breadcrumbs();}?>
</div>
