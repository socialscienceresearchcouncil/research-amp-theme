<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
	<header class="wp-block-group item-type-block-header">

	<!-- wp:heading -->
	<h2 id="research-reviews-blade">%s</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

	</header><!-- /wp:group -->

	<!-- wp:ramp/research-review-teasers {"variationType":"teasers","researchTopic":"all","order":"random","numberOfItems":"3"} /--></section>

	<!-- /wp:group -->',
	esc_html__( 'Research Reviews', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_review' ) ),
	esc_html__( 'All Research Reviews', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Reviews Blade', 'ramp-theme' ),
	'description' => __( 'A preview of Research Reviews, useful for the home page.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
