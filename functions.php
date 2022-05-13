<?php

add_action(
	'after_setup_theme',
	function() {
		require __DIR__ . '/inc/blocks.php';
		require __DIR__ . '/inc/block-patterns.php';

		add_editor_style(
			[
				'./assets/css/shared-styles.css',
			]
		);
	}
);

/**
 * Style loader.
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_register_style(
			'research-amp-theme',
			get_template_directory_uri() . '/style.css',
			[],
			wp_get_theme()->get( 'Version' )
		);

		// Inline styles.
		wp_add_inline_style(
			'research-amp-theme',
			ramp_theme_font_styles()
		);

		wp_register_style(
			'ramp-theme-shared-styles',
			get_template_directory_uri() . '/assets/css/shared-styles.css',
			[],
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_script(
			'research-amp-theme',
			get_template_directory_uri() . '/assets/js/ramp-theme.js',
			[],
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
);

function ramp_theme_enqueue_styles() {
	wp_enqueue_style( 'ramp-theme-shared-styles' );
	wp_enqueue_style( 'research-amp-theme' );
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
	$id = get_option( 'ramp_default_logo', $attachment_id );
	return (int) $id;
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

// Prevent The Events Calendar from hijacking the loading of our block templates.
add_filter( 'tribe_events_views_v2_use_wp_template_hierarchy', '__return_true' );

/**
 * Modify default page template for Articles that have a featured image.
 */
function ramp_modify_default_article_page_template( $value, $post_id, $meta_key ) {
	if ( '_wp_page_template' !== $meta_key ) {
		return $value;
	}

	$post = get_post( $post_id );
	if ( ! $post || 'ramp_article' !== $post->post_type ) {
		return $value;
	}

	$post_thumbnail = get_the_post_thumbnail( $post_id );
	if ( ! $post_thumbnail ) {
		return $value;
	}

	return 'single-ramp_article-with-featured-image';
}
add_filter( 'default_post_metadata', 'ramp_modify_default_article_page_template', 10, 3 );
