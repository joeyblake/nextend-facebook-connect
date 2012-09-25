<?php
/*  Copyright 2012  Roland Soos - Nextend  (email : roland@nextendweb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( !defined( 'NEW_FB_LOGIN' ) ) {
	return;
}

require(dirname(__FILE__).'/facebook.php');

$settings = maybe_unserialize(get_option('nextend_fb_connect'));

$facebook = new Facebook(array(
  'appId' => $settings['fb_appid'],
  'secret' => $settings['fb_secret'],
));
