<?php

/**
 * Title: Research AMP 404
 * Slug: research-amp-theme/404
 * Description: Content of 404 page
 * Inserter: true
 * Categories: ramp-theme
 */

?>

<!-- wp:heading {"level":"1", "fontSize":"h3"} -->
<h1 class="has-h-3-font-size"><?php esc_html_e( 'Page not found.', 'research-amp-theme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( "Sorry, the page you were looking for doesn't exist or has been moved. Return to the homepage, or search for something else.", 'research-amp-theme' ); ?></p>
<!-- /wp:paragraph -->

<form method="get" action="<?php echo esc_url( home_url() ); ?>">
	<div class="site-search-fields">
		<input type="text" class="site-search" name="s" />
		<input type="submit" class="site-search-submit" value="<?php esc_attr_e( 'Submit', 'research-amp-theme' ); ?>" />
	</div>
</form>
