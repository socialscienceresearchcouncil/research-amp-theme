<?php

/**
 * Title: Profiles Blade
 * Slug: ramp-theme/profiles-blade
 * Description: Lists Profiles from your network.
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

printf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}, "className": "item-type-block ramp-container" } -->
	<section class="wp-block-group item-type-block ramp-container">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h2 class="has-h-5-font-size" id="profiles-blade" style="text-transform:uppercase;">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/profile-teasers {"contentMode": "all", "numberOfItems": 4} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Profiles', 'research-amp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_profile' ) ),
	esc_html__( 'More Profiles', 'research-amp-theme' )
);
