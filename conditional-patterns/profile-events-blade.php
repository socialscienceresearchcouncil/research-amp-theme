<?php

/**
 * Title: Events Blade for Profiles
 * Slug: ramp-theme/profile-events-blade
 * Description: A preview of upcoming Events associated with a specific Profile.
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading	{"level":3,"fontSize":"h6"} -->
				<h3 class="has-h-6-font-size" id="events-blade">%s</h3>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/event-teasers {"contentMode":"auto", "numberOfItems": 3, "variationType":"list"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Featured Events', 'research-amp-theme' )
);
