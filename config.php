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
	
	$conn = new mysqli($_SERVER["DB1_HOST"], $_SERVER["DB1_USER"], $_SERVER["DB1_PASS"], $_SERVER["DB1_NAME"], $_SERVER["DB1_NAME"]) or die(mysqli_error());