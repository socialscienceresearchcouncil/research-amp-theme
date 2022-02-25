<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
	<header class="wp-block-group item-type-block-header">
	<!-- wp:heading {"fontSize":"medium-large"} -->
	<h2 class="has-medium-large-font-size" id="articles-blade">%s</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

	</header><!-- /wp:group -->

	<!-- wp:ramp/article-teasers { "researchTopic": "all", "showFeaturedItem": true, "variationType": "columns" } /--></section>

	<!-- /wp:group -->',
	esc_html__( 'Articles', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ramp_article' ) ),
	esc_html__( 'More Articles', 'ramp-theme' )
);

return [
	'title'       => __( 'Articles Blade', 'ramp-theme' ),
	'description' => __( 'A two-column preview of recent and featured articles, useful for the home page.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
