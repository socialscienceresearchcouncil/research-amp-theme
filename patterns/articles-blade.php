<?php

/**
 * Title: Articles Blade
 * Slug: ramp-theme/articles-blade
 * Description: A two-column preview of recent and featured articles, useful for the home page.
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}, "className": "item-type-block ramp-container" } -->
	<section class="wp-block-group item-type-block ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h2 class="has-h-5-font-size" id="articles-blade" style="text-transform:uppercase;">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/article-teasers { "contentMode":"all", "featuredItemId": 0, "order": "latest", "variationType":"featured" } /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Articles', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_article' ) ),
	esc_html__( 'More Articles', 'ramp-theme' )
);
