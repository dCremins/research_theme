
<?php if ( category_description() ) :
// If a user has filled out their description, show a bio on their entries  ?>
  <div class="category-description">
    <p><?php echo category_description(); ?></p>
  </div><!-- #author-description -->
<?php endif;?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-author', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
