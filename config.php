<?php
	$config = array(

		"host" => "localhost",	// Host name
		"user" => "root", 		// Database user
		"pass" => "",			// Database password
		"name" => "cms",			// Database Name

		"site_name" => "My Own Custom CMS",
		"site_url" => "http://localhost/cms",
		"ads_img" => "http://localhost/cms/assets/images/ads.jpg",
		"ads_url" => "http://www.myanmarwebdev.com"
	);
	
	$conn = new MySQLi($config['host'], $config['user'], $config['pass'], $config['name']) or die(mysqli_error());