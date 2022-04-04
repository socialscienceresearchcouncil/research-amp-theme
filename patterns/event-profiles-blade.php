<?php

/**
 * Title: Profiles Blade for Event
 * Slug: ramp-theme/event-profiles-blade
 * Description: A preview of Profiles associated with a specific Event
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:32px;">
			<!-- wp:heading	{"level":3,"fontSize":"h4"} -->
				<h3 class="has-h-4-font-size" id="profiles-blade">%s</h3>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/profile-teasers {"contentMode":"auto", "numberOfItems": 4, "showRowRules": false} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Profiles', 'ramp-theme' )
);

return [
	'title'       => __( 'Profiles Blade for Event', 'ramp-theme' ),
	'description' => __( 'A preview of Profiles associated with a specific Event', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
