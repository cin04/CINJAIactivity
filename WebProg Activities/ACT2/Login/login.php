<?php
	include_once('connections.php');
	$un = $pw="";

	if(isset($_POST['btnlogin'])) {
		$un = $_POST['user'];
		$pw = $_POST['pass'];

		$query = "SELECT * FROM registration WHERE UserName='$un' && Password='$pw'";
		$statement = $conn->prepare($query);
		$statement->execute();

		$result = $statement->fetchAll();
		if(empty($un) && empty($pw)) {
			echo "<script>alert('Failed to login');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
		else if($result) {
			echo "<script>alert('Welcome $un');</script>";
			echo "<script>window.location.href='registration.php';</script>";
		}
		else {
			echo "<script>alert('Failed to login');</script>";
			echo "<script>window.location.href='login.php';</script>";
		}
	}
?>


<link rel="stylesheet" type="text/css" 	href="styles.css">
<STYLE>a {text-decoration: none;} </STYLE>
<center>
<div id="">
	<h3>LOGIN</h3><br>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="user"></td>
			</tr>	
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
			<td colspan="2">
				<center>
					<input type="submit" value="Sign-in" name="btnlogin">
				</center>
			</td>
			</tr>
			<tr>
			<td>
				
					<a href="registration.php">Register New Account</a>
				
			</td>
			</tr>
		</table>
		<br><br>
		 
	</form>
	<br><br><br><br><br>
</div>
</center>