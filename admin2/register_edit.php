<?php 
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

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

  	if (isset($_POST['edit_id'])) 
	{
		$id = $_POST['edit_id'];

		$query = "SELECT * FROM register WHERE id='$id'";
		$query_run = mysqli_query($conn, $query);

		foreach ($query_run as $row) 
		{
			?>

			<form action="code.php" method="post">
				<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

			  	<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="edit_fname" value="<?php echo $row['fullname'] ?>" class="form-control" required="required" autofocus="autofocus">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="edit_pass" value="<?php echo $row['password'] ?>" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Usertype</label>
					<select name="update_usertype" class="form-control">
						<option value="admin">Admin</option>
						<option value="user">User</option>
					</select>
				</div>
				<a href="register.php" class="btn btn-danger">Cancel</a>
				<button type="submit" name="btnUpdate" class="btn btn-info">Update</button>
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