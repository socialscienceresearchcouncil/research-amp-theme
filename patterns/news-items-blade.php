<?php

/**
 * Title: News Items Blade
 * Slug: research-amp-theme/news-items-blade
 * Description: A preview of recent and featured news items, useful for the home page.
 * Inserter: true
 * Categories: research-amp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}, "className": "item-type-block ramp-container" } -->
	<section class="wp-block-group item-type-block ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h2 class="has-h-5-font-size" id="news-items-blade" style="text-transform:uppercase;">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:research-amp/news-item-teasers {"contentMode":"all", "numberOfItems": 6, "showFeaturedItem": true, "variationType":"grid"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'News Items', 'research-amp-theme' ),
	esc_url( get_post_type_archive_link( 'post' ) ),
	esc_html__( 'More News Items', 'research-amp-theme' )
);
