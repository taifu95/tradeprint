<?php

	if(!function_exists('base_site_url')){
		function base_site_url(){

			$url = site_url();
			$url = str_replace("[::1]", "127.0.0.1", $url);
			$url = str_replace("[::1]:80", "127.0.0.1", $url);
			$url = str_replace("/index.php", "", $url);
			return $url;
		}
	}
?>