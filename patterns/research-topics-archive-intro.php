<?php

/**
 * Title: Research Topics Archive Intro
 * Slug: ramp-theme/research-topics-archive-intro
 * Description: The introductory section of the Research Topics archive
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
	esc_html__( 'Research Topics', 'ramp-theme' ),
	esc_html__( 'Enter a description of the Research Topics directory', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Topics Archive Intro', 'ramp-theme' ),
	'description' => __( 'The introductory section of the Research Topics archive', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => false,
	'categories'  => [ 'ramp-theme' ],
];
