<?php

$pattern_content = sprintf(
	'<!-- wp:group {"className":"item-intro"} -->
	<div class="wp-block-group item-intro">
		<!-- wp:paragraph {"className":"item-intro-item-type"} -->
			<p class="item-intro-item-type">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-title /-->
	</div>
	<!-- /wp:group -->',
	__( 'Research Review', 'ramp' )
);

return [
	'title'       => __( 'Research Review Intro', 'ramp-theme' ),
	'description' => __( 'The intro section for individual Research Reviews.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme' ],
];
