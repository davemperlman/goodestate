<?php
	$username = 'luxurypropertyimages';
	$json     = file_get_contents('https://www.instagram.com/' . $username . '/media/');
	$instagram_feed_data = json_decode($json, true);

	print_r($instagram_feed_data);