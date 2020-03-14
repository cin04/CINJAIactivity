<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
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
	<?php require_once 'customer_process.php'; ?>

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
		$result = $mysqli->query("SELECT * FROM customer_t") or die($mysqli->error);
		//pre_r($result);
		?>
		<div class="nav-container">
			<?php include 'navbar.php' ?>
		</div>

		<div class="row justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>PostalCode</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>

		<?php 
			while ($row = $result->fetch_assoc()): ?>

			<tr>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Address']; ?></td>
				<td><?php echo $row['City']; ?></td>
				<td><?php echo $row['State']; ?></td>
				<td><?php echo $row['PostalCode']; ?></td>
				<td>
					<a href="customer.php?edit=<?php echo $row['custid']; ?>" class="btn btn-info">Edit</a>
					<a href="customer_process.php?delete=<?php echo $row['custid']; ?>" class="btn btn-danger">Delete</a>
				</td>
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
		<form action="customer_process.php" method="POST">
			<input type="hidden" name="custid" value="<?php echo $custid; ?>">
		
			<div>
				<label>Name</label>
				<input type="text" name="name" class="form-control" 
						value="<?php echo $name; ?>">
			</div>
			<div>
				<label>Address</label>
				<input type="text" name="address" class="form-control" 
						value="<?php echo $address; ?>">
			</div>
			<div>
				<label>City</label>
				<input type="text" name="city" class="form-control" 
						value="<?php echo $city; ?>">
			</div>
			<div>
				<label>State</label>
				<input type="text" name="state" class="form-control" 
						value="<?php echo $state; ?>">
			</div>
			<div>
				<label>Postal Code</label>
				<input type="text" name="postal" class="form-control" 
						value="<?php echo $postal; ?>">
			</div>
			<br>
			<div class="form-group">
			<?php
			if ($update == true):
			?>
				<button type="submit" class="btn btn-info" name="update">Update</button>
			<?php else: ?>
				<button type="submit" class="btn btn-primary" name="save">Save</button>
			<?php endif; ?>
			</div>
		</form>
	
	</div>
</div>

</body>
</html>