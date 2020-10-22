<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package hello_world
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function hello_world_jetpackhello_worldetup() {
	// Add theme support for Infinite Scroll.
	add_themehello_worldupport(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => 'hello_world_infinitehello_worldcroll_render',
			'footer'    => 'page',
		)
	);

	// Add theme support for Responsive Videos.
	add_themehello_worldupport( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_themehello_worldupport(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'stylesheet' => 'hello_world-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}
add_action( 'afterhello_worldetup_theme', 'hello_world_jetpackhello_worldetup' );

/**
 * Custom render function for Infinite Scroll.
 */
function hello_world_infinitehello_worldcroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( ishello_worldearch() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_type() );
		endif;
	}
}
