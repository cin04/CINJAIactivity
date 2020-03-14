<?php
$gender = "";
$egender = "";
if (isset($_POST['submit'])){
}
$gender = $_GET["gender"];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>
	
	<body>

		<!--<?php $signi= $row['signi']; ?> -->
		<form action= "form.php" method="get">
			<fieldset style="border: #47a56a 2px solid; background-color: #006400">
				
					<table>
						<tr>
							<td><strong>First Name:</strong></td> 
							<td><input type="text" size="46" name="fName" value="<?php if(isset($_GET['fName'])){ echo $_GET['fName'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Last Name:</strong></td> 
							<td><input type="text" size="46" name="lName" value="<?php if(isset($_GET['lName'])){ echo $_GET['lName'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Gender:</strong></td> 
							<td><input type="radio" name="gender" value="male" <?php if($gender == "male"){ print "checked";}?>> Male&nbsp;
								<input type="radio" name="gender" value="female" <?php if($gender == "female"){ print "checked";}?>> Female
							</td>
						</tr>
						<tr>
							<td><strong>College:</strong></td>
							<td>
								<select size="4">
									<option name="cee" value="<?php if(isset($_GET['cee'])){ echo $_GET['cee'];}?>">CEE</option>
									<option name="case" value="<?php if(isset($_GET['case'])){ echo $_GET['case'];}?>">CASE</option>
									<option name="cce" value="<?php if(isset($_GET['cce'])){ echo $_GET['cce'];}?>">CCE</option>
									<option name="cte" value="<?php if(isset($_GET['cte'])){ echo $_GET['cte'];}?>">CTE</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><strong>Course:</strong></td>
							<td>
								<select>
									<option value="is" >IS</option>
									<option value="it">IT</option>
									<option value="cs">CS</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><strong>Contact Number:</strong></td> 
							<td><input type="text" size="46" name="contact" value="<?php if(isset($_GET['contact'])){ echo $_GET['contact'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Email Address:</strong></td> 
							<td><input type="text" size="46" name="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];}?>"></td>
						</tr>
						<tr>
							<td><strong>Activities:</strong></td>
							<td>
								<input type="checkbox">Swimming&nbsp;<input type="checkbox">Biking&nbsp;
								<input type="checkbox">Sleeping&nbsp;<input type="checkbox" checked>Studying&nbsp;
							</td>
						</tr>
						<tr>
							<td><strong>Description:</strong></td> 
							<td>
								<textarea rows="4" cols="44" name="description" value="<?php if(isset($_GET['description'])){ echo $_GET['description'];}?>">
								</textarea>
							</td>
						</tr>	
						<tr>
							<td><strong>Other Comments:</strong></td> 
							<td>
								<textarea rows="4" cols="44" name="comments" value="<?php if(isset($_GET['comments'])){ echo $_GET['comments'];}?>">
								</textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><button type="submit" name="submit" formtarget="_blank">Submit</button> &nbsp; <button type="submit" formtarget="_blank">Reset</button></td>
						</tr>
					</table>
			</fieldset>
		</form>
	</body>
</html>
