<?php require("../config.php") ?>
<?php include("../template/header.php") ?>
		<div id="content">
			<h1>Admin Panel</h1>
			<?php 
				if(isset($_GET['message'])) {
					echo "<p class='message'>Edit Successful!</p>";
				}
				$page = (isset($_GET['page'])) ? $_GET['page'] : "1";
				$sql = "SELECT * FROM pages WHERE id='$page'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result) {					
					$row = $result->fetch_object();
					echo <<<EOD
<p>
	<form method="post" action="update.php">
		<input type="hidden" name="id" value="{$row->id}"/>
		<label for="name">Title</label><br>
		<input type="text" name="name" value="{$row->name}" /><br />
		<label for="name">Content</label><br>
		<textarea name="content" cols="100" rows="20">{$row->content}</textarea>
		<input type="submit" name="edit" value="submit" />
	</form>
</p>
EOD;
				}
			?>
			<script type="text/javascript" src="<?php echo $config['site_url'] ?>/assets/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
					mode : "textareas"
				});
			</script>
		</div>
		<!-- end #content -->
		<?php include("../template/sidebar.php") ?>
		<?php include("../template/footer.php") ?>