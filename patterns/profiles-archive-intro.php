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
	</div>
	<!-- /wp:group -->',
	esc_html__( 'Profiles', 'ramp-theme' ),
	esc_html__( 'Enter a description for the Profiles archive.', 'ramp-theme' )
);

return [
	'title'       => __( 'Profiles Archive Intro', 'ramp-theme' ),
	'description' => __( 'The introductory section of the Profiles archive', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => false,
	'categories'  => [ 'ramp-theme' ],
];
