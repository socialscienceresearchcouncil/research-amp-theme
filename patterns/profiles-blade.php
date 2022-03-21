<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"fontSize":"h4"} -->
				<h2 class="has-h-4-font-size" id="profiles-blade">%s</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/profile-teasers {"contentMode": "all", "numberOfItems": "4"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Profiles', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_profile' ) ),
	esc_html__( 'More Profiles', 'ramp-theme' )
);

return [
	'title'       => __( 'Profiles Blade', 'ramp-theme' ),
	'description' => __( 'Lists Profiles from your network.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
