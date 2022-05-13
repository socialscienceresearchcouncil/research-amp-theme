<?php

/**
 * Title: Events Blade
 * Slug: research-amp-theme/events-blade
 * Description: A preview of upcoming events.
 * Inserter: true
 * Categories: research-amp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}, "className": "item-type-block ramp-container" } -->
	<section class="wp-block-group item-type-block ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:32px;">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h2 class="has-h-5-font-size" id="events-blade" style="text-transform:uppercase">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:research-amp/event-teasers {"contentMode":"all", "numberOfItems": 3} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Upcoming Events', 'research-amp-theme' ),
	esc_url( tribe_events_get_url() ),
	esc_html__( 'More Events', 'research-amp-theme' )
);
