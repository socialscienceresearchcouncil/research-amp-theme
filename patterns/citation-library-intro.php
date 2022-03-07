<?php

$pattern_content = sprintf(
	'<!-- wp:group {"layout":{"inherit":true},"className":"directory-intro"} -->
	<div class="wp-block-group">
		<!-- wp:heading -->
		<h2>%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"%s"} -->
		<p></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"className": "recent-citations-heading"} -->
		<h2 class="recent-citations-heading">%s</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->',
	esc_html__( 'Citation Library', 'ramp-theme' ),
	esc_html__( 'Enter a description for the Citation Library.', 'ramp-theme' ),
	esc_html__( 'Recent Citations', 'ramp-theme' )
);

return [
	'title'       => __( 'Citation Library Intro', 'ramp-theme' ),
	'description' => __( 'The introductory section of the Citations Library', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => false,
	'categories'  => [ 'ramp-theme' ],
];
