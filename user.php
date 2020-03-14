<?php
$gender = "";
$egender = "";
$course = "";
$activities = "";
$college = "";
$desc = "";
$other = "";


if (isset($_GET['submit'])){

	$gender = $_GET["gender"];
	$course = $_GET["course"];
	$first = $_GET["fName"];
	$last = $_GET["lName"];
	$college = $_GET['college'];
	$activities = $_GET['activities'];
	$desc = $_GET['desc'];
	$other = $_GET['other'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		
		<style type="text/css">
	
		table, td {
			border: 1px solid #b3b300;
		
		}
		body{
			background-color: #006400;
			font-style: bold;
		}
		fieldset {
			padding:10px;
			width:480px;
			line-height:1.2;
		}
	</style>
	</head>
	
	<body>
		<form action="user.php" method="get">
			<fieldset style="border: #47a56a 2px solid; background-color: #006400">
					<table>
						<tr>
							<td><strong>First Name:</strong></td> 
							<td><input type="text" size="46" name="fName" placeholder="*Required field" value="<?php if(isset($_GET['fName'])){ echo $_GET['fName'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Last Name:</strong></td> 
							<td><input type="text" size="46" name="lName" placeholder="*Required field" value="<?php if(isset($_GET['lName'])){ echo $_GET['lName'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Gender:</strong></td> 
							<td><input type="radio" name="gender" value="male" <?php if ($gender == "male") { echo "checked";}?>>Male&nbsp;
								<input type="radio" name="gender" value="female" <?php if($gender == "female"){ echo "checked";}?>>Female
							</td>
						</tr>
						<tr>
							<td><strong>College:</strong></td>
							<td>
								<select name="college"size="4">
									<option value="cee" <?php if ($college == "cee") { echo "selected";}?>>CEE</option>
									<option value="case" <?php if ($college == "case") { echo "selected";}?>>CASE</option>
									<option value="cce" <?php if ($college == "cce") { echo "selected";}?>>CCE</option>
									<option value="cte" <?php if ($college == "cte") { echo "selected";}?>>CTE</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><strong>Course:</strong></td>
							<td>
								<select name="course">
									<option value="is" <?php if ($course == "is") { echo "selected";}?>>IS</option>
									<option value="it" <?php if ($course == "it") { echo "selected";}?>>IT</option>
									<option value="cs" <?php if ($course == "cs") { echo "selected";}?>>CS</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><strong>Contact Number:</strong></td> 
							<td><input type="text" size="46" name="contact" placeholder="*Required field" value="<?php if(isset($_GET['contact'])){ echo $_GET['contact'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Email Address:</strong></td> 
							<td><input type="text" size="46" name="email" placeholder="*Required field" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Activities:</strong></td>
							<td>
								<input type="checkbox" value="swim" name="activities" <?php if ($activities == "swim") { echo "checked";}?>>Swimming&nbsp;<input type="checkbox" value="bike" name="activities" <?php if ($activities == "bike") { echo "checked";}?>>Biking&nbsp;
								<input type="checkbox" value="sleep" name="activities" <?php if ($activities == "sleep") { echo "checked";}?>>Sleeping&nbsp;<input type="checkbox" value="study" name="activities" <?php if ($activities == "study") { echo "checked";}?>>Studying&nbsp;
							</td>
						</tr>
						<tr>
							<td><strong>Description:</strong></td> 
							<td>
								<textarea rows="4" cols="44" name="desc"><?php echo $desc;?></textarea>
							</td>
						</tr>	
						<tr>
							<td><strong>Other Comments:</strong></td> 
							<td>
								<textarea rows="4" cols="44" name="other"><?php echo $other;?></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" formtarget="_blank"></td>
						</tr>
					</table>
			</fieldset>
		</form>
	</body>
</html>