<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO
 */

if ( ! interface_exists( 'WPSEO_Watcher' ) ) {
	/**
	 * An interface for registering integrations with WordPress
	 */
	interface WPSEO_Watcher {

		/**
		 * Registers all hooks to WordPress
		 */
		public function register_hooks();

		/**
		 * Detects if the slug changed.
		 *
		 * @param integer $post_id     The ID of the post. Unused.
		 * @param WP_Post $post        The post with the new values.
		 * @param WP_Post $post_before The post with the previous values.
		 *
		 * @return void
		 */
		public function detect_slug_change( $post_id, $post, $post_before );

		/**
		 * Adds a notification to be shown on the next page request.
		 *
		 * @return void
		 */
		public function add_notification();
	}
}
