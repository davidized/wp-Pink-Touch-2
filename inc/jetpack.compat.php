<?php
/**
 * Compatibility settings and functions for Jetpack from Automattic
 * See jetpack.me
 *
 * @package Pink Touch 2
 */


/**
 * Add support for Infinite Scroll.
 */
function pinktouch2_infinite_scroll_init() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'posts-wrapper',
		'footer'         => 'content',
		'footer_widgets' => array( 'sidebar-1', 'sidebar-2', 'sidebar-3' ),
	) );
}
add_action( 'after_setup_theme', 'pinktouch2_infinite_scroll_init' );