<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Condition 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20100103

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $config['site_name'] ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo $config['site_url']; ?>/assets/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="logo">
		<h1><a href="<?php echo $config['site_url']; ?>"><?php echo $config['site_name'] ?></a></h1>
		<p><em> tutorial by <a href="http://www.myanmarwebdev.com">MyanmarWebDev.com</a></em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
	<?php
		$sql = "SELECT id,name FROM pages";
		$result = $conn->query($sql) or die(mysqli_error());

		if($result) {
			while($row = $result->fetch_object()) {
				echo "<li><a href='{$config['site_url']}/index.php?page={$row->id}' title='{$row->name}'>{$row->name}</a></li>";
			}
		}
	?>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="search.php">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="GO" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
	<div id="page-bgtop">