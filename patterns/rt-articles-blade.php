<?php

/**
 * Title: Articles Blade for Research Topic
 * Slug: ramp-theme/rt-articles-blade
 * Description: A preview of recent Articles associated with a specific Research Topic
 * Inserter: true
 * Categories: ramp-theme/content/blades
 */

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","className":"ramp-page-section item-type-block"} -->
	<section class="wp-block-group ramp-page-section item-type-block">
		<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"8px"}}}} -->
		<header class="wp-block-group item-type-block-header" style="padding-bottom:8px;">
			<!-- wp:heading	{"level":3,"fontSize":"h4"} -->
				<h3 class="has-h-4-font-size" id="articles-blade">%s</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
				<p class="item-type-block-all-link"><a href="%s">%s</a></p>
			<!-- /wp:paragraph -->
		</header>
		<!-- /wp:group -->

		<!-- wp:ramp/article-teasers {"contentMode":"auto", "numberOfItems": 3, "order": "latest", "variationType":"grid"} /-->
	</section>
	<!-- /wp:group -->',
	esc_html__( 'Articles', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_article' ) ),
	esc_html__( 'More Articles', 'ramp-theme' )
);

return [
	'title'       => __( 'Articles Blade for Research Topic', 'ramp-theme' ),
	'description' => __( 'A preview of recent Articles associated with a specific Research Topic', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
