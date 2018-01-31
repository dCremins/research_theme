<?php
if(class_exists('acf')){
	// check if the repeater field has rows of data
	if( have_rows('files') ) {
		// loop through the rows of data
		echo '<div class="attachment-box">';
		echo '<h3>Project Resources</h3>';
		echo '<ul>';
		while ( have_rows('files') ) {
			the_row();
			// display a sub field value
			$file = get_sub_field('file');
			$title = get_sub_field('text');
			$type = get_sub_field('type');
			$text = get_sub_field('link');
			$link = '';

			if($text) {
				$link = $text;
			} else {
				$link = $file['url'];
			}

			echo '<li class="research-files"><a href="'
				. $link
				. '">'
				. $title
				. '</a> ['
				. $type
				. ']</li>';
		}
		echo '</ul>';
		echo '</div>';
	}
}
?>
