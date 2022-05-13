<?php

/**
 * Registers block patterns and their categories.
 */
function ramp_theme_register_block_patterns() {
	$block_pattern_categories = [
		'research-amp-theme'                => [ 'label' => __( 'RAMP', 'research-amp-theme' ) ],
		'research-amp-theme/footers'        => [ 'label' => __( 'RAMP Footers', 'research-amp-theme' ) ],
		'research-amp-theme/headers'        => [ 'label' => __( 'RAMP Headers', 'research-amp-theme' ) ],
		'research-amp-theme/content-blades' => [ 'label' => __( 'RAMP Content Blades', 'research-amp-theme' ) ],
	];

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$additional_patterns = [];

	if ( defined( 'TRIBE_EVENTS_FILE' ) ) {
		$additional_patterns[] = 'event-profiles-blade';
		$additional_patterns[] = 'events-archive-intro';
		$additional_patterns[] = 'events-blade';
		$additional_patterns[] = 'profile-events-blade';
		$additional_patterns[] = 'rt-events-blade';
	}

	$default_headers = array(
		'title'         => 'Title',
		'slug'          => 'Slug',
		'description'   => 'Description',
		'viewportWidth' => 'Viewport Width',
		'categories'    => 'Categories',
		'keywords'      => 'Keywords',
		'blockTypes'    => 'Block Types',
		'inserter'      => 'Inserter',
	);

	foreach ( $additional_patterns as $block_pattern ) {
		$file = get_template_directory() . '/conditional-patterns/' . $block_pattern . '.php';
		$pattern_data = get_file_data( $file, $default_headers );

		ob_start();
		include $file;
		$pattern_data['content'] = ob_get_clean();
		if ( ! $pattern_data['content'] ) {
			continue;
		}

		register_block_pattern( 'research-amp-theme/' . $block_pattern, $pattern_data );
	}
}
add_action( 'init', 'ramp_theme_register_block_patterns', 15 );
