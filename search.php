<?php require("config.php") ?>
<?php include("template/header.php") ?>

		<div id="content">
			<h1>Search Result :</h1>
			<?php
				$query = $_GET['s'];
				$sql = "SELECT * FROM pages WHERE (`content` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')";
				$result = $conn->query($sql) or die(mysqli_error());

				if($result) {
					while($row = $result->fetch_object()) {
						echo"<h4><a href='index.php?page={$row->id}'>{$row->name}</a></h4>";
					}
				}
			?>	

		</div>
		<!-- end #content -->
		<?php include("template/sidebar.php") ?>
		<?php include("template/footer.php") ?>