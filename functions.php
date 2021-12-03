<?php

add_action(
	'after_setup_theme',
	function() {
		require __DIR__ . '/inc/blocks.php';
	}
);

