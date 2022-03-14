<?php
/**
 * Condensed header block pattern
 */
$header_props = array(
	'title'      => __( 'Header - Condensed', 'ramp-theme' ),
	'categories' => [ 'ramp-theme/headers' ],
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => sprintf(
						'<!-- wp:group {"className":"header-condensed","backgroundColor":"light-grey","layout":{"inherit":true}} -->' .
						'<div class="wp-block-group header-default has-light-grey-background-color has-background">' .
							'<!-- wp:navigation-area {"area":"secondary","className":"secondary-nav"} -->' .
								'<!-- wp:navigation {"ref":%d,"backgroundColor":"cyan-bluish-gray","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->' .
								'%s' .
								'<!-- /wp:navigation -->' .
							'<!-- /wp:navigation-area -->' .

							'<!-- wp:group {"backgroundColor":"light-grey","className":"header-inner","layout":{"type":"flex","justifyContent":"space-between"}} -->' .
							'<div class="wp-block-group header-inner has-light-grey-background-color has-background">' .
								'<!-- wp:group {"layout":{"type":"flex"}} -->' .
								'<div class="wp-block-group">' .
									'<!-- wp:site-logo {"width":300} /-->' .
									'<!-- wp:site-tagline /-->' .
								'</div>' .
								'<!-- /wp:group -->' .

								'<!-- wp:navigation-area {"area":"primary","className":"primary-nav"} -->' .
									'<!-- wp:navigation {"ref":%d,"overlayMenu":"always"} -->' .
									'%s' .
									'<!-- /wp:navigation -->' .
								'<!-- /wp:navigation-area -->' .
							'</div>' .
							'<!-- /wp:group -->' .
						'</div>' .
						'<!-- /wp:group -->',
						SSRC\RAMP\Util\Navigation::get_nav_id( 'secondary-nav' ),
						SSRC\RAMP\Util\Navigation::get_default_secondary_nav_items(),
						SSRC\RAMP\Util\Navigation::get_nav_id( 'primary-nav' ),
						SSRC\RAMP\Util\Navigation::get_default_primary_nav_items()
					),
);

return $header_props;
