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
 * Attach extra styles to multiple blocks.
 */
function ramp_theme_enqueue_block_styles() {
	// An array of blocks.
	$styled_blocks = [ 'button', 'list' ];

	foreach ( $styled_blocks as $block_name ) {
		// Get the stylesheet handle. This is backwards-compatible and checks the
		// availability of the `wp_should_load_separate_core_block_assets` function,
		// and whether we want to load separate styles per-block or not.
		$handle = (
			function_exists( 'wp_should_load_separate_core_block_assets' ) &&
			wp_should_load_separate_core_block_assets()
		) ? "wp-block-$block_name" : 'wp-block-library';

		// Get the styles.
		$styles = file_get_contents( get_theme_file_path( "assets/css/blocks/$block_name.css" ) );

		// Add frontend styles.
		wp_add_inline_style( $handle, $styles );

		// Add editor styles.
		add_editor_style( "styles/blocks/$block_name.css" );
		if ( file_exists( get_theme_file_path( "styles/blocks/$block_name-editor.css" ) ) ) {
			add_editor_style( "styles/blocks/$block_name-editor.css" );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'ramp_theme_enqueue_block_styles' );
add_action( 'admin_init', 'ramp_theme_enqueue_block_styles' );
