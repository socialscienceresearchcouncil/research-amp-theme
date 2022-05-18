<?php

/**
 * Title: News Items Blade for Research Topic
 * Slug: research-amp-theme/rt-news-items-blade
 * Description: A preview of recent News Items associated with a specific Research Topic
 * Inserter: true
 * Categories: research-amp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block ramp-container"} -->
	<section class="wp-block-group ramp-page-section item-type-block ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"level":3, "style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h3 class="has-h-5-font-size" id="news-items-blade" style="text-transform: uppercase;">%s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

	<!-- wp:research-amp/news-item-teasers {"contentMode":"auto", "numberOfItems": 3, "order": "latest", "showResearchTopics": true, "variationType": "grid"} /--></section>

	<!-- /wp:group -->',
	esc_html__( 'News Items', 'research-amp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_news_item' ) ),
	esc_html__( 'More News Items', 'research-amp-theme' )
);
