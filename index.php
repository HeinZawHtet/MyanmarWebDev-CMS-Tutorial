<?php require("config.php") ?>
<?php include("template/header.php") ?>

		<div id="content">
			<?php 
				// $page = (isset($_GET['page'])) ? $_GET['page'] : "1";
				if(isset($_GET['page'])) {
					$page = $_GET['page'];
				} else {
					$page = 1;
				}
				$sql = "SELECT name,content FROM pages WHERE id='$page'";
				$result = $conn->query($sql) or die(mysqli_error());
				
				if($result) {					
					$row = $result->fetch_object();
					echo"<h1>". $row->name . "</h1>";
					echo $row->content;
				}
			?>
		</div>
		<!-- end #content -->
		<?php include("template/sidebar.php") ?>
		<?php include("template/footer.php") ?>