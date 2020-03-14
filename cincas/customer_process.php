<?php

session_start();

$mysqli = new mysqli("localhost", "root", "", "pos") or die(mysqli_error($mysqli));

//$id = 0;
$update = false;
$custid = 0;
$name = '';
$address = '';
$city = '';
$state = '';
$postal = '';

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postal = $_POST['postal'];

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: customer.php");

	$mysqli->query("INSERT INTO customer_t (Name, Address, City, State, PostalCode) VALUES ('$name', '$address','$city', '$state', '$postal')") or die($mysqli->error);
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM customer_t WHERE Customer_Id=$custid") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: customer.php");
}


if (isset($_GET['edit'])) {
	$custid = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM customer_t WHERE Customer_Id=$custid") or die($mysqli->error());
	if (count($result)==1) {
		$row = $result->fetch_array();
		$name = $row['name'];
		$address = $row['address'];
		$city = $row['city'];
		$state = $row['state'];
		$postal = $row['postal'];

	}
}

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postal = $_POST['postal'];

	$mysqli->query("UPDATE customer_t SET Name='$name', Address='$address', City='$city', State='$state', PostalCode='$postal' WHERE Customer_Id=$custid") or
	die($mysqli->error);

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header('location: customer.php');
}
?>