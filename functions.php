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

		wp_register_style(
			'ramp-theme',
			get_template_directory_uri() . '/style.css',
			[],
			wp_get_theme()->get( 'Version' )
		);

		// Inline styles.
		wp_add_inline_style(
			'ramp-theme',
			ramp_theme_font_styles()
		);

		wp_register_style(
			'ramp-theme-shared-styles',
			get_template_directory_uri() . '/assets/css/shared-styles.css',
			[],
			wp_get_theme()->get( 'Version' )
		);
	}
);

function ramp_theme_enqueue_styles() {
	wp_enqueue_style( 'ramp-theme-shared-styles' );
	wp_enqueue_style( 'ramp-theme' );
}
add_action( 'wp_enqueue_scripts', 'ramp_theme_enqueue_styles' );
add_action( 'enqueue_block_editor_assets', 'ramp_theme_enqueue_styles' );

add_action(
	'admin_init',
	function() {
		wp_add_inline_style(
			'wp-block-library',
			ramp_theme_font_styles()
		);
	}
);

function ramp_theme_font_styles() {
	return "
	/* inter-400 - latin */
	@font-face {
	  font-family: 'Inter';
	  font-style: normal;
	  font-weight: 400;
	  font-display: swap;
	  src: url( '" . get_theme_file_uri( 'assets/fonts/Inter-Regular.ttf' ) . "') format('truetype');
	}

	/* inter-700 - latin */
	@font-face {
	  font-family: 'Inter';
	  font-style: normal;
	  font-weight: 700;
	  font-display: swap;
	  src: url( '" . get_theme_file_uri( 'assets/fonts/Inter-Bold.ttf' ) . "') format('truetype');
	}
	";
}

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
