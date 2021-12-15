<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section"} -->
	<section class="wp-block-group">
		<!-- wp:heading	-->
		<h2 id="research-reviews-blade">%s</h2>
		<!-- /wp:heading -->

		<!-- wp:ramp/research-review-teasers /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Research Reviews', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Reviews Blade for Research Topic', 'ramp-theme' ),
	'description' => __( 'A list of Research Reviews associated with a specific Research Topic', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
