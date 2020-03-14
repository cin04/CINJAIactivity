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
	<?php require_once 'product_process.php'; ?>

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
		$result = $mysqli->query("SELECT * FROM product_t") or die($mysqli->error);
		//pre_r($result);
		?>
		<div class="nav-container">
			<?php include 'navbar.php' ?>
		</div>

		<div class="row justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th>Description</th>
						<th>Finish</th>
						<th>Standard Price</th>
						<th>Line Id</th>
						<th>Image</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>

		<?php 
			while ($row = $result->fetch_assoc()): ?>

			<tr>
				<td><?php echo $row['Description']; ?></td>
				<td><?php echo $row['Finish']; ?></td>
				<td><?php echo $row['StandardPrice']; ?></td>
				<td><?php echo $row['Line_Id']; ?></td>
				<td><?php echo $row['Image']; ?></td>
				<td>
					<a href="product.php?edit=<?php echo $row['Product_Id']; ?>" class="btn btn-info">Edit</a>
					<a href="product_process.php?delete=<?php echo $row['Product_Id']; ?>" class="btn btn-danger">Delete</a>
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
		<form action="product_process.php" method="POST">
			<input type="hidden" name="prodid" value="<?php echo $prodid; ?>">
			<div class="form-group">
				<label>Description</label>
				<input type="text" name="description" class="form-control" 
						value="<?php echo $description; ?>">
			</div>
			<div class="form-group">
				<label>Finish</label>
				<input type="text" name="finish" 
						value="<?php echo $finish; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Standard Price</label>
				<input type="text" name="price" class="form-control" 
						value="<?php echo $price; ?>">
			</div>
			<div class="form-group">
				<label>Line_Id</label>
				<input type="text" name="line" class="form-control" 
						value="<?php echo $line; ?>">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" name="image" class="form-control" img src="image/" <?php echo $image; ?> > 
			</div>
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