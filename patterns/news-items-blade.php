<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"fontSize":"medium"} -->
				<h2 class="has-medium-font-size" id="news-items-blade-blade">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/news-item-teasers {"researchTopic":"all", "showFeaturedItem": true, "variationType":"two"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'News Items', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'post' ) ),
	esc_html__( 'More News Items', 'ramp-theme' )
);

return [
	'title'       => __( 'News Items Blade', 'ramp-theme' ),
	'description' => __( 'A preview of recent and featured news items, useful for the home page.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
