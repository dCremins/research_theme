<?php
if (class_exists( 'Bylines\Objects\Byline' )) {
	if (get_queried_object()->description) {
		$author = get_queried_object();

		// If Has Photo
		if (has_post_thumbnail($author->ID)){
			echo '<div class="author-photo">'
			. get_the_post_thumbnail($author->ID, 'author-post-thumbnail')
	    . '</div>';
		}
		// Description
		echo '<div class="category-description';
		if (has_post_thumbnail($author->ID)){
			echo 'with-photo';
		}
		echo '">';

		echo '<p>' . $author->description . '</p>';

		if ( get_the_author_meta( 'email') ) {
			echo '<a href="mailto:';
			the_author_meta( 'email' );
			echo '">Contact this author</a>';
		}

		$file = get_field('file_test', $author->ID);

		if ( $author->email && $file  ) {
				echo ' | ';
		 }

		if ( $file ) {
			echo '<a href="' . $file['url'] . '">Resume</a>';
		}

		echo '</div>';
	}
}

?>
