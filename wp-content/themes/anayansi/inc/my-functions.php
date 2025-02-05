<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function order_desc($query) {
  if( ! is_admin()){
		if(is_post_type_archive() == 'quienes-somos') {
			$query->set( 'order', 'asc' );
		}
		else {
			$query->set( 'order', 'desc' );
		}
  }
}

add_action( 'pre_get_posts', 'order_desc' );

