<?php
session_start();

$mysqli = new mysqli("localhost","root","","crud");

$id = 0;
$name = '';
$address = '';

if (isset($_POST['btnAdd'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];

	$mysqli->query("Insert into info (name, address) values('$name','$address')");
	header("location: index.php");
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("Delete from info where id = $id");
	header("location: index.php");
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$result = $mysqli->query("Select * from info where id = $id");

	if (count($result)==1){
		$row = $result->fetch_array();
		$name =$row['name'];
		$address = $row['address'];
	}
}

if (isset($_POST['btnUpdate'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	$mysqli->query("Update info set name = '$name', address='$address' where id = '$id'");
	header("location: index.php");
}
if (isset($_POST['btnSearch'])) {
	include_once('search.php');

}

?>