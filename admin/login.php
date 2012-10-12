<?php
session_start();
require_once '../login/classes/Membership.php';
$membership = new Membership();

// If the user clicks the "Log Out" link on the index page.
if(isset($_GET['status']) && $_GET['status'] == 'loggedout') {
	$membership->log_User_Out();
}

// Did the user enter a password/username and click submit?
if($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
	$response = $membership->validate_User($_POST['username'], $_POST['pwd']);
}
														

?>
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
<title>Condition by FCT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../assets/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
    <div id="logo">
        <h1><a href="#">Condition  </a></h1>
        <p><em> template design by <a href="http://www.freecsstemplates.org">FCT</a></em></p>
    </div>
    <hr />
    <!-- end #logo -->
    <div id="header">
        <div id="menu">
            <ul>
    <?php 
        require("../connection.php");
        $sql = "SELECT name FROM pages";
        $result = $conn->query($sql) or die(mysqli_error());

        if($result) {
            while($row = $result->fetch_object()) {
                echo "<li><a href='index.php?pages={$row->name}' title='{$row->name}'>{$row->name}</a></li>";
            }
        }
    ?>
            </ul>
        </div>
        <!-- end #menu -->
        <div id="search">
            <form method="get" action="">
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
        <div id="content">
            <form method="post" action="">
        <h2>Login <small>enter your credentials</small></h2>
        <p>
            <label for="name">Username: </label>
            <input type="text" name="username" />
        </p>
        
        <p>
            <label for="pwd">Password: </label>
            <input type="password" name="pwd" />
        </p>
        
        <p>
            <input type="submit" id="submit" value="Login" name="submit" />
        </p>
            </form>
    <?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>"; ?>
        </div>
        <!-- end #content -->
        <div id="sidebar">
            <ul>
                <li>
                    <h2>Aliquam tempus</h2>
                    <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
                </li>
                <li>
                    <h2>Pellenteque ornare </h2>
                    <ul>
                        <li><a href="#"></a><a href="#">Nec metus sed donec</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Velit semper nisi molestie</a></li>
                        <li><a href="#">Eget tempor eget nonummy</a></li>
                        <li><a href="#">Nec metus sed donec</a></li>
                    </ul>
                </li>
                <li>
                    <h2>Turpis nulla</h2>
                    <ul>
                        <li><a href="#"></a><a href="#">Nec metus sed donec</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Velit semper nisi molestie</a></li>
                        <li><a href="#">Eget tempor eget nonummy</a></li>
                        <li><a href="#">Nec metus sed donec</a></li>
                        <li><a href="#"></a><a href="#">Nec metus sed donec</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Velit semper nisi molestie</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end #sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    </div>
    <!-- end #page -->
    <div id="footer-bgcontent">
    <div id="footer">
        <p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
    </div>
    </div>
    <!-- end #footer -->
</div>
</body>
</html>