<?php

/**
 * Title: Research Reviews Archive Intro
 * Slug: ramp-theme/research-reviews-archive-intro
 * Description: The introductory section of the Research Reviews archive
 * Inserter: false
 * Categories: ramp-theme
 */

$pattern_content = sprintf(
	'<!-- wp:group {"layout":{"inherit":true},"className":"directory-intro"} -->
	<div class="wp-block-group">
		<!-- wp:heading -->
		<h2>%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"%s"} -->
		<p></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->',
	esc_html__( 'Research Reviews', 'ramp-theme' ),
	esc_html__( 'Enter a description of the Research Reviews directory', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Reviews Archive Intro', 'ramp-theme' ),
	'description' => __( 'The introductory section of the Research Reviews archive', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => false,
	'categories'  => [ 'ramp-theme' ],
];
