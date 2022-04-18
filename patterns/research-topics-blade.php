<?php

/**
 * Title: Research Topics Blade
 * Slug: ramp-theme/research-topics-blade
 * Description: A preview of Research Topics, useful for the home page.
 * Inserter: true
 * Categories: ramp-theme/content-blades
 */

$archive_link = get_post_type_archive_link( 'ramp_topic' );

printf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"h5"} -->
				<h2 class="has-h-5-font-size" id="research-topics-blade" style="text-transform:uppercase;"><a href="%s">%s</a></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->
		<!-- wp:ramp/research-topic-teasers /-->
	</section>
	<!-- /wp:group -->',
	esc_url( $archive_link ),
	esc_html__( 'Research Topics', 'ramp-theme' ),
	esc_url( $archive_link ),
	esc_html__( 'More Research Topics', 'ramp-theme' )
);
