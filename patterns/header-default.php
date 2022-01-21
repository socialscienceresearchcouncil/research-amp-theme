<?php
/**
 * Default header block pattern
 */
$header_props = array(
	'title'      => __( 'Default header', 'ramp-theme' ),
	'categories' => [ 'ramp-theme/headers' ],
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => sprintf(
						'<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"8px","right":"0px","bottom":"8px","left":"0px"}}},"backgroundColor":"almost-black","className":"secondary-nav has-white-color has-text-color","layout":{"inherit":true}} -->' .
						'<div class="wp-block-group secondary-nav has-white-color has-almost-black-background-color has-text-color has-background has-link-color" style="padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px">' .
							'<!-- wp:navigation {"ref":%d,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->' .
							'%s' .
							'<!-- /wp:navigation -->' .
						'</div>' .
						'<!-- /wp:group -->' .

						'<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"28px","top":"16px"}}},"className":"header-default","layout":{"inherit":true}} -->' .
						'<div class="wp-block-group header-default" style="padding-top:16px;padding-bottom:28px;">' .
							'<!-- wp:group {"className":"header-inner","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"noWrap"}} -->' .
							'<div class="wp-block-group header-inner">' .
								'<!-- wp:group {"layout":{"wideSize":"300px","contentSize":"300px"}} -->' .
								'<div class="wp-block-group">' .
									'<!-- wp:site-logo {"width":300} /-->' .
									'<!-- wp:site-tagline /-->' .
								'</div>' .
								'<!-- /wp:group -->' .

								'<!-- wp:navigation {"ref":%d} -->' .
								'%s' .
								'<!-- /wp:navigation -->' .
							'</div>' .
							'<!-- /wp:group -->' .
						'</div>' .
						'<!-- /wp:group -->',
						ramp_theme_get_secondary_nav_id(),
						ramp_theme_get_default_secondary_nav_items(),
						ramp_theme_get_primary_nav_id(),
						ramp_theme_get_default_primary_nav_items()
					),
);

return $header_props;
