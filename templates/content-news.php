<article class='article-table'>
  <div class="table-head">
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </div>

  <div class="table-links">
    <?php if (class_exists('acf')) {
      if ( have_rows('files') ) : the_row();
               $type = get_sub_field('type');
               echo $type;
           endif;
    } 
     ?>
  </div>

  <div class="table-authors">
    <?php if ( function_exists( 'coauthors_posts_links' ) ) {
      coauthors_posts_links();
    }?>
  </div>

  <div class="table-date">
    <?php echo get_the_date('F'); ?> <br>
    <?php echo get_the_date('Y'); ?>
  </div>

  <div class="table-authors">
    <?php
      the_category();
    ?>
  </div>

</article>

 <?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
