<?php

$term_id           = isset( $args['term_id'] ) ? (int) $args['term_id'] : 0;
$rt_map            = disinfo_app()->get_cpttax_map( 'research_topic' );
$research_topic_id = $rt_map->get_post_id_for_term_id( $term_id );

if ( $research_topic_id ) {
	$term      = get_term( $term_id );
	$term_name = $term->name;

	$term_link  = get_permalink( $research_topic_id );

	if ( $term_link ) {
		printf(
			'<a href="%s" title="%s" rel="tag" class="research-field-tag %s">%s</a>',
			esc_attr( $term_link ),
			esc_html( sprintf( __( 'View all posts in %s', 'just-tech' ), $term_name ) ),
			'ramp-tag',
			$term_name
		);
	}
}
