<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = 'D:\xampp_5.6\htdocs\pns/wp-content/cache/wp-rocket/';
$rocket_config_path = 'D:\xampp_5.6\htdocs\pns/wp-content/wp-rocket-config/';

if ( file_exists( 'D:\xampp_5.6\htdocs\pns\wp-content\plugins\wp-rocket\inc\front/process.php' ) ) {
	include( 'D:\xampp_5.6\htdocs\pns\wp-content\plugins\wp-rocket\inc\front/process.php' );
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}