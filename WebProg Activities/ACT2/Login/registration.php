<?php
session_start();
include('connections.php');

$lastname = $firstname = $middlename = $gender = $civil = $username = $password = $id = "";
$dblastname = $dbfirstname = $dbmiddlename = $dbgender = $dbcivil = $dbusername = $dbpassword = $dbid = "";

?>



<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" 	href="styles.css">
	<STYLE>a {text-decoration: none;} </STYLE>
</head>

<body>
<div id="wrapper">
<div id="header">
	<br><h1>REGISTER NEW ACCOUNT</h1>
</div>


<center>
<div id="right" style="background-color:blue;height:400px;width:500px;">
	<h3>Registration</h3><br>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="LN"></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="FN"></td>
			</tr>
			<tr>
				<td>Middle Name:</td>
				<td><input type="text" name="MN"></td>
			</tr>
			<tr>
				<td>Sex:</td>
				<td>
					<input type="radio" name="sex" value="Male">Male
					<input type="radio" name="sex" value="Female">Female
				</td>
			</tr>
			<tr>
				<td>Civil Status:</td>
				<td>
					<select name="CS">
						<option name ="CS" value="Single">Single</option>
						<option name ="CS" value="Married">Married</option>
						<option name ="CS" value="Widowed">Widowed</option>
						<option name ="CS" value="Separated">Separated</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="pword"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input type="submit"  name="btnRegister" value="Register">
						<input type="reset" name="btnCancel" value="Cancel">
						<input type="submit" name="btnView" value="View All">
					</center>
				</td>
			</tr>
			<tr>
			<td>
				<a href="login.php">Back</a>
			</td>
			</tr>
		</table>
		
	</form>
</div>
</center>
</div>

<?php
	
	if(isset($_POST['btnRegister'])){
		$lastname = $_POST['LN'];
		$firstname = $_POST['FN'];
		$middlename = $_POST['MN'];
		$gender = $_POST['sex']; 
		$civil = $_POST['CS'];
		$username = $_POST['uname'];
		$password = $_POST['pword'];

		$query = "INSERT INTO registration(LastName,FirstName,MiddleName,Sex,CivilStat,UserName,Password) VALUES ('$lastname','$firstname','$middlename','$gender','$civil', '$username','$password')";
		$statement = $conn->prepare($query);
		$statement->execute();

	}


?>

<center>
<br>
<form method="POST" action="#">
	Search: <input type="text" name="search">
	<input type="submit" name="btnSearch" value="Search">
</form>	
</center>
<br>
	<center>
		<?php
		if(isset($_POST['btnView']))
		include_once('view.php');
		?>
	</center>

	<!--Search-->
	<center>
		<?php
		if(isset($_POST['btnSearch']))
		include_once('search.php');
		?>
	</center>

</body>
</html>
