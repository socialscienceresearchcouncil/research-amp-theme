<?php

$pattern_content = '<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:separator {"className":"home-page-separator","color":"medium-grey"} -->
	<hr class="wp-block-separator has-text-color has-background has-medium-grey-background-color has-medium-grey-color home-page-separator"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->';

return [
	'title'       => __( 'Research AMP Separator', 'ramp-theme' ),
	'description' => __( 'A separator used throughout the Research AMP theme.', 'ramp' ),
	'content'     => $pattern_content,
	'inserter'    => true,
];
