<?php

/**
 * Title: Header - Default
 * Slug: research-amp-theme/header-default
 * Description: Default header
 * blockTypes: core/template-part/header
 * Inserter: true
 */

if ( wp_installing() ) {
	return;
}

if ( ! class_exists( '\SSRC\RAMP\Util\Navigation' ) ) {
	return;
}

printf(
	'<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"8px","right":"0px","bottom":"8px","left":"0px"}}},"backgroundColor":"text-color","className":"secondary-nav has-white-color has-text-color","layout":{"inherit":true}} -->' .
	'<div class="wp-block-group secondary-nav has-white-color has-text-color-background-color has-text-color has-background has-link-color" style="padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px">' .
		'<!-- wp:navigation {"ref":%d,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->' .
		'%s' .
		'<!-- /wp:navigation -->' .
	'</div>' .
	'<!-- /wp:group -->' .
	'<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"30px","top":"30px"},"margin":{"bottom":"-1rem"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|text-color","width":"1px"},"left":{"width":"0px","style":"none"}}},"className":"header-default ramp-container","layout":{"inherit":true}} -->' .
	'<div class="wp-block-group header-default ramp-container" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--text-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:30px;padding-bottom:30px;margin-bottom:-1rem;">' .
		'<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"header-inner"} -->' .
		'<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile header-inner" style="">' .
			'<!-- wp:column {"verticalAlignment": "center", "className": "header-logo-column"} -->' .
			'<div class="wp-block-column is-vertically-aligned-center header-logo-column">' .
				'<!-- wp:site-logo {"width":300} /-->' .
				'<!-- wp:site-tagline /-->' .
			'</div>' .
			'<!-- /wp:column -->' .
			'<!-- wp:column {"verticalAlignment": "center", "className": "header-nav-column"} -->' .
			'<div class="wp-block-column is-vertically-aligned-center header-nav-column">' .
				'<!-- wp:columns {"isStackedOnMobile":false,"className":"nav-and-search"} -->' .
				'<div class="wp-block-columns is-not-stacked-on-mobile nav-and-search">' .
					'<!-- wp:column -->' .
					'<div class="wp-block-column">' .
						'<!-- wp:navigation {"ref":%d, "layout": {"type": "flex", "justifyContent": "right"}, "style":{"typography":{"fontWeight":"600"},"spacing":{"blockGap":"32px"}}} -->' .
						'%s' .
						'<!-- /wp:navigation -->' .
					'</div>' .
					'<!-- /wp:column -->' .
					'<!-- wp:column {"width":"30px"} -->' .
					'<div class="wp-block-column" style="flex-basis:30px">' .
						'<!-- wp:research-amp/nav-search /-->' .
					'</div>' .
					'<!-- /wp:column -->' .
				'</div>' .
				'<!-- /wp:columns -->' .
			'</div>' .
			'<!-- /wp:column -->' .
		'</div>' .
		'<!-- /wp:columns -->' .
	'</div>' .
	'<!-- /wp:group -->',
	SSRC\RAMP\Util\Navigation::get_nav_id( 'secondary-nav' ),
	SSRC\RAMP\Util\Navigation::get_default_secondary_nav_items(),
	SSRC\RAMP\Util\Navigation::get_nav_id( 'primary-nav' ),
	SSRC\RAMP\Util\Navigation::get_default_primary_nav_items()
);
