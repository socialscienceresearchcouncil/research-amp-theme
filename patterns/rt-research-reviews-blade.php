<?php
$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","className":"item-type-block ramp-page-section"} -->
	<section class="wp-block-group item-type-block ramp-page-section">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading	{"level":3,"fontSize":"h4"} -->
				<h3 class="has-h-4-font-size" id="research-reviews-blade">%s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/research-review-teasers {"contentMode":"auto", "variationType":"list", "numberOfItems": 2, "order":"latest"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Research Reviews', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_review' ) ),
	esc_html__( 'More Research Reviews', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Reviews Blade for Research Topic', 'ramp-theme' ),
	'description' => __( 'A list of Research Reviews associated with a specific Research Topic', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
