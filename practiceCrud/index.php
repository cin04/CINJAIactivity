<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css" ></link>
	<script src="/js/bootstrap.min.js" integrity="sha384"></script>
	<style type="text/css">
		.container{
			padding-top: 100px;
		}
	</style>
</head>
<body>
	<?php require_once 'process.php'; ?>

	<?php

	if (isset($_SESSION['message'])): ?> 

	<div class="alert alert-<?=$_SESSION['msg_type']?>">

		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		$mysqli = new mysqli("localhost", "root", "", "pos") or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM data_view") or die($mysqli->error);
		//pre_r($result);
		?>
		<div class="nav-container">
			<?php include 'navbar.php' ?>
		</div>

		<div class="row justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th>Order Id</th>
						<th>Customer Name</th>
						<th>Product Description</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Date Purchased</th>
						<th>Image</th>
					</tr>
				</thead>

		<?php 
			while ($row = $result->fetch_assoc()): ?>

			<tr>
				<td><?php echo $row['Order_ID']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Description']; ?></td>
				<td><?php echo $row['Quantity']; ?></td>
				<td><?php echo $row['StandardPrice']; ?></td>
				<td><?php echo $row['OrderDate']; ?></td>
				<td><?php echo $row['Image']; ?></td>
			</tr>
		<?php endwhile; ?>

			</table>
		</div>

		<?php


		function pre_r( $array ) {
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>

	<div class="row justify-content-center">
		<form action="process.php" method="POST">
			<div class="form-group">
				<label>Search</label>
				<input type="text" name="search" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="save">Search</button>
			</div>
</form>
</div>
</div>
	</div>
</body>
</html>