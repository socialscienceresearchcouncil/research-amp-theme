<?php
/**
 * Condensed header block pattern
 */
$header_props = array(
	'title'      => __( 'Header - Centered', 'ramp-theme' ),
	'categories' => [ 'ramp-theme/headers' ],
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => sprintf(
						'<!-- wp:group {"className":"header-centered","backgroundColor":"light-grey","layout":{"inherit":true}} -->' .
						'<div class="wp-block-group header-default has-light-grey-background-color has-background">' .
							'<!-- wp:navigation-area {"area":"secondary","className":"secondary-nav"} -->' .
								'<!-- wp:navigation {"ref":%d,"backgroundColor":"cyan-bluish-gray","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->' .
								'%s' .
								'<!-- /wp:navigation -->' .
							'<!-- /wp:navigation-area -->' .

							'<!-- wp:group {"backgroundColor":"light-grey","className":"header-inner","layout":{"inherit":"true"}} -->' .
							'<div class="wp-block-group header-inner has-light-grey-background-color has-background">' .
								'<!-- wp:site-logo {"width":300} /-->' .
								'<!-- wp:site-tagline {"textAlign":"center"} /-->' .
							'</div>' .
							'<!-- /wp:group -->' .

							'<!-- wp:navigation-area {"area":"primary","className":"primary-nav"} -->' .
								'<!-- wp:navigation {"ref":%d,"backgroundColor":"cyan-bluish-gray","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} -->' .
								'%s' .
								'<!-- /wp:navigation -->' .
							'<!-- /wp:navigation-area -->' .
						'</div>' .
						'<!-- /wp:group -->',
						ramp_theme_get_secondary_nav_id(),
						ramp_theme_get_default_secondary_nav_items(),
						ramp_theme_get_primary_nav_id(),
						ramp_theme_get_default_primary_nav_items()
					),
);

return $header_props;
