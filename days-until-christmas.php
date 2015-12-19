<?php
/**
 * @package Christmas
 */
/*
Plugin Name: Days until christmas
Description: Provide a shortcode to display days count until christmas
Version: 1.0.0
Author: Alexandre Nguyen
Author URI: https://alexandrenguyen.fr
License: GPLv2 or later
Text Domain: days-until-christmas
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function get_days_until_christmas() {
	$daysUntilChristmas = ceil((mktime(0,0,0,12,25,date('Y')) - time()) / 86400);
	return $daysUntilChristmas;
}

function get_days_until_christmas_fn( $atts ){
	return get_days_until_christmas();
}

add_shortcode( 'days_until_christmas', 'get_days_until_christmas_fn' );
