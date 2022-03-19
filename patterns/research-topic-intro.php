<?php

$pattern_content = sprintf(
	'<!-- wp:group {"className":"item-intro"} -->
	<div class="wp-block-group item-intro">
		<!-- wp:paragraph {"className":"item-intro-item-type"} -->
			<p class="item-intro-item-type">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:query {"className":"ramp-page-section","query":{"offset":0,"postType":"ramp_topic","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":1,"inherit":true}} -->
		<div class="wp-block-query ramp-page-section">
			<!-- wp:post-template -->
				<!-- wp:post-title /-->
				<!-- wp:post-content {"className":"enforce-reading-width"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->',
	__( 'Research Topic', 'ramp' )
);

return [
	'title'       => __( 'Research Topic Intro', 'ramp-theme' ),
	'description' => __( 'The intro section for individual Research Topics.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme' ],
];
