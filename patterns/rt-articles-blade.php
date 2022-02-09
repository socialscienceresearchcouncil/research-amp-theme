<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section"} -->
	<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
	<header class="wp-block-group item-type-block-header">
	<!-- wp:heading --><h2 id="articles-blade">%s</h2><!-- /wp:heading -->

	<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

	</header><!-- /wp:group -->

	<!-- wp:ramp/article-teasers {"researchTopic":"auto"} /--></section>

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
