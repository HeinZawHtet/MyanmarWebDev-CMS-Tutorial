<?php
	$config = array(

		"host" => "tunnel.pagodabox.com:3306",	// Host name
		"user" => "wilda", 		// Database user
		"pass" => "35zqsKSv",			// Database password
		"name" => "mmwebdevcmstuts_phpfogapp_com",			// Database Name

		"site_name" => "My Own Custom CMS",
		"site_url" => "http://myanmarwebdevcmstut.pagodabox.com/",
		"ads_img" => "http://myanmarwebdevcmstut.pagodabox.com/assets/images/ads.jpg",
		"ads_url" => "http://www.myanmarwebdev.com"
	);
	
	$conn = new mysqli($config['host'], $config['user'], $config['pass'], $config['name']) or die(mysqli_error());