<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading	{"level":3,"fontSize":"h4"} -->
				<h3 class="has-h-4-font-size" id="articles-blade">%s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/citation-teasers {"contentMode":"auto","numberOfItems": 3, "order": "latest", "showRowRules": false} /--></section>

	<!-- /wp:group -->',
	esc_html__( 'Citations', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_citation' ) ),
	esc_html__( 'Full Citation Library', 'ramp-theme' )
);

return [
	'title'       => __( 'Citations Blade for Research Topic', 'ramp-theme' ),
	'description' => __( 'A preview of recent Citations associated with a specific Research Topic', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
