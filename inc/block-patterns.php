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

	$block_patterns_to_unregister = [];

	if ( ! defined( 'TRIBE_EVENTS_FILE' ) ) {
		$block_patterns_to_unregister[] = 'events-archive-intro';
		$block_patterns_to_unregister[] = 'events-blade';
		$block_patterns_to_unregister[] = 'profile-events-blade';
		$block_patterns_to_unregister[] = 'rt-events-blade';
	}

	foreach ( $block_patterns_to_unregister as $block_pattern ) {
		unregister_block_pattern( 'ramp-theme/' . $block_pattern );
	}
}
add_action( 'init', 'ramp_theme_register_block_patterns', 9 );
