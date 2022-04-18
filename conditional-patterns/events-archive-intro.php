<?php

/**
 * Title: Events Archive Intro
 * Slug: ramp-theme/events-archive-intro
 * Description: The introductory section of the Events archive
 * Inserter: false
 * Categories: ramp-theme
 */

printf(
	'<!-- wp:group {"layout":{"inherit":true},"className":"directory-intro"} -->
	<div class="wp-block-group directory-intro">
		<!-- wp:heading -->
		<h2>%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"%s"} -->
		<p></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->',
	esc_html__( 'Events', 'ramp-theme' ),
	esc_html__( 'Enter a description of the Events archive', 'ramp-theme' )
);