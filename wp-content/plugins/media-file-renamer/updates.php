<?php

class Meow_MFRH_Updates {

  private $core = null;
	private $admin = null;

	public function __construct( $core, $admin ) {
    $this->core = $core;
		$this->admin = $admin;

		$this->init_actions();

		// Support for WPML
		if ( function_exists( 'icl_object_id' ) )
			require( 'plugins/wpml.php' );
		// Support for Beaver Builder
		if ( class_exists( 'FLBuilderModel' ) )
			require( 'plugins/beaverbuilder.php' );
  }

	function init_actions() {
		if ( get_option( "mfrh_update_posts", true ) )
			add_action( 'mfrh_url_renamed', array( $this, 'action_update_posts' ), 10, 3 );
		if ( get_option( "mfrh_update_postmeta", true ) )
			add_action( 'mfrh_url_renamed', array( $this, 'action_update_postmeta' ), 10, 3 );
		if ( get_option( "mfrh_rename_guid" ) )
			add_action( 'mfrh_media_renamed', array( $this, 'action_rename_guid' ), 10, 3 );
	}

	// Mass update of all the meta with the new filenames
	function action_update_postmeta( $post, $orig_image_url, $new_image_url ) {
		global $wpdb;
		$query = $wpdb->prepare( "UPDATE $wpdb->postmeta 
			SET meta_value = '%s'
			WHERE meta_key <> '_original_filename'
			AND (TRIM(meta_value) = '%s'
			OR TRIM(meta_value) = '%s'
		);", $new_image_url, $orig_image_url, str_replace( ' ', '%20', $orig_image_url ) );
		$query_revert = $wpdb->prepare( "UPDATE $wpdb->postmeta 
			SET meta_value = '%s'
			WHERE meta_key <> '_original_filename'
			AND meta_value = '%s';
		", $orig_image_url, $new_image_url );
		$wpdb->query( $query );
		$this->core->log_sql( $query, $query_revert );
		$this->core->log( "Meta\t$orig_image_url -> $new_image_url" );
	}

	// Mass update of all the articles with the new filenames
	function action_update_posts( $post, $orig_image_url, $new_image_url ) {
		global $wpdb;

		// Content
		$query = $wpdb->prepare( "UPDATE $wpdb->posts 
			SET post_content = REPLACE(post_content, '%s', '%s')
			WHERE post_status != 'inherit'
			AND post_status != 'trash'
			AND post_type != 'attachment'
			AND post_type NOT LIKE '%acf-%'
			AND post_type NOT LIKE '%edd_%'
			AND post_type != 'shop_order'
			AND post_type != 'shop_order_refund'
			AND post_type != 'nav_menu_item'
			AND post_type != 'revision'
			AND post_type != 'auto-draft'", $orig_image_url, $new_image_url );
		$query_revert = $wpdb->prepare( "UPDATE $wpdb->posts 
			SET post_content = REPLACE(post_content, '%s', '%s')
			WHERE post_status != 'inherit'
			AND post_status != 'trash'
			AND post_type != 'attachment'
			AND post_type NOT LIKE '%acf-%'
			AND post_type NOT LIKE '%edd_%'
			AND post_type != 'shop_order'
			AND post_type != 'shop_order_refund'
			AND post_type != 'nav_menu_item'
			AND post_type != 'revision'
			AND post_type != 'auto-draft'", $new_image_url, $orig_image_url );
		$wpdb->query( $query );
		$this->core->log_sql( $query, $query_revert );
		$this->core->log( "Content\t$orig_image_url -> $new_image_url" );
		
		// Excerpt
		$query = $wpdb->prepare( "UPDATE $wpdb->posts 
			SET post_excerpt = REPLACE(post_excerpt, '%s', '%s')
			WHERE post_status != 'inherit'
			AND post_status != 'trash'
			AND post_type != 'attachment'
			AND post_type NOT LIKE '%acf-%'
			AND post_type NOT LIKE '%edd_%'
			AND post_type != 'shop_order'
			AND post_type != 'shop_order_refund'
			AND post_type != 'nav_menu_item'
			AND post_type != 'revision'
			AND post_type != 'auto-draft'", $orig_image_url, $new_image_url );
		$query_revert = $wpdb->prepare( "UPDATE $wpdb->posts 
			SET post_excerpt = REPLACE(post_excerpt, '%s', '%s')
			WHERE post_status != 'inherit'
			AND post_status != 'trash'
			AND post_type != 'attachment'
			AND post_type NOT LIKE '%acf-%'
			AND post_type NOT LIKE '%edd_%'
			AND post_type != 'shop_order'
			AND post_type != 'shop_order_refund'
			AND post_type != 'nav_menu_item'
			AND post_type != 'revision'
			AND post_type != 'auto-draft'", $new_image_url, $orig_image_url );
		$wpdb->query( $query );
		$this->core->log_sql( $query, $query_revert );
		$this->core->log( "Excerpt\t$orig_image_url -> $new_image_url" );
  }
  
  // The GUID should never be updated but... this will if the option is checked.
	// [TigrouMeow] It the recent version of WordPress, the GUID is not part of the $post (even though it is in database)
	// Explanation: http://pods.io/2013/07/17/dont-use-the-guid-field-ever-ever-ever/
	function action_rename_guid( $post, $old_filepath, $new_filepath ) {
		$meta = wp_get_attachment_metadata( $post['ID'] );
		$old_guid = get_the_guid( $post['ID'] );
		if ( $meta )
			$new_filepath = wp_get_attachment_url( $post['ID'] );
		global $wpdb;
		$query = $wpdb->prepare( "UPDATE $wpdb->posts SET guid = '%s' WHERE ID = '%d'", $new_filepath,  $post['ID'] );
		$query_revert = $wpdb->prepare( "UPDATE $wpdb->posts SET guid = '%s' WHERE ID = '%d'", $old_guid,  $post['ID'] );
		$this->core->log_sql( $query, $query_revert );
		$wpdb->query( $query );
		clean_post_cache( $post['ID'] );
		$this->core->log( "GUID\t$old_guid -> $new_filepath." );
  }

}