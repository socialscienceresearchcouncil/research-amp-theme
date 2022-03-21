<?php

$archive_link = get_post_type_archive_link( 'ramp_review' );

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"fontSize":"h4"} -->
				<h2 class="has-h-4-font-size" id="research-reviews-blade"><a href="%s">%s</a></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/research-review-teasers {"variationType":"grid","researchTopic":"all","order":"random","numberOfItems":"3"} /-->
	</section>
	<!-- /wp:group -->',
	esc_url( $archive_link ),
	esc_html__( 'Research Reviews', 'ramp-theme' ),
	esc_url( $archive_link ),
	esc_html__( 'More Research Reviews', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Reviews Blade', 'ramp-theme' ),
	'description' => __( 'A preview of Research Reviews, useful for the home page.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
