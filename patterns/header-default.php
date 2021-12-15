<?php
/**
 * Default header block pattern
 */
/*
'<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"28px"}}},"className":"header-inner","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"noWrap"}} -->' .
'<!-- wp:group {"className":"header-inner","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"noWrap"}} -->' .
*/
$header_props = array(
	'title'      => __( 'Default header', 'ramp-theme' ),
	'categories' => [ 'ramp-theme/headers' ],
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => sprintf(
						'<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"28px"}}},"className":"header-default","backgroundColor":"light-grey","layout":{"inherit":true}} -->' .
						'<div class="wp-block-group header-default has-light-grey-background-color has-background" style="padding-bottom:28px;">' .
							'<!-- wp:navigation-area {"area":"secondary","className":"secondary-nav"} -->' .
								'<!-- wp:navigation {"ref":%d,"backgroundColor":"cyan-bluish-gray","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->' .
								'%s' .
								'<!-- /wp:navigation -->' .
							'<!-- /wp:navigation-area -->' .

							'<!-- wp:group {"className":"header-inner","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"noWrap"}} -->' .
							'<div class="wp-block-group header-inner">' .
								'<!-- wp:group {"layout":{"wideSize":"300px","contentSize":"300px"}} -->' .
								'<div class="wp-block-group">' .
									'<!-- wp:site-logo {"width":200} /-->' .
									'<!-- wp:site-tagline /-->' .
								'</div>' .
								'<!-- /wp:group -->' .

								'<!-- wp:navigation-area {"area":"primary","className":"primary-nav"} -->' .
									'<!-- wp:navigation {"ref":%d} -->' .
									'%s' .
									'<!-- /wp:navigation -->' .
								'<!-- /wp:navigation-area -->' .
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
