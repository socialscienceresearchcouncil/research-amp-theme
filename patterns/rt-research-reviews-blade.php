<?php
/**
 * Title: Research Reviews Blade for Research Topic
 * Slug: research-amp-theme/rt-research-reviews-blade
 * Description: A list of Research Reviews associated with a specific Research Topic
 * Inserter: true
 * Categories: research-amp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","className":"item-type-block ramp-page-section ramp-container"} -->
	<section class="wp-block-group item-type-block ramp-page-section ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"level":3, "style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h3 class="has-h-5-font-size" id="research-reviews-blade" style="text-transform: uppercase;">%s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:research-amp/research-review-teasers {"contentMode":"auto", "variationType":"list", "numberOfItems": 2, "order":"latest"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Research Reviews', 'research-amp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_review' ) ),
	esc_html__( 'More Research Reviews', 'research-amp-theme' )
);
