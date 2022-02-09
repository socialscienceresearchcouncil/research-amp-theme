<?php

add_action(
	'after_setup_theme',
	function() {
		require __DIR__ . '/inc/blocks.php';
		require __DIR__ . '/inc/block-patterns.php';
		require __DIR__ . '/inc/navigation.php';

		add_editor_style(
			[
				'./assets/css/shared-styles.css',
			]
		);
	}
);

add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_style(
			'ramp-theme',
			get_template_directory_uri() . '/style.css',
			[],
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'ramp-theme-shared-styles',
			get_template_directory_uri() . '/assets/css/shared-styles.css',
			[],
			wp_get_theme()->get( 'Version' )
		);
	}
);

/**
 * Gets the database ID of the media item of the default logo.
 */
function ramp_theme_get_default_logo_id() {
	return 70564;
}

add_filter(
	'theme_mod_custom_logo',
	function( $logo_id ) {
		if ( $logo_id ) {
			return $logo_id;
		}

		return (string) ramp_theme_get_default_logo_id();
	}
);

add_filter(
	'get_custom_logo',
	function( $logo ) {
		return $logo;
		if ( $logo ) {
			return $logo;
		}

		$logo = sprintf(
			'<a class="custom-logo-link" rel="home" href="%s"><img src="%s" alt="%s" width="200" height="76" /></a>',
			esc_url( home_url() ),
			esc_url( get_template_directory_uri() . '/assets/img/research-amp.png' ),
			__( 'RAMP logo', 'ramp-theme' )
		);

		return $logo;
	}
);
