<?php 
	require("../config.php");
	include("../template/header.php");
?>
<h1>Admin Panel</h1>
<?php
	if(isset($_GET['message'])){
		echo "<h2 class='action'>Your Action Complete</h2>";
	}
?>
	<table width="100%">
		<tr>
			<td class="add_new" align="right" colspan="4"><h2><a href="create.php">+ Add New Page</a></h2></td>
		</tr>
		<tr>
			<th>Page Name</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			$sql = "SELECT id, name FROM pages";
			$result = $conn->query($sql) or die(mysqli_error());
			if($result) {
				while($row = $result->fetch_object()) {
		?>
		<tr>
			<td width="55%"><?php echo $row->name; ?></td>
			<td width="15%"><a href="../index.php?page=<?php  ?><?php echo $row->id; ?>">View</a></td>
			<td width="15%"><a href="edit.php?page=<?php  ?><?php echo $row->id; ?>">Edit</a></td>
			<td width="15%"><a href="delete.php?page=<?php  ?><?php echo $row->id; ?>">Delete</a></td>
		</tr>
		<?php }} ?>
	</table>
	<?php 
		include("../template/footer.php");
	 ?>