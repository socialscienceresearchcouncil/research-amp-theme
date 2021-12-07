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
		'ramp-theme/research-topics-heading',
		[
			'title'      => __( 'Research Topics Heading', 'ramp-theme' ),
			'content'    => '<!-- wp:heading -->
							<h2 id="research-topics-header">' .  esc_html__( 'Research Topics', 'ramp-theme' ) . '</h2>
							<!-- /wp:heading -->',
			'inserter'   => false,
		]
	);

	register_block_pattern(
		'ramp-theme/research-topics-all-link',
		[
			'title'      => __( 'More Research Topics', 'ramp-theme' ),
			'content'    => '<!-- wp:paragraph -->' .
							sprintf(
								'<p class="item-type-block-all-link"><a href="%s">%s</a></p>',
								esc_attr( get_post_type_archive_link( 'ssrc_restop_pt' ) ),
								esc_html__( 'More Research Topics', 'ramp-theme' )
							) .
							'<!-- /wp:paragraph -->',
			'inserter'   => false,
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

<!-- wp:pattern {"slug":"ramp-theme/articles-all-link"} /--></header>

<!-- /wp:group -->

<!-- wp:ramp/article-teasers /--></section>

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
