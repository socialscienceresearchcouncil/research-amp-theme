<?php
/**
 * Venue template part for the Event Venue block
 *
 */

if ( ! tribe_get_venue_id() ) {
	return;
}
$attributes = $this->get( 'attributes', [] );

$phone   = tribe_get_phone();

$venue_id = tribe_get_venue_id();
$url      = get_permalink( $venue_id );
?>

<div class="tribe-block__venue__meta">
	<h3 class="tribe-events-single-section-title has-h-6-font-size"><?php esc_html_e( 'Venue', 'research-amp' ); ?></h3>

	<div class="tribe-block__venue__name">
		<?php echo tribe_get_venue_link() ?>
	</div>

	<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>

	<?php if ( tribe_address_exists() ) : ?>
		<address class="tribe-block__venue__address">
			<?php echo tribe_get_full_address(); ?>

			<?php if ( tribe_show_google_map_link() ) : ?>
				<?php echo tribe_get_map_link_html(); ?>
			<?php endif; ?>
		</address>
	<?php endif; ?>

	<?php if ( ! empty( $phone ) ) : ?>
		<span class="tribe-block__venue__phone"><?php echo $phone ?></span><br />
	<?php endif ?>

	<?php if ( ! empty( $url ) ) : ?>
		<span class="tribe-block__venue__website"><a href="<?php echo esc_url( $url ); ?>"><?php esc_html_e( 'Visit Venue Website', 'research-amp' ); ?></a></span><br />
	<?php endif ?>

	<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
</div>
