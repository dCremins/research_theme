<?php if ( get_the_author_meta( 'description') ) { ?>
  <div class="author-page">

  <!-- If has Photo -->
  <?php
$ID = get_queried_object()->ID;
  if (has_post_thumbnail($ID)){?>
    <div class="author-photo">
      <?php echo get_the_post_thumbnail($ID, 'author-post-thumbnail'); ?>
    </div>
  <?php } ?>
  <!-- author-photo -->

  <!-- If has Description -->

    <div class="author-description <?php if (has_post_thumbnail($ID)){echo 'with-photo';}?>">
      <p><?php the_author_meta( 'description' ); ?></p>

      <?php if ( get_the_author_meta( 'email') ) { ?>
        <a href="mailto:<?php the_author_meta( 'email' ); ?>">Contact this author</a>
      <?php }

      $file = get_field('file_test', $ID);

      if ( get_the_author_meta( 'email') && $file  ) {
          echo ' | ';
       }

      if ( $file ) {?>
        <a href="<?php echo $file['url']; ?>">Resume</a>
      <?php } ?>

    </div>
  <!-- author-description -->

</div>

<?php } ?>
