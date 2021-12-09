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
			'ramp-theme-shared-styles',
			get_template_directory_uri() . '/assets/css/shared-styles.css',
			[],
			wp_get_theme()->get( 'Version' )
		);
	}
);
