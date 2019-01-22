<?php
/**
 * WPSEO plugin file.
 *
 * This file acts as a proxy. It will read external files and serves the like they are located locally.
 *
 * @package WPSEO\Admin
 */

switch ( $_GET['file'] ) {
	case 'research-webworker':
		$my_yoast_url = 'https://my.yoast.com/api/downloads/file/analysis-worker';
		$my_yoast_url_content_type = 'text/javascript; charset=UTF-8';
		break;
}

if ( empty( $my_yoast_url ) ) {
	header('HTTP/1.0 501 Not implemented');
	exit;
}

header( 'Content-Type: ' . $my_yoast_url_content_type );
header( 'Cache-Control: max-age=86400' );

readfile( $my_yoast_url );

exit;
