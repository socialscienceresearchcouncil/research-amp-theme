<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section"} -->
	<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
	<header class="wp-block-group item-type-block-header">
	<!-- wp:heading --><h2 id="news-items-blade">%s</h2><!-- /wp:heading -->

	<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

	</header><!-- /wp:group -->

	<!-- wp:ramp/news-item-teasers {"researchTopic":"auto"} /--></section>

	<!-- /wp:group -->',
	esc_html__( 'News Items', 'ramp-theme' ),
	esc_url( '#' ), // @todo
	esc_html__( 'More News Items', 'ramp-theme' )
);

return [
	'title'       => __( 'News Items Blade for Research Topic', 'ramp-theme' ),
	'description' => __( 'A preview of recent News Items associated with a specific Research Topic', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
