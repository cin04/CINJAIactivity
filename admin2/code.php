<?php
include('security.php');
// session_start();

// $conn = mysqli_connect("localhost","root","","admin");

if (isset($_POST['btnRegister'])) {
	$fullname = $_POST['fname'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$usertype = $_POST['usertype'];

	if($pass == $cpass){
		$query = "INSERT INTO register (fullname, username, password, usertype) VALUES ('$fullname','$username','$pass','$usertype')";
		$query_run = mysqli_query($conn, $query);

		if($query_run){
			// echo "Records successfully saved!";
			$_SESSION['success'] = "Records successfully saved!";
			header('Location: register.php');
		}else{
			// echo "Failed to record data!";
			$_SESSION['status'] = "Failed to save the data!";
			header('Location: register.php');
		}
	}else{
		$_SESSION['status'] = "Password don't match!";
		header('Location: register.php');
	}
}

if (isset($_POST['btnSignup'])) {
	$fname = $_POST['fullname'];
	$users = $_POST['users'];
	$passes = $_POST['passes'];
	$cpasses = $_POST['cpasses'];
	$types = $_POST['types'];

	if($passes == $cpasses){
		$query = "INSERT INTO register (fullname, username, password, usertype) VALUES ('$fname','$users','$passes','$types')";
		$query_run = mysqli_query($conn, $query);

		if($query_run){
			// echo "Records successfully saved!";
			$_SESSION['success'] = "Records successfully saved!";
			header('Location: login.php');
		}else{
			// echo "Failed to record data!";
			$_SESSION['status'] = "Register Failed";
			header('Location: signup.php');
		}
	}else{
		$_SESSION['status'] = "Password don't match!";
		header('Location: signup.php');
	}
}

if (isset($_POST['btnUpdate'])) 
{
	$id = $_POST['edit_id'];
	$fullname = $_POST['edit_fname'];
	$username = $_POST['edit_username'];
	$password = $_POST['edit_pass'];
	$type = $_POST['update_usertype'];

	$query = "UPDATE register SET fullname = '$fullname', username = '$username', password = '$password', usertype = '$type' WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Record is successfully updated";
		header('Location: register.php');
	}
	else
	{
		$_SESSION['status'] = "Failed to update the data";
		header('Location: register.php');
	}

}

if (isset($_POST['delete_btn'])) 
{
	$id = $_POST['delete_id'];

	$query = "DELETE FROM register WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Record is successfully deleted";
		header('Location: register.php');
	}
	else
	{
		$_SESSION['status'] = "Failed to delete the data";
		header('Location: register.php');
	}
		
}


if (isset($_POST['btnAdd'])) {
	$image = $_POST['image'];
	$service = $_POST['service'];
	$price = $_POST['price'];

	$query = "INSERT INTO servicetbl (image, service, price) VALUES ('$image','$service','$price')";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Record is successfully added";
		header('Location: index.php');
	}
	else
	{
		$_SESSION['status'] = "Failed to add a data";
		header('Location: index.php');
	}
}

if (isset($_POST['in_btnUpdate'])) 
{
	$id = $_POST['in_id'];
	$inservice = $_POST['in_service'];
	$inprice = $_POST['in_price'];
	$inimage = $_POST['in_image'];

	$query = "UPDATE servicetbl SET image = '$inimage', service = '$inservice', price = '$inprice' WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Record is successfully updated";
		header('Location: index.php');
	}
	else
	{
		$_SESSION['status'] = "Failed to update the data";
		header('Location: index.php');
	}

}

if (isset($_POST['in_btndelete'])) 
{
	$inid = $_POST['in_deleteid'];

	$query = "DELETE FROM servicetbl WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Record is successfully deleted";
		header('Location: index.php');
	}
	else
	{
		$_SESSION['status'] = "Failed to delete the data";
		header('Location: index.php');
	}
		
}

if (isset($_POST['search_data'])) 
{
	$service = $_POST['service'];
	$visible = $_POST['visible'];

	$query = "UPDATE servicetbl SET visible = '$visible' WHERE id = '$id' ";
	$query_run = mysqli_query($conn, $query);

}

if (isset($_POST['addbooking'])) 
{
	$name = $_POST['name'];
	$service = $_POST['services'];
	$time = $_POST['time'];
	$date = $_POST['date'];


	$query = "INSERT INTO bookingtbl (name, service, time, date) VALUES ('$name','$service','$time','$date')";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Record is successfully added";
		header('Location: user-index.php');
	}
	else
	{
		$_SESSION['status'] = "Failed to add the data";
		header('Location: user-index.php');
	}
}


?>



















