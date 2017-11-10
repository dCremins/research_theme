<?php
if(function_exists('get_field')){
  // check if the repeater field has rows of data
  if( have_rows('files') ):
    // loop through the rows of data
    echo '<div class="attachment-box">';
    echo '<h3>Project Resources</h3>';
    echo '<ul>';
      while ( have_rows('files') ) : the_row();
          // display a sub field value
          $file = get_sub_field('file');
          $title = get_sub_field('title');
          $type = get_sub_field('type');
          echo '<li class="research-files"><a href="'.$file['url'].'">'.$title.'</a> [' . $type . ']</li>';
      endwhile;
    echo '</ul>';
    echo '</div>';
  else :
      // no rows found
  endif;
}
?>
