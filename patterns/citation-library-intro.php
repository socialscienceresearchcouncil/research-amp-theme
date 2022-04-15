<?php

/**
 * Title: Citation Library Intro
 * Slug: ramp-theme/citation-library-intro
 * Description: The introductory section of the Citations Library
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
	<!-- /wp:group -->

	<!-- wp:heading {"className": "recent-citations-heading", "level":3, "style":{"spacing":{"margin":{"top":"48px"}}}} -->
	<h3 class="recent-citations-heading" style="margin-top:48px">%s</h3>
	<!-- /wp:heading -->
	',
	esc_html__( 'Citation Library', 'ramp-theme' ),
	esc_html__( 'Enter a description for the Citation Library.', 'ramp-theme' ),
	esc_html__( 'Recent Citations', 'ramp-theme' )
);
