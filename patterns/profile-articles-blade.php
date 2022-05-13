<?php

/**
 * Title: Articles Blade for Profiles
 * Slug: research-amp-theme/profile-articles-blade
 * Description: A preview of recent Articles associated with a specific Profile.
 * Inserter: true
 * Categories: research-amp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading	{"level":3,"fontSize":"h6"} -->
				<h3 class="has-h-6-font-size" id="articles-blade">%s</h3>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:research-amp/article-teasers {"contentMode":"auto", "numberOfItems": 3, "order": "latest", "variationType":"list"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Associated Articles', 'research-amp-theme' )
);
