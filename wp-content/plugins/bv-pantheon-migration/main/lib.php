<?php

if (!defined('ABSPATH')) exit;
if (!class_exists('PTNLib')) :

class PTNLib {
	public function objectToArray($obj) {
		return json_decode(json_encode($obj), true);
	}

	public function randString($length) {
		$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		
		$str = "";
		$size = strlen($chars);
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[rand(0, $size - 1)];
		}
		return $str;
	}

	public function http_request($url, $body) {
		$_body = array(
			'method' => 'POST',
			'timeout' => 15,
			'body' => $body);

		return wp_remote_post($url, $_body);
	}
}
endif;