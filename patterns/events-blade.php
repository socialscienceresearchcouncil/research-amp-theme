<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
	<header class="wp-block-group item-type-block-header">
	<!-- wp:heading --><h2 id="news-items-blade">%s</h2><!-- /wp:heading -->

	<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

	</header><!-- /wp:group -->

	<!-- wp:ramp/event-teasers {"researchTopic":"all"} /--></section>

	<!-- /wp:group -->',
	esc_html__( 'Upcoming Events', 'ramp-theme' ),
	esc_url( tribe_events_get_url() ),
	esc_html__( 'More Events', 'ramp-theme' )
);

return [
	'title'       => __( 'Events Blade', 'ramp-theme' ),
	'description' => __( 'A preview of upcoming events.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
