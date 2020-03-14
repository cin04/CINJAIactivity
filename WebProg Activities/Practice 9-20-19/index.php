<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once 'process.php'; ?>

	<?php
		$mysqli = new mysqli("localhost","root","","crud");
		$result = $mysqli->query("Select * from info");
		//pre_r($result);
	?>

	<table border="1">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
			while ($row = $result->fetch_assoc()): ?> 
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><a href="index.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
					<td><a href="process.php?delete=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
		<?php endwhile; ?>
	</table>

		<?php
			function pre_r($array){
				echo '<pre>';
				print_r($array);
				echo '</pre>';
			}

		?>
		<br>

		<form action="process.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
			<input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>">
			<input type="submit" name="btnAdd" value="Add"> &nbsp; <input type="submit" name="btnUpdate" value="Update">
			<br>
			<input type="text" name="search" placeholder="Search">&nbsp;<input type="submit" name="btnSearch" value="Search">
			
		</form>


</body>
</html>