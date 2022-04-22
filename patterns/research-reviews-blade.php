<?php

/**
 * Title: Research Reviews Blade
 * Slug: ramp-theme/research-reviews-blade
 * Description: A preview of Research Reviews, useful for the home page.
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

$archive_link = get_post_type_archive_link( 'ramp_review' );

printf(
	'<!-- wp:group { "tagName":"section","layout":{"inherit":true}, "className": "item-type-block ramp-container" } -->
	<section class="wp-block-group item-type-block ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h2 class="has-h-5-font-size" id="research-reviews-blade" style="text-transform:uppercase;"><a href="%s">%s</a></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/research-review-teasers {"variationType":"grid","contentMode":"all", "horizontalSwipe": true, "order":"random","numberOfItems":3} /-->
	</section>
	<!-- /wp:group -->',
	esc_url( $archive_link ),
	esc_html__( 'Research Reviews', 'ramp-theme' ),
	esc_url( $archive_link ),
	esc_html__( 'More Research Reviews', 'ramp-theme' )
);
