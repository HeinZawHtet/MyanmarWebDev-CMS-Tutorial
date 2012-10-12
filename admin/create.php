<?php require("../config.php") ?>
<?php include("../template/header.php") ?>
		<div id="content">
			<h1>Admin Panel</h1>
			<p>
				<form method="post" action="update.php">
					<label for="name">Title :</label><br>
					<input type="text" name="name" value="" /><br />
					<label for="name">Content :</label><br>
					<textarea name="content" cols="100" rows="20"></textarea>
					<input type="submit" name="create" value="submit" />
				</form>
			</p>
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