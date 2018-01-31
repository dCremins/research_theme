<?php
if (class_exists( 'Bylines\Objects\Byline' )) {
	if (get_queried_object()->description) {
		$author = get_queried_object();
		echo '<div class="author-page">';
		// If Has Photo
		$photo = '';
		$resume = '';
		if (class_exists('acf')) {
			$photo = get_field('author_image', 'byline_'.$author->term_id);
			$resume = get_field('author_resume', 'byline_'.$author->term_id);
		}

		if( $photo ) {
			echo '<div class="author-photo">'
			. wp_get_attachment_image( $photo, 'author-post-thumbnail' )
			. '</div>';
		}
		// Description
		echo '<div class="author-description';
		if ($photo){
			echo ' with-photo';
		}
		echo '">';

		echo '<p>' . $author->description . '</p>';

		if ( $author->user_email ) {
			echo '<a href="mailto:'
			. $author->user_email
			. '">Contact this Author</a>';
			if ($resume) {
				echo ' | ';
			}
		}
		if ($resume) {
			echo '<a href="'
			. $resume
			. '" target="_blank">View Resume</a>';
		}

		$file = get_field('file_test', $author->ID);

		if ( $author->email && $file  ) {
				echo ' | ';
		 }

		if ( $file ) {
			echo '<a href="' . $file['url'] . '">Resume</a>';
		}

		echo '</div>';
		echo '</div>';
	}
}

?>
