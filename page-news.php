<?php
/**
 * Template Name: Alternate Research Template One
 */
?>

<?php
$orderby = isset($_GET['orderby'])?$_GET['orderby']:'date';
$order = isset($_GET['order'])?$_GET['order']:'DESC';
$meta = isset($_GET['meta'])?$_GET['meta']:'';
$args = array(
	'post_type'   => 'post',
	'orderby'			=> $orderby,
	'order'				=> $order,
	'meta_key'		=> $meta
);
$args['paged'] = get_query_var( 'paged' )
    ? get_query_var( 'paged' )
    : 1;
$my_new_query = new WP_Query( $args );
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $my_new_query;

?>
<div class="total-table">
  <article class='article-head'>
    <div class="table-head">
      <a class="table-link" href="?order=<?php echo (($order=='DESC')?'ASC':'DESC');?>&orderby=title&meta=">
				Title
				<?php if($orderby == 'title') {
					echo '<span class="glyphicon ' . (($order=='DESC')?'glyphicon-down-bracket':'glyphicon-up-bracket') . '"></span>';
				}?>
			</a>
    </div>

    <div class="table-links">
			<a class="table-link" href="?order=<?php echo (($order=='DESC')?'ASC':'DESC');?>&orderby=meta_value&meta=files_0_type">
				Type
				<?php if($meta == 'files_0_type') {
					echo '<span class="glyphicon ' . (($order=='DESC')?'glyphicon-down-bracket':'glyphicon-up-bracket') . '"></span>';
				}?>
			</a>
    </div>

    <div class="table-authors">
				Authors
    </div>

    <div class="table-date">
			<a class="table-link" href="?order=<?php echo (($order=='DESC')?'ASC':'DESC');?>&orderby=date&meta=">
				Date
				<?php if($orderby == 'date') {
					echo '<span class="glyphicon ' . (($order=='DESC')?'glyphicon-down-bracket':'glyphicon-up-bracket') . '"></span>';
				}?>
			</a>
    </div>

    <div class="table-authors">
				Categories
    </div>

  </article>

 <?php
 //echo var_dump($my_new_query);
 if ($my_new_query->have_posts()) {
	 while ($my_new_query->have_posts()) : $my_new_query->the_post();
	   get_template_part('templates/content', 'news');
	 endwhile; ?>
	 </div> <br>
	 <?php
	 $arg = [
		 'prev_text' => '<span class="glyphicon glyphicon-bold-arrow-left" aria-hidden="true"></span> Older Posts',
		 'next_text' => 'Newer Posts <span class="glyphicon glyphicon-bold-arrow-right" aria-hidden="true"></span>',
		 'screen_reader_text' => ''
	 ];
	 the_posts_navigation($arg);
 } else { ?>
	 <div class="alert alert-warning">
		 <?php _e('Sorry, no results were found.', 'sage'); ?>
	 </div>
	 <?php get_search_form();
 } ?>
