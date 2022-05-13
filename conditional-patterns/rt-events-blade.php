<?php

/**
 * Title: Events Blade for Research Topic
 * Slug: research-amp-theme/rt-events-blade
 * Description: A preview of upcoming events associated with a specific Research Topic
 * Inserter: true
 * Categories: research-amp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:32px;">
			<!-- wp:heading {"level":3, "style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h3 class="has-h-5-font-size" id="events-blade" style="text-transform: uppercase;">%s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/event-teasers {"contentMode":"auto", "numberOfItems": 3} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Events', 'research-amp-theme' ),
	esc_url( tribe_events_get_url() ),
	esc_html__( 'More Events', 'research-amp-theme' )
);
