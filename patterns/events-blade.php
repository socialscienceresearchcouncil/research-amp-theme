<?php

/**
 * Title: Events Blade
 * Slug: ramp-theme/events-blade
 * Description: A preview of upcoming events.
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:32px;">
			<!-- wp:heading {"fontSize":"h4"} -->
				<h2 class="has-h-4-font-size" id="news-items-blade-blade">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/event-teasers {"contentMode":"all", "numberOfItems": 3} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Upcoming Events', 'ramp-theme' ),
	esc_url( tribe_events_get_url() ),
	esc_html__( 'More Events', 'ramp-theme' )
);
