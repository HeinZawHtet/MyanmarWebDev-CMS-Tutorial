<?php 
	require("../config.php");
	$id = $_GET['page'];
	$sql = "DELETE FROM pages WHERE id='$id'";
	$result = $conn->query($sql) or die(mysqli_error());
	if($result) {
		header("location: index.php?message=1");
	}