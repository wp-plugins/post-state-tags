<?php
/*
Plugin Name: Post State Tags
Plugin URI: https://wordpress.org/plugins/post-state-tags/
Description: Make your WordPress post state list stand out and add tags (draft, pending, sticky, etc)
Author: BRANDbrilliance
Version: 1.0.1
Author URI: http://www.brandbrilliance.co.za
*/

function post_state_tags_files() {
  wp_enqueue_style( 'post_state_tags', plugins_url('css/style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'post_state_tags_files' );
add_action( 'login_enqueue_scripts', 'post_state_tags_files' );

/* Custom tag styling of post state, including removal of seperators */
add_filter( 'display_post_states', 'post_state_tags_post_state' );
function post_state_tags_post_state ( $post_states ) {
	if ( !empty($post_states) ) {
		foreach ( $post_states as $key=>&$state ) {
			// add sub-class to status
			$state = '<span class="'. $key.' states">' . $state . '</span>'; // strtolower( $state )
		}
		echo ' <span class="post-state">'. implode('</span> <span class="post-state">', $post_states) . '</span>';
		//return $post_states;
	}
}

?>
