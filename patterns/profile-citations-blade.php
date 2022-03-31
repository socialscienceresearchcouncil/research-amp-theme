<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading	{"level":3,"fontSize":"h6"} -->
				<h3 class="has-h-6-font-size" id="citations-blade">%s</h3>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/citation-teasers {"contentMode":"auto", "numberOfItems": 4, "showRowRules": true} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Featured Publications', 'ramp-theme' )
);

return [
	'title'       => __( 'Citations Blade for Profiles', 'ramp-theme' ),
	'description' => __( 'A preview of recent Citations associated with a specific Profile.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
