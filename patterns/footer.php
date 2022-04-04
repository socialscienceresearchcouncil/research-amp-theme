<?php
/**
 * Title: Foter
 * Slug: ramp-theme/footer
 * blockTypes: core/template-part/footer
 * Inserter: true
 */

$bottom_contents = [
	// translators: site name
	esc_html( sprintf( __( 'Copyright &#169; %s', 'ramp-theme' ), get_option( 'blogname' ) ) ),

	// translators: 1. URL of Research AMP project, 2. URL of Social Science Research Council
	sprintf(
		__( 'Powered by <a href="%1$s">Research AMP</a> - a product of the <a href="%2$s">Social Science Research Council</a>', 'ramp-theme' ),
		'https://researchamp.org',
		'https://ssrc.org'
	)
];

/**
 * First group is for background, second for "inherit" layout.
 */
$pattern_content = sprintf(
	'<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"96px"}}}} -->' .
	'<div class="wp-block-group" style="margin-top:96px">' .
		'<!-- wp:separator {"color":"almost-black","className":"is-style-wide"} -->' .
			'<hr class="wp-block-separator has-text-color has-background has-almost-black-background-color has-almost-black-color is-style-wide"/>' .
		'<!-- /wp:separator -->' .

		'<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"white"} -->' .
		'<div class="wp-block-group has-white-background-color has-background" style="padding-top:50px;padding-bottom:50px;">' .
			'<!-- wp:group {"layout":{"inherit":true}} -->' .
			'<div class="wp-block-group">' .
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
					'<!-- wp:navigation {"ref":%d} -->' .
						'%s' .
					'<!-- /wp:navigation -->' .
				'</div>' .
				'<!-- /wp:group -->' .

			'</div>' .
			'<!-- /wp:group -->' .
		'</div>' .
		'<!-- /wp:group -->' .

		'<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"backgroundColor":"light-grey","className":"footer-funders"} -->' .
		'<div class="wp-block-group footer-funders has-light-grey-background-color has-background" style="padding-top:40px;padding-bottom:40px">' .
			'<!-- wp:group {"layout":{"inherit":true}} -->' .
			'<div class="wp-block-group">' .
				'<!-- wp:paragraph {"placeholder":"%s"} -->' .
				'<p></p>' .
				'<!-- /wp:paragraph -->' .
			'</div>' .
			'<!-- /wp:group -->' .
		'</div>' .
		'<!-- /wp:group -->' .

		'<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"12px","bottom":"24px"}}},"backgroundColor":"almost-black","textColor":"white","className":"footer-bottom"} -->'.
		'<div class="wp-block-group footer-bottom has-white-color has-almost-black-background-color has-text-color has-background has-link-color" style="padding-top:12px;padding-bottom:24px">'.
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
	esc_html__( 'Place funder logos and links here', 'ramp-theme' ),
	esc_html__( 'Place copyright info, links to Privacy Policy and Terms of Conditions, and other footer links here', 'ramp-theme' ),
	implode( ' &nbsp;/&nbsp; ', $bottom_contents )
);

$footer_props = array(
	'title'      => __( 'Footer', 'ramp-theme' ),
	'categories' => [ 'ramp-theme/footers' ],
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => $pattern_content,
);

return $footer_props;
