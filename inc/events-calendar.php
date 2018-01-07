<?php
/**
 * The Events Calendar integration.
 *
 * @author Peter Putzer
 *
 * @package 8maerz.at
 */

/**
 * Custom Events Calendar stylesheet.
 *
 * @return string
 */
function achtermaerz_replace_tribe_events_calendar_stylesheet() {
	return get_bloginfo( 'template_url' ) . '/assets/css/tribe-events-full.css';
}
add_filter( 'tribe_events_stylesheet_url', 'achtermaerz_replace_tribe_events_calendar_stylesheet' );

/**
 * Custom Events Calendar Pro stylesheet.
 *
 * @return string
 */
function achtermaerz_replace_tribe_events_calendar_pro_stylesheet() {
	return get_bloginfo( 'template_url' ) . '/assets/css/tribe-events-pro-full.css';
}
//add_filter( 'tribe_events_pro_stylesheet_url', 'achtermaerz_replace_tribe_events_calendar_pro_stylesheet' );

/**
 * Returns the event venue name
 *
 * @since ??
 *
 * @param int $postId Can supply either event id or venue id, if none specified, current post is used
 * @return string Venue Name
 */
function achtermaerz_get_venue( $postId = null ) {
	$venue_id = tribe_get_venue_id( $postId );
	$venue    = ( $venue_id > 0 ) ? wp_kses( get_the_title( $venue_id ), [ 'span' => [ 'class' => [] ] ] ) : null;

	/**
	 * Allows customization of the retrieved venue name for a specified event.
	 *
	 * @since ??
	 * @since 4.5.12 Added docblock and venue ID to filter.
	 *
	 * @param string $venue The name of the retrieved venue.
	 * @param int $venue_id The venue ID.
	 */
	return apply_filters( 'tribe_get_venue', $venue, $venue_id );
}
