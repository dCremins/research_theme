<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return '&hellip; <span class="more"> <span class="glyphicon glyphicon-bold-arrow"></span></span>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function excerpt_length() {
  return 20;
}
add_filter('excerpt_length', __NAMESPACE__ . '\\excerpt_length');

add_action( 'show_user_profile', __NAMESPACE__ . '\\user_resume' );
add_action( 'edit_user_profile', __NAMESPACE__ . '\\user_resume' );
add_action( 'personal_options_update', __NAMESPACE__ . '\\save_user_resume' );
add_action( 'edit_user_profile_update', __NAMESPACE__ . '\\save_user_resume' );

function user_resume( $user ) { ?>

	<h3>Resume</h3>

	<table class="form-table">

		<tr>
			<th><label for="resume">Upload Your Resume</label></th>

			<td>
				<input type="file" name="resume" id="resume" value="<?php echo esc_attr( get_the_author_meta( 'resume', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>

	</table>
<?php }


function save_user_resume( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'resume', $_POST['resume'] );
}
