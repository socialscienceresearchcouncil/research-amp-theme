<?php
/**
 * Block: Event Links
 */

use Tribe\Events\Views\V2\iCalendar\Links\Link_Abstract;

// don't show on password protected posts
if ( post_password_required() ) {
	return;
}

$has_google_cal = $this->attr( 'hasGoogleCalendar' );
$has_ical       = $this->attr( 'hasiCal' );


remove_filter( 'the_content', 'do_blocks', 9 );
$subscribe_links = empty( $this->get( ['subscribe_links'] ) ) ? false : $this->get( ['subscribe_links'] );

$should_render  = $subscribe_links && ( $has_google_cal || $has_ical );


if ( $has_google_cal ) {
	if ( $this->get( [ 'subscribe_links', 'gcal' ] ) instanceof Link_Abstract ) {
		$google_cal_link = $subscribe_links['gcal']->get_uri( null );
	} else {
		$google_cal_link = Tribe__Events__Main::instance()->esc_gcal_url( tribe_get_gcal_link() );
	}
}

if ( $has_ical ) {
	if ( $this->get( [ 'subscribe_links', 'ical' ] ) instanceof Link_Abstract ) {
		$ical_link = $subscribe_links['ical']->get_uri( null );
	} else {
		$ical_link = tribe_get_single_ical_link();
	}
}

if ( empty( $google_cal_link ) && empty( $ical_link ) ) {
	return;
}

?>
<div class="tribe-block tribe-block__events-link">

	<?php if ( ! empty( $google_cal_link ) ) : ?>
		<div class="wp-block-button is-style-primary">
			<a
				class="wp-block-button__link"
				href="<?php echo esc_url( $google_cal_link ); ?>"
				target="_blank"
				rel="noopener noreferrer nofollow"
				title="<?php esc_attr_e( 'Add to Google Calendar', 'ramp-theme' ); ?>"
			>
				<?php echo esc_html_e( 'Google Calendar', 'ramp-theme' ) ?>
			</a>
		</div>
	<?php endif; ?>

	<?php if ( ! empty( $ical_link ) ) : ?>
		<div class="wp-block-button is-style-primary">
			<a
				class="wp-block-button__link"
				href="<?php echo esc_url( $ical_link ); ?>"
				rel="noopener noreferrer nofollow"
				title="<?php esc_attr_e( 'iCal Export', 'ramp-theme' ); ?>"
			>
				<?php echo esc_html_e( 'iCal Export', 'ramp-theme' ) ?>
			</a>
		</div>
	<?php endif; ?>

</div>

<?php add_filter( 'the_content', 'do_blocks', 9 );
