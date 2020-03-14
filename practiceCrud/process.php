<?php

session_start();

$mysqli = new mysqli("localhost", "root", "", "pos") or die(mysqli_error($mysqli));

//$update = false;
$orderid = '';
$search = '';

if (isset($_POST['save'])) {
	$orderid = $_POST['orderid'];
	$search = $_POST['search'];

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: index.php");

	$mysqli->query("SELECT * from data_view WHERE Order_ID = $orderid") or die($mysqli->error);
}

if (isset($_GET['delete'])) {
	$orderid = $_GET['delete'];
	$mysqli->query("DELETE FROM data_view WHERE Order_ID=$orderid") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: index.php");
}


if (isset($_GET['edit'])) {
	$orderid = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM data_view WHERE Order_ID=$orderid") or die($mysqli->error());
	if (count($result)==1) {
		$row = $result->fetch_array();
		$orderid = $row['Order_ID'];
		$custname = $row['Name'];
		$description = $row['Description'];
		$qty = $row['Quantity'];
		$price = $row['StandardPrice'];
		$date = $row['OrderDate'];
		$image = $row['Image'];
	}
}

if (isset($_POST['update'])) {
	$orderid = $_POST['orderid'];
	$custname = $_POST['custname'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];
	$date = $_POST['date'];
	$image = $_POST['image'];

	$mysqli->query("UPDATE data_view SET Name='$custname', Description='$description', Quantity='$qty', StandardPrice='$price', OrderDate='$date', Image='$image' WHERE Order_ID=$orderid") or
	die($mysqli->error);

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header('location: index.php');
}
?>