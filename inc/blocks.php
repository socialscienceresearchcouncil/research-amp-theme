<?php

/**
 * Enqueue block assets: Backend.
 */
function ramp_register_block_assets() {
	$blocks_dir = get_template_directory() . '/build/';

	$blocks_asset_file = include $blocks_dir . 'index.asset.php';

	// Replace "wp-blockEditor" with "wp-block-editor".
	$blocks_asset_file['dependencies'] = array_replace(
		$blocks_asset_file['dependencies'],
		array_fill_keys(
			array_keys( $blocks_asset_file['dependencies'], 'wp-blockEditor' ),
			'wp-block-editor'
		)
	);

	wp_enqueue_script(
		'ramp-theme-blocks',
		get_template_directory_uri() . '/build/index.js',
		$blocks_asset_file['dependencies'],
		$blocks_asset_file['version']
	);
}
add_action( 'enqueue_block_editor_assets', 'ramp_register_block_assets' );

/**
 * Register block patterns.
 *
 * We use block patterns in a number of places in order to provide translatable
 * strings in default templates.
 */
function ramp_register_block_patterns() {
	register_block_pattern_category(
		'ramp-theme/content-blades',
		[
			'label' => __( 'Content Blades', 'ramp' ),
		]

	);

	register_block_pattern(
		'ramp-theme/research-topics-blade',
		[
			'title'       => __( 'Research Topics Blade', 'ramp-theme' ),
			'description' => __( 'A preview of Research Topics, useful for the home page.', 'ramp' ),
			'content'     => sprintf( '<!-- wp:group {"tagName":"section"} -->
<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
<header class="wp-block-group item-type-block-header">
<!-- wp:heading --><h2 id="research-topics-blade">%s</h2><!-- /wp:heading -->

<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

</header><!-- /wp:group -->

<!-- wp:ramp/research-topic-teasers /--></section>

<!-- /wp:group -->',
								esc_html__( 'Research Topics', 'ramp-theme' ),
								esc_url( get_post_type_archive_link( 'ssrc_restop_pt' ) ),
								esc_html__( 'More Research Topics', 'ramp-theme' )
							),
			'inserter'    => true,
			'categories'  => [ 'ramp-theme/content-blades' ],
		]
	);

	register_block_pattern(
		'ramp-theme/articles-blade',
		[
			'title'       => __( 'Articles Blade', 'ramp-theme' ),
			'description' => __( 'A two-column preview of recent and featured articles, useful for the home page.', 'ramp' ),
			'content'     => sprintf( '<!-- wp:group {"tagName":"section"} -->
<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
<header class="wp-block-group item-type-block-header">
<!-- wp:heading --><h2 id="articles-blade">%s</h2><!-- /wp:heading -->

<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

</header><!-- /wp:group -->

<!-- wp:ramp/article-teasers-with-featured-article /--></section>

<!-- /wp:group -->',
								esc_html__( 'Articles', 'ramp-theme' ),
								esc_url( get_post_type_archive_link( 'ssrc_expref_pt' ) ),
								esc_html__( 'More Articles', 'ramp-theme' )
							),
			'inserter'    => true,
			'categories'  => [ 'ramp-theme/content-blades' ],
		]
	);

	register_block_pattern(
		'ramp-theme/rt-articles-blade',
		[
			'title'       => __( 'Articles Blade for Research Topic', 'ramp-theme' ),
			'description' => __( 'A preview of recent articles associated with a specific Research Topic', 'ramp' ),
			'content'     => sprintf( '<!-- wp:group {"tagName":"section"} -->
<section class="wp-block-group item-type-block"><!-- wp:group {"tagName":"header"} -->
<header class="wp-block-group item-type-block-header">
<!-- wp:heading --><h2 id="articles-blade">%s</h2><!-- /wp:heading -->

<!-- wp:paragraph --><p class="item-type-block-all-link"><a href="%s">%s</a></p><!-- /wp:paragraph -->

</header><!-- /wp:group -->

<!-- wp:ramp/article-teasers {"researchTopic":"auto"} /--></section>

<!-- /wp:group -->',
								esc_html__( 'Articles', 'ramp-theme' ),
								esc_url( get_post_type_archive_link( 'ssrc_expref_pt' ) ),
								esc_html__( 'More Articles', 'ramp-theme' )
							),
			'inserter'    => true,
			'categories'  => [ 'ramp-theme/content-blades' ],
		]
	);
}
add_action( 'init', 'ramp_register_block_patterns' );
