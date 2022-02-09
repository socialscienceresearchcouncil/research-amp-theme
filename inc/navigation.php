<?php

/**
 * Fetches the primary nav ID.
 */
function ramp_theme_get_primary_nav_id() {
	return 70561;
}

/**
 * Fetches the secondary nav ID.
 */
function ramp_theme_get_secondary_nav_id() {
	return 70558;
}

/**
 * Fetches the Research Topics submenu navigation block and its children.
 *
 * @todo This works for the initial insertion, but it's not dynamic for newly created RTs.
 */
function ramp_theme_get_research_topics_submenu_block() {
	$rts = get_posts( [
		'post_type' => 'ramp_theme',
		'posts_per_page' => -1,
		'orderby' => [ 'title' => 'ASC' ],
	] );

	// This should probably be its own block.
	$research_topics_submenu_items = '';
	foreach ( $rts as $rt ) {
		$rt_item = sprintf(
			'<!-- wp:navigation-link {"label":"%s","url":"%s","id":"%d","type":"ramp_theme","kind":"post-type","isTopLevelLink":false} /-->',
			esc_attr( $rt->post_title ),
			esc_attr( get_permalink( $rt ) ),
			esc_attr( $rt->ID )
		);

		$research_topics_submenu_items .= $rt_item;
	}

	$research_topics_submenu = sprintf(
		'<!-- wp:navigation-submenu {"label":"%s","type":"","url":"%s","kind":"post-type-archive","isTopLevelItem":true} -->' .
		'%s' .
		'<!-- /wp:navigation-submenu -->',
		esc_attr( __( 'Research Topics', 'ramp' ) ),
		esc_url( get_post_type_archive_link( 'ramp_theme' ) ),
		$research_topics_submenu_items
	);

	return $research_topics_submenu;
}

/**
 * Gets the default navigation items for the primary nav.
 */
function ramp_theme_get_default_primary_nav_items() {
	$research_reviews_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"","url":"%s","kind":"post-type-archive","isTopLevelItem":true} /-->',
		esc_attr( __( 'Research Reviews', 'ramp' ) ),
		esc_url( get_post_type_archive_link( 'ssrc_lit_review' ) )
	);

	$articles_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"","url":"%s","kind":"post-type-archive","isTopLevelItem":true} /-->',
		esc_attr( __( 'Articles', 'ramp' ) ),
		esc_url( get_post_type_archive_link( 'ramp_article' ) )
	);

	$resources_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"","url":"%s","kind":"post-type-archive","isTopLevelItem":true} /-->',
		esc_attr( __( 'Resources', 'ramp' ) ),
		esc_url( '#' )
	);

	$citations_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"","url":"%s","kind":"post-type-archive","isTopLevelItem":true} /-->',
		esc_attr( __( 'Citations', 'ramp' ) ),
		esc_url( get_post_type_archive_link( 'ramp_citation' ) )
	);

	// This is a placeholder for something clickable.
	$search_item = '<!-- wp:navigation-link {"label":"Search","url":"#search","kind":"custom","isTopLevelLink":true,"className":"nav-search"} /-->';

	$items = [
		ramp_theme_get_research_topics_submenu_block(),
		$research_reviews_link,
		$articles_link,
		$resources_link,
		$citations_link,
		$search_item
	];

	return join( "\n", $items );
}

/**
 * Gets the default navigation items for the secondary nav.
 */
function ramp_theme_get_default_secondary_nav_items() {
	$get_started_page_id = 52867;

	$get_started_page = [
		'id' => $get_started_page_id,
		'url' => get_permalink( $get_started_page_id ),
		'label' => get_the_title( $get_started_page_id ),
	];

	$get_started_nav_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"page","id":%d,"url":"%s","kind":"post-type","isTopLevelLink":true} /-->',
		esc_attr( $get_started_page['label'] ),
		(int) $get_started_page['id'],
		esc_url( $get_started_page['url'] )
	);

	$contact_page = get_post( 108 );

	$contact_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"page","id":%d,"url":"%s","kind":"post-type","isTopLevelLink":true} /-->',
		esc_attr( $contact_page->post_title ),
		(int) $contact_page->ID,
		esc_url( get_permalink( $contact_page ) )
	);

	$login_link = sprintf(
		'<!-- wp:navigation-link {"label":"%s","type":"page","url":"%s","kind":"post-type","isTopLevelLink":true} /-->',
		esc_attr__( 'Log In', 'ramp' ),
		(int) 0,
		esc_url( wp_login_url() )
	);

	$items = [
		$get_started_nav_link,
		$contact_link,
		$login_link,
	];

	return join( "\n", $items );
}
