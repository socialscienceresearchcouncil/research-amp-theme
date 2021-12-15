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
