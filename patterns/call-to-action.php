<?php

/**
 * Title: Call to Action
 * Slug: research-amp-theme/call-to-action
 * Description: Invite users to learn more or get involved
 * Inserter: true
 * Categories: ramp-theme
 */

printf(
	'<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"24px"}},"backgroundColor":"ramp-secondary","textColor":"white","layout":{"inherit":true}} -->
	<section class="wp-block-group has-white-color has-ramp-secondary-background-color has-text-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"h3"} -->
	<h2 class="has-text-align-center has-h-3-font-size has-white-color has-text-color" id="welcome-to-mediawell">%s</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"h5"} -->
	<p class="has-text-align-center has-h-5-font-size"><strong>%s</strong></p>
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
	esc_html( sprintf( __( 'Welcome to %s', 'research-amp-theme' ), get_option( 'blogname' ) ) ),
	esc_html__( 'Get involved in our project.', 'research-amp-theme' ),
	esc_html__( 'Use this call-to-action to invite users to learn more about your project, or to get involved.', 'research-amp-theme' ),
	esc_html__( 'Learn more', 'research-amp-theme' )
);
