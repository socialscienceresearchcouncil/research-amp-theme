<?php

/**
 * Title: Profiles Archive Intro
 * Slug: research-amp-theme/profiles-archive-intro
 * Description: The introductory section of the Profiles archive
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
	esc_html__( 'Profiles', 'research-amp-theme' ),
	esc_html__( 'Enter a description for the Profiles archive.', 'research-amp-theme' )
);
