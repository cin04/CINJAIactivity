<?php
	$mysqli = new mysqli("localhost","root","","crud");
?>

<table border="1">
	<?php
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$search = $_POST['search'];
		$query = "Select * from info where id LIKE '%$id%' || name LIKE '%$name%' || address LIKE '%$address%'";
		$statement = $mysqli->prepare($query);
		$statement->execute();

		$result = $statement->fetchAll();
		foreach ($result as $row): ?>
			<?php $id = $row['id']; ?>
			<?php $name = $row['name']; ?>
			<?php $address = $row['address']; ?>
			<tr>
				<td><?php echo ($id) ?></td>
				<td><?php echo ($name) ?></td>
				<td><?php echo ($address) ?></td>
			</tr>
		<?php endforeach; ?>

</table>