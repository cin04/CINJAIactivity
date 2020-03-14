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

<div id="left">
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
		</table>
		<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Sign-in" name="btnSI"> 
	</form>
	<br><br><br><br><br>
	<a href="#">Help</a><br>
	<a href="#">Terms and Conditions</a>
</div>

<div id="right" style="background-color:blue;height:400px;width:500px;float:left;">
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
						<option>Single</option>
						<option>Married</option>
						<option>Widowed</option>
						<option>Separated</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Hobbies</td>
				<td>
					<input type="checkbox" name="Hobbies[]" value="Matulog">Matulog<br>
					<input type="checkbox" name="Hobbies[]" value="MagDOTA">MagDOTA<br>
					<input type="checkbox" name="Hobbies[]" value="Stalking sa Facebook">Stalking sa Facebook<br>
					<input type="checkbox" name="Hobbies[]" value="Magluto (at kumain)k">Magluto (at kumain)<br>
					<input type="checkbox" name="Hobbies[]" value="Coding HTML,PHP,JAVASCRIPT (i like!)">Coding HTML,PHP,JAVASCRIPT (i like!)<br>
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="add" row="3"></textarea></td>
			</tr>
		</table>
		<br><br>
		<center><input type="submit" value="Register" name="reg"> <input type="reset" value="Cancel"> <input type="submit" name="view" value="view"></center>
	</form>
</div>

<div id="footer" style="background-color:red;height:50px;width:800px;clear:both;">
	<h4><center><br>Copyright 2019, all rights reserved.</center></h4>
</div>
</div>
/**
<?php



try {
    $conn = new PDO("mysql:host=localhost;dbname=sample_db", "root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script type='text/javascript'>alert('Connection Successfully Established');</script>"; 
    }
catch(PDOException $e)
    {
    	//$err = $e->getMessage();
    echo "<script type='text/javascript'>alert('Connection Failed:');</script>";	
    echo "Connection failed: " . $e->getMessage();
    }

    if(isset($_POST['view'])){
	
		echo "SUCCESSFULLY REGISTERED";
		echo "<br>Full Name: ".$_POST['LN'].", ".$_POST['FN']." ".$_POST['MN'];
		echo "<br>Sex: ".$_POST['sex'];
		echo "<br>CS: ".$_POST['CS'];
		echo "<br>Hobbies: ".$_POST['CS'];
		$_POST['Uname']=$_POST['LN'];
		$_POST['pwd']=$_POST['FN'];

	}
$_POST['LN']=$_POST['Uname'];
$_POST['FN']=$_POST['pwd'];

	if(isset($_POST['btnSI'])){
		echo "dumm1: ". $_POST['LN'];
		echo "<br>dumm2: ". $_POST['FN'];
		if($_POST['Uname']=="Admin" && $_POST['pwd']=="ADMIN"){
			echo "SUCCESSFULLY LOGIN";
		}
		elseif($_POST['Uname']== $_POST['FN'] && $_POST['pwd']==$_POST['LN']){
			echo "<br>SUCCESSFULLY LOGIN";
		}	
		else{
			echo "<br>ACCOUNT NOT FOUND";
		}
	}
?>*/
</body>
</html>