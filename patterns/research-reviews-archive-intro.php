<?php

/**
 * Title: Research Reviews Archive Intro
 * Slug: research-amp-theme/research-reviews-archive-intro
 * Description: The introductory section of the Research Reviews archive
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
	esc_html__( 'Research Reviews', 'research-amp-theme' ),
	esc_html__( 'Enter a description of the Research Reviews directory', 'research-amp-theme' )
);
