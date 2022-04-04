<?php

/**
 * Title: Citations Blade for Profiles
 * Slug: ramp-theme/profile-citations-blade
 * Description: A preview of recent Citations associated with a specific Profile.
 * Inserter: false
 * Categories: ramp-theme/content-blades
 */

printf(
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
