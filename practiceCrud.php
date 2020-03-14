<?php
$link = mysqli_connect("localhost", "root","");
mysqli_select_db($link,"crud");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>
<form action="#" method="POST">
	Full Name: <input type="text" name="fname">
	Address: <input type="text" name="address">&nbsp;<input type="submit" name="btnSubmit" value="Add">
	<br>
	<br>
	<input type="text" name="search">&nbsp;<input type="submit" name="btnSearch" value="Search">&nbsp;<input type="submit" name="btnDelete" value="Delete">&nbsp;<input type="submit" name="btnUpdate" value="Update">&nbsp;<input type="submit" name="btnView" value="View All">
	
</form>
<?php 
if (isset($_POST['btnSubmit'])){
	$fname = $_POST['fname'];
	$address = $_POST['address'];
	mysqli_query($link,"insert into info (fullname,address) values('$fname','$address')");
} 

if (isset($_POST['btnUpdate'])){
	$fname = $_POST['fname'];
	$address = $_POST['address'];
	mysqli_query($link,"update info set address='$address' where fullname = '$fname'");
}

if (isset($_POST['btnDelete'])){
	$fname = $_POST['fname'];
	$address = $_POST['address'];
	mysqli_query($link,"delete from info where fullname = '$fname'");
} 

if (isset($_POST['btnView'])){
	$result=mysqli_query($link,"select * from info");

	echo "<table border = 1";
	echo "<tr>";
	echo "<th>"; echo "Full Name"; echo "</th>";
	echo "<th>"; echo "Address"; echo "</th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>"; echo $row['fullname']; echo "</td>";
		echo "<td>"; echo $row['address']; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>

</body>
</html>