<?php

/**
 * Title: Item Focus Tags
 * Slug: research-amp-theme/item-focus-tags
 * Description: A link to focus tags.
 * Inserter: true
 * Categories: research-amp-theme
 */

printf(
	'<!-- wp:group {"className": "item-focus-tags"} -->
	<div class="wp-block-group item-focus-tags">
		<span class="item-focus-tags-heading">%s</span>
		<!-- wp:post-terms {"term":"ramp_focus_tag"} /-->
	</div>
	<!-- /wp:group -->',
	esc_html__( 'Tagged in:', 'research-amp-theme' )
);
