<?php

/**
 * Title: Header - Centered
 * Slug: research-amp-theme/header-centered
 * Description: Centered header
 * blockTypes: core/template-part/header
 * Inserter: true
 */

if ( wp_installing() ) {
	return;
}

printf(
	'<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"8px","right":"0px","bottom":"8px","left":"0px"}}},"backgroundColor":"almost-black","className":"secondary-nav has-white-color has-text-color","layout":{"inherit":true}} -->' .
	'<div class="wp-block-group secondary-nav has-white-color has-almost-black-background-color has-text-color has-background has-link-color" style="padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px">' .
		'<!-- wp:navigation {"ref":%d,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->' .
		'%s' .
		'<!-- /wp:navigation -->' .
	'</div>' .
	'<!-- /wp:group -->' .

	'<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"28px","top":"16px"}}},"className":"header-centered","layout":{"inherit":true}} -->' .
	'<div class="wp-block-group header-centered" style="padding-top:16px;padding-bottom:28px;">' .
		'<!-- wp:group {"className":"header-inner","layout":{"type":"default"}} -->' .
		'<div class="wp-block-group header-inner">' .
			'<!-- wp:group {"layout":{"wideSize":"300px","contentSize":"300px"}} -->' .
			'<div class="wp-block-group">' .
				'<!-- wp:site-logo {"width":300} /-->' .
				'<!-- wp:site-tagline /-->' .
			'</div>' .
			'<!-- /wp:group -->' .

			'<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px"}}},"className":"nav-and-search-group"} -->' .
			'<div class="wp-block-group nav-and-search-group" style="padding-top:20px">' .
				'<!-- wp:columns {"isStackedOnMobile":false,"className":"nav-and-search"} -->' .
				'<div class="wp-block-columns is-not-stacked-on-mobile nav-and-search">' .
					'<!-- wp:column -->' .
					'<div class="wp-block-column">' .
						'<!-- wp:navigation {"ref":%d,"style":{"typography":{"fontWeight":"600"}}} -->' .
						'%s' .
						'<!-- /wp:navigation -->' .
					'</div>' .
					'<!-- /wp:column -->' .

					'<!-- wp:column {"width":"18px"} -->' .
					'<div class="wp-block-column" style="flex-basis:18px">' .
						'<!-- wp:buttons {"className":"nav-search-area"} -->' .
						'<div class="wp-block-buttons nav-search-area">' .
							'<!-- wp:button {"className":"nav-search"} -->' .
							'<div class="wp-block-button nav-search"><a class="wp-block-button__link">%s</a></div>' .
							'<!-- /wp:button -->' .
						'</div>' .
						'<!-- /wp:buttons -->' .
					'</div>' .
					'<!-- /wp:column -->' .
				'</div>' .
				'<!-- /wp:columns -->' .
			'</div>' .
			'<!-- /wp:group -->' .
		'</div>' .
		'<!-- /wp:group -->' .
	'</div>' .
	'<!-- /wp:group -->',
	SSRC\RAMP\Util\Navigation::get_nav_id( 'secondary-nav' ),
	SSRC\RAMP\Util\Navigation::get_default_secondary_nav_items(),
	SSRC\RAMP\Util\Navigation::get_nav_id( 'primary-nav' ),
	SSRC\RAMP\Util\Navigation::get_default_primary_nav_items(),
	esc_html__( 'Search', 'research-amp-theme' )
);
