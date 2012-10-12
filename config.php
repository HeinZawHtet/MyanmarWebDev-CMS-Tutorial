<?php
	$config = array(

		"host" => "tunnel.pagodabox.com",	// Host name
		"user" => "wilda", 		// Database user
		"pass" => "35zqsKSv",			// Database password
		"name" => "mmwebdevcmstuts_phpfogapp_com",			// Database Name
		"port" => "3306",

		"site_name" => "My Custom CMS",
		"site_url" => "http://myanmarwebdevcmstut.pagodabox.com/",
		"ads_img" => "http://myanmarwebdevcmstut.pagodabox.com/assets/images/ads.jpg",
		"ads_url" => "http://www.myanmarwebdev.com"
	);
	
	$conn = new mysqli($config['host'], $config['user'], $config['pass'], $config['name'], $config['port']) or die(mysqli_error());