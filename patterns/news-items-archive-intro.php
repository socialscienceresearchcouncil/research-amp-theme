<?php

/**
 * Title: News Items Archive Intro
 * Slug: ramp-theme/news-items-archive-intro
 * Description: The introductory section of the News Items archive
 * Inserter: false
 * Categories: ramp-theme
 */

printf(
	'<!-- wp:group {"layout":{"inherit":true},"className":"directory-intro"} -->
	<div class="wp-block-group">
		<!-- wp:heading -->
		<h2>%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"placeholder":"%s"} -->
		<p></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->',
	esc_html__( 'News Items', 'ramp-theme' ),
	esc_html__( 'Enter a description of the News Items archive', 'ramp-theme' )
);
