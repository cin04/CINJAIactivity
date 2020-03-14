<?php 
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<style type="text/css">
  img{
      max-height: 120px;
      max-width: 120px;
    }
</style>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Profile
    </h6>
  </div>

  <div class="card-body">
  	<?php


	$conn = mysqli_connect("localhost","root","","admin");

  	if (isset($_POST['in_editid'])) 
	{
		$id = $_POST['in_editid'];

		$query = "SELECT * FROM servicetbl WHERE id='$id'";
		$query_run = mysqli_query($conn, $query);

		foreach ($query_run as $row) 
		{
			?>

			<form action="code.php" method="post">
				<input type="hidden" name="in_id" value="<?php echo $row['id'] ?>">

			  	<div class="form-group">
					<label>Service</label>
					<input type="text" name="in_service" value="<?php echo $row['service'] ?>" class="form-control" required="required" autofocus="autofocus">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="number" name="in_price" value="<?php echo $row['price'] ?>" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Image</label><br>
					<img src="images/<?php echo $row['image']; ?>"><br>
					<input type="file" name="in_image">
				</div>
				<a href="index.php" class="btn btn-danger">Cancel</a>
				<button type="submit" name="in_btnUpdate" class="btn btn-info">Update</button>
			</form>
		<?php
		}

	}
?>

  </div>
</div>
</div>




<?php 
include('includes/script.php');
include('includes/footer.php'); 
?>