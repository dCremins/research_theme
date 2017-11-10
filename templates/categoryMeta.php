<?php
$category = get_the_category();

//echo var_dump($category);
if($category){
  echo '<div class="attachment-box">';
  echo '<h3>Categories</h3>';
  echo '<ul>';
  foreach ($category as $cat) {
    $category_id = get_cat_ID( $cat->name );
    $category_link = get_category_link( $category_id );
    echo '<li class="research-files"><a href="' . $category_link . '">' . $cat->name . '</a></li>';
  }
}
?>
