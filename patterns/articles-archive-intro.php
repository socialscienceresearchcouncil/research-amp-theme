<?php

/**
 * Title: Articles Archive Intro
 * Slug: research-amp-theme/articles-archive-intro
 * Description: The introductory section of the Articles archive
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
	esc_html__( 'Articles', 'research-amp-theme' ),
	esc_html__( 'Enter a description of the Articles directory', 'research-amp-theme' )
);
