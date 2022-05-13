<?php

/**
 * Title: Research Topics Archive Intro
 * Slug: ramp-theme/research-topics-archive-intro
 * Description: The introductory section of the Research Topics archive
 * Inserter: false
 * Categories: ramp-theme
 */

printf(
	'<!-- wp:group {"layout":{"inherit":true},"className":"directory-intro"} -->
	<div class="wp-block-group directory-intro">
		<!-- wp:heading {"level":1} -->
		<h1>%s</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"%s"} -->
		<p></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->',
	esc_html__( 'Research Topics', 'research-amp-theme' ),
	esc_html__( 'Enter a description of the Research Topics directory', 'research-amp-theme' )
);
