<?php

$pattern_content = sprintf(
	'<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ramp-blue","textColor":"white","layout":{"inherit":true}} -->
	<section class="wp-block-group has-white-color has-ramp-blue-background-color has-text-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
	<h2 class="has-text-align-center has-white-color has-text-color" id="welcome-to-mediawell">%s</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">%s</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">%s</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":"outline"} -->
	<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link">%s</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></section>
	<!-- /wp:group -->',
	esc_html( sprintf( __( 'Welcome to %s', 'ramp-theme' ), get_option( 'blogname' ) ) ),
	esc_html__( 'Get involved in our project.', 'ramp-theme' ),
	esc_html__( 'Use this call-to-action to invite users to learn more about your project, or to get involved.', 'ramp-theme' ),
	esc_html__( 'Learn more', 'ramp-theme' )
);

return [
	'title'       => __( 'Call to Action', 'ramp-theme' ),
	'description' => __( 'Invite users to learn more or get involved', 'ramp-theme' ),
	'content'     => $pattern_content,
	'inserter'    => true,
	'categories'  => [ 'ramp-theme' ],
];
