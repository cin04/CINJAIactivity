<?php

session_start();

$mysqli = new mysqli("localhost", "root", "", "pos") or die(mysqli_error($mysqli));

$prodid = 0;
$update = false;
$description = '';
$finish = '';
$price = '';
$image = '';
$line = '';

if (isset($_POST['save'])) {
	$description = $_POST['description'];
	$finish = $_POST['finish'];
	$price = $_POST['price'];
	$line = $_POST['line'];
	$image = $_POST['image'];

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: product.php");

	$mysqli->query("INSERT INTO product_t (Description, Finish, StandardPrice, Line_Id, Image) VALUES ('$description', '$finish', '$price', '$line', '$image')") or die($mysqli->error);
}

if (isset($_GET['delete'])) {
	$prodid = $_GET['delete'];
	$mysqli->query("DELETE FROM product_t WHERE Product_Id=$prodid") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: product.php");
}


if (isset($_GET['edit'])) {
	$prodid = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM product_t WHERE Product_Id=$prodid") or die($mysqli->error());
	if (count($result)==1) {
		$row = $result->fetch_array();
		$description = $row['Description'];
		$finish = $row['Finish'];
		$price = $row['StandardPrice'];
		$line = $row['Line_Id'];
		$image = $row['Image'];
	}
}

if (isset($_POST['update'])) {
	$prodid = $_POST['prodid'];
	$description = $_POST['description'];
	$finish = $_POST['finish'];
	$price = $_POST['price'];
	$line = $_POST['line'];
	$image = $_POST['image'];

	$mysqli->query("UPDATE product_t SET Description='$description', Finish='$finish', StandardPrice='$price', Line_Id='$line', Image='$image' WHERE Product_Id=$prodid") or
	die($mysqli->error);

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header('location: product.php');
}
?>