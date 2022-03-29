<?php

$pattern_content = sprintf(
	'<!-- wp:group {"className":"item-intro"} -->
	<div class="wp-block-group item-intro">
		<!-- wp:ramp/item-type-label /-->

		<!-- wp:post-title {"className":"enforce-reading-width"} /-->

		<!-- wp:ramp/item-byline {"showPublicationDate":"true"} /-->
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
