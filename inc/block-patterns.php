<?php

/**
 * Registers block patterns and their categories.
 */
function ramp_theme_register_block_patterns() {
	$block_pattern_categories = [
		'ramp-theme'                => [ 'label' => __( 'RAMP', 'ramp-theme' ) ],
		'ramp-theme/footers'        => [ 'label' => __( 'RAMP Footers', 'ramp-theme' ) ],
		'ramp-theme/headers'        => [ 'label' => __( 'RAMP Headers', 'ramp-theme' ) ],
		'ramp-theme/content-blades' => [ 'label' => __( 'RAMP Content Blades', 'ramp-theme' ) ],
	];

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = [
		// Headers
		'header-default',
		'header-condensed',
		'header-centered',

		// Content blades
		'articles-blade',
		'research-topics-blade',
		'rt-articles-blade',
		'rt-citations-blade',
		'rt-news-items-blade',
		'rt-research-reviews-blade',
	];

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'ramp-theme/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'ramp_theme_register_block_patterns', 9 );
