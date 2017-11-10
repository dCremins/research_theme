<?php
/**
 * Template Name: Extended Flex
 */
?>

<?php
// check if the flexible content field has rows of data
if( have_rows('content_row') ) {
echo '<section class="flex">';
     // loop through the rows of data
    while ( have_rows('content_row') ) : the_row();
    if (get_row_layout() == "column") {
      echo '<div class="column">';
    } elseif (get_row_layout() == "row") {
      echo '<div class="row">';
    }

               // loop through the rows of data
              while ( has_sub_field('content') ) :
                //echo '<div class="column-content">';

                  if( get_row_layout() == 'text' ) {

                  	the_sub_field('text');

                  } elseif ( get_row_layout() == 'image' ) {
                    $image = get_sub_field('image');
                    echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';

                  } elseif ( get_row_layout() == 'file' ) {
                    $file = get_sub_field('file');
                    echo '<p><a href="'.$file->guid.'" target="_blank">'.$file->post_title.'</a></p>';
                  }

                  //echo '</div>';
              endwhile;
        echo '</div>';
    endwhile;
    echo '</section>';
}
 ?>
