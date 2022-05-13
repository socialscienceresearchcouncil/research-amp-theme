<?php
/**
 * Title: Foter
 * Slug: research-amp-theme/footer
 * blockTypes: core/template-part/footer
 * Inserter: true
 */

$bottom_contents = [
	// translators: site name
	esc_html( sprintf( __( 'Copyright &#169; %s', 'research-amp-theme' ), get_option( 'blogname' ) ) ),
];

$ramp_pages = get_option( 'ramp_pages' );
$page_links = [ 'about', 'contact' ];
foreach ( $page_links as $page_link ) {
	if ( empty( $ramp_pages[ $page_link ] ) ) {
		continue;
	}

	$link_page = get_post( $ramp_pages[ $page_link ] );
	if ( ! $link_page ) {
		continue;
	}

	$bottom_contents[] = sprintf(
		'<a href="%s">%s</a>',
		esc_url( get_permalink( $link_page ) ),
		esc_html( $link_page->post_title )
	);
}

$privacy_policy_page_id = get_option( 'wp_page_for_privacy_policy' );
if ( $privacy_policy_page_id ) {
	$privacy_policy_page = get_page( $privacy_policy_page_id );
	if ( $privacy_policy_page ) {
		$bottom_contents[] = sprintf(
			'<a href="%s">%s</a>',
			esc_url( get_permalink( $privacy_policy_page ) ),
			esc_html( $privacy_policy_page->post_title )
		);
	}
}

// translators: 1. URL of Research AMP project, 2. URL of Social Science Research Council
$bottom_contents[] = sprintf(
	__( 'Powered by <a href="%1$s">Research AMP</a> - a product of the <a href="%2$s">Social Science Research Council</a>', 'research-amp-theme' ),
	'https://researchamp.org',
	'https://ssrc.org'
);

/**
 * First group is for background, second for "inherit" layout.
 */
printf(
	'<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"96px"}}}} -->' .
	'<div class="wp-block-group" style="margin-top:96px">' .
		'<!-- wp:separator {"color":"almost-black","className":"is-style-wide"} -->' .
			'<hr class="wp-block-separator has-text-color has-background has-almost-black-background-color has-almost-black-color is-style-wide"/>' .
		'<!-- /wp:separator -->' .

		'<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"white"} -->' .
		'<div class="wp-block-group has-white-background-color has-background" style="padding-top:50px;padding-bottom:50px;">' .
			'<!-- wp:group {"layout":{"inherit":true}, "className": "ramp-container" } -->' .
			'<div class="wp-block-group ramp-container">' .
				'<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"noWrap"}} -->' .
				'<div class="wp-block-group">' .
					'<!-- wp:site-logo {"width":300} /-->' .

					'<!-- wp:social-links -->' .
					'<ul class="wp-block-social-links">' .
						'<!-- wp:social-link {"url":"https://twitter.com/boone","service":"twitter"} /-->' .
						'<!-- wp:social-link {"service":"instagram"} /-->' .
						'<!-- wp:social-link {"service":"facebook"} /-->' .
						'<!-- wp:social-link {"service":"mail"} /-->' .
					'</ul>' .
					'<!-- /wp:social-links -->' .
				'</div>' .
				'<!-- /wp:group -->' .

				'<!-- wp:group {"className":"footer-nav"} -->' .
				'<div class="wp-block-group footer-nav">' .
					'<!-- wp:navigation {"ref":%d, "overlayMenu":"never", "layout":{"type":"flex", "flexWrap":"wrap"}} -->' .
						'%s' .
					'<!-- /wp:navigation -->' .
				'</div>' .
				'<!-- /wp:group -->' .

			'</div>' .
			'<!-- /wp:group -->' .
		'</div>' .
		'<!-- /wp:group -->' .

		'<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"backgroundColor":"light-grey","className":"footer-funders ramp-container"} -->' .
		'<div class="wp-block-group footer-funders has-light-grey-background-color has-background ramp-container" style="padding-top:40px;padding-bottom:40px">' .
			'<!-- wp:group {"layout":{"inherit":true}} -->' .
			'<div class="wp-block-group">' .
				'<!-- wp:paragraph {"placeholder":"%s"} -->' .
				'<p></p>' .
				'<!-- /wp:paragraph -->' .
			'</div>' .
			'<!-- /wp:group -->' .
		'</div>' .
		'<!-- /wp:group -->' .

		'<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"12px","bottom":"24px"}}},"backgroundColor":"almost-black","textColor":"white","className":"footer-bottom ramp-container"} -->'.
		'<div class="wp-block-group footer-bottom has-white-color has-almost-black-background-color has-text-color has-background has-link-color ramp-container" style="padding-top:12px;padding-bottom:24px">'.
			'<!-- wp:group {"layout":{"inherit":true}} -->'.
			'<div class="wp-block-group">'.
				'<!-- wp:paragraph {"placeholder":"%s"} -->'.
				'<p>%s</p>'.
				'<!-- /wp:paragraph -->'.
			'</div>'.
			'<!-- /wp:group -->'.
		'</div>'.
		'<!-- /wp:group -->' .
	'</div>' .
	'<!-- /wp:group -->',
	SSRC\RAMP\Util\Navigation::get_nav_id( 'footer-nav' ),
	SSRC\RAMP\Util\Navigation::get_default_footer_nav_items(),
	esc_html__( 'Place funder logos and links here', 'research-amp-theme' ),
	esc_html__( 'Place copyright info, links to Privacy Policy and Terms of Conditions, and other footer links here', 'research-amp-theme' ),
	implode( ' &nbsp;/&nbsp; ', $bottom_contents )
);
