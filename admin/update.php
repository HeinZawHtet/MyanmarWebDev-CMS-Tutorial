<?php
require("../config.php");

if(isset($_POST['create'])) {

	$name = $_POST['name'];
	$content = $_POST['content'];

	$sql = "INSERT INTO pages (name,content) VALUES('$name', '$content')";
	$result = $conn->query($sql) or die(mysqli_error());
	if($result) {
		header("location: index.php?message=1");
	}
}

if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$content = $_POST['content'];

	$sql = "UPDATE pages SET name='$name',content='$content' WHERE id='$id'";
	$result = $conn->query($sql) or die(mysqli_error());
	if($result) {
		header("location: index.php?message=1");
	}
}