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
