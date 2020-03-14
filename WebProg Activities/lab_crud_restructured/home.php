<?php
session_start();
include('connections.php');

$id = $familyname = $firstname = $middlename = $gender = $civil = $hobbies = $address="";
$dbid = $dbfamilyname = $dbfirstname = $dbmiddlename = $dbgender = $dbcivil = $dbhobbies = $dbaddress="";

?>

<html>
<head>
	<title>Lab Exam 1</title>
	<link rel="stylesheet" type="text/css" 	href="styles.css">
<head>

<body>
<div id="wrapper">
<div id="header">
	<br><h1>Welcome to PeaceBookdatcom</h1>
</div>


<center>
<div id="right" style="background-color:blue;height:400px;width:500px;">
	<h3>Sign-up for non members</h3><br>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Family Name:</td>
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
				<td>Hobbies</td>
				<td>
					<input type="checkbox" name="Hobbies[]" value="Matulog">Matulog<br>
					<input type="checkbox" name="Hobbies[]" value="MagDOTA">MagDOTA<br>
					<input type="checkbox" name="Hobbies[]" value="Stalking sa Facebook">Stalking sa Facebook<br>
					<input type="checkbox" name="Hobbies[]" value="Magluto (at kumain)">Magluto (at kumain)<br>
					<input type="checkbox" name="Hobbies[]" value="Coding HTML,PHP,JAVASCRIPT (i like!)">Coding HTML,PHP,JAVASCRIPT (i like!)<br>
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="add" row="3"></textarea></td>
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
		</table>
		
	</form>
</div>
</center>

<div id="footer" style="background-color:red;height:50px;width:800px;clear:both;">
	<h4><center><br>Copyright 2019, all rights reserved.</center></h4>
</div>
</div>

<?php

	if(isset($_POST['btnSI'])){
		
		$_SESSION['LN']=$_POST['Uname'];
		$_SESSION['FN']=$_POST['pwd'];

		if($_POST['Uname']=="Admin" && $_POST['pwd']=="ADMIN"){
			echo "SUCCESSFULLY LOGIN";
		}
		elseif($_POST['Uname']== $_SESSION['FN'] && $_POST['pwd']==$_SESSION['LN']){
			echo "<br>SUCCESSFULLY LOGIN";
		}	
		else{
			echo "<br>ACCOUNT NOT FOUND";
		}
	}

	if (isset($_POST['btnRegister'])) {
		
		//$id = $_POST['LN'];
		$familyname = $_POST['LN'];
		$firstname = $_POST['FN'];
		$middlename = $_POST['MN'];
		$gender = $_POST['sex']; 
		$civil = $_POST['CS'];
		$hobbies = implode(', ', $_POST['Hobbies']);
		$address = $_POST['add'];

		$query = "INSERT INTO members(familyname,firstname,middlename,gender,civil,username,address) VALUES ('$familyname','$firstname','$middlename','$gender','$civil', '$hobbies','$address')";
		$statement = $conn->prepare($query);
		$statement->execute();

		if ($statement) {
			header('location: index.php');
		} 
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