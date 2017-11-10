
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif;

while (have_posts()) : the_post();
  get_template_part('templates/content', 'search');
endwhile;

the_posts_navigation(); ?>
