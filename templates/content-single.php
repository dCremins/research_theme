<?php while (have_posts()) : the_post();
?>
  <article <?php post_class('post-single'); ?>>
    <div class="entry-content">
      <?php get_template_part('templates/entry-meta'); ?>
      <?php the_content(); ?>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
    </div>

    <div class="entry-data">
      <?php get_template_part('templates/attachments');?>
      <?php get_template_part('templates/categoryMeta');?>
    </div>

  </article>
<?php endwhile; ?>
