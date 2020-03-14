<?php
	include_once('connections.php');
	$uname = $pass="";

	if(isset($_POST['btnSI'])) {
		$uname = $_POST['Uname'];
		$pass = $_POST['pwd'];

		$query = "SELECT * FROM members WHERE familyname='$uname' && firstname='$pass'";
		$statement = $conn->prepare($query);
		$statement->execute();

		$result = $statement->fetchAll();
		if(empty($uname) && empty($pass)) {
			echo "<script>alert('Failed to login');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
		else if($result) {
			echo "<script>alert('Welcome $uname');</script>";
			echo "<script>window.location.href='home.php';</script>";
		}
		else {
			echo "<script>alert('Failed to login');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
	}
?>


<link rel="stylesheet" type="text/css" 	href="styles.css">
<center>
<div id="">
	<h3>Members Sign-in</h3><br>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>User Name:</td>
				<td><input type="text" name="Uname"></td>
			</tr>	
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd"></td>
			</tr>
			<tr>
			<td colspan="2">
				<center>
					<input type="submit" value="Sign-in" name="btnSI">
				</center>
			</td>
			</tr>
		</table>
		<br><br>
		 
	</form>
	<br><br><br><br><br>
	<a href="#">Help</a><br>
	<a href="#">Terms and Conditions</a>
</div>
</center>