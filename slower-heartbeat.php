<?php
/*
Plugin Name: Slower Heartbeat
Plugin URI: http://om4.com.au/wordpress-plugins/
Description: Slows down the WordPress heartbeat from once every 15 seconds to once every minute, reducing server load. Particularly useful on shared hosts.
Version: 1.0
Author: OM4
Author URI: http://om4.com.au/
Text Domain: slower-heartbeat
Git URI: https://github.com/OM4/slower-heartbeat
Git Branch: release
License: GPLv2
*/

/*

   Copyright 2013 OM4 (email: info@om4.com.au    web: http://om4.com.au/)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


class Slower_Heartbeat {

	public function __construct() {
		add_filter( 'heartbeat_settings', array( __CLASS__, 'heartbeat_settings' ) );
	}

	public function heartbeat_settings( $settings ) {
		$settings['interval'] = 60; // 60 seconds
		return $settings;
	}

}

global $Slower_Heartbeat;
$Slower_Heartbeat = new Slower_Heartbeat();