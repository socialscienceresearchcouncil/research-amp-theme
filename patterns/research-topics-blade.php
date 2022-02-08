<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
	<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
	<header class="wp-block-group item-type-block-header">

	<!-- wp:heading -->
	<h2 id="research-topics-blade">%s</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}, "typography":{"fontFamily":"georgia"}} -->
	<p class="item-type-block-all-link" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-family:var(--wp--preset--font-family--georgia);"><a href="%s">%s</a></p>
	<!-- /wp:paragraph -->

	</header><!-- /wp:group -->

	<!-- wp:ramp/research-topic-teasers /--></section>

	<!-- /wp:group -->',
	esc_html__( 'Research Topics', 'ramp-theme' ),
	esc_url( get_post_type_archive_link( 'ssrc_restop_pt' ) ),
	esc_html__( 'More Research Topics', 'ramp-theme' )
);

return [
	'title'       => __( 'Research Topics Blade', 'ramp-theme' ),
	'description' => __( 'A preview of Research Topics, useful for the home page.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme/content-blades' ],
];
