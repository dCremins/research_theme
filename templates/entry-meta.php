<?php
echo '<div class="byline author vcard">';
	if (class_exists( 'Bylines\Objects\Byline' )) {
		echo '<h2 class="author-name">'
		. the_bylines_posts_links()
		. '</h2>';
	}
echo '</div>';
 ?>
