<?php 
include_once('connections.php');



//use method GET to get value from the address bar
//POST is for posting
$user_id = $_GET["user_id"];

//$get_record = mysqli_query($connection,"SELECT * FROM tbluser WHERE user_id='$user_id'");
//$validate=mysqli_num_rows($get_record);

$query = "SELECT * FROM members WHERE member_id =$user_id";
$statement = $conn->prepare($query);
$statement->execute();

$result = $statement->fetchAll();
foreach ($result as $row): ?>
            <?php $dbid = $row['member_id']; ?>
            <?php $dbfamilyname = $row['familyname']; ?>
            <?php $dbfirstname = $row['firstname']; ?>
            <?php $dbmiddlename = $row['middlename']; ?>
            <?php $dbgender = $row['gender']; ?>
            <?php $dbcivil = $row['civil']; ?>
            <?php $dbhobbies = $row['hobbies']; ?>
            <?php $dbaddress= $row['address']; ?>

            
    <?php endforeach; ?>
    <?php 
    
    if(isset($_POST['btnUpdate'])){

        //$id = $_POST['LN'];
		$familyname = $_POST['LN'];
		$firstname = $_POST['FN'];
		$middlename = $_POST['MN'];
		$gender = $_POST['sex']; 
		$civil = $_POST['CS'];
		$hobbies = implode(', ', $_POST['Hobbies']);
		$address = $_POST['add'];

		$query = "UPDATE members SET 
                                    familyname='$familyname',
                                    firstname='$firstname',
                                    middlename='$middlename',
                                    gender='$gender',
                                    civil='$civil',
                                    hobbies='$hobbies',
                                    address='$address' WHERE member_id='$user_id'";
		$statement = $conn->prepare($query);
		$statement->execute();

		if ($statement) {
			header('location: index.php');
		} 

    }
    
    
    ?>
        


    <form action="#" method="POST">
		<table>
			<tr>
				<td>Family Name:</td>
				<td><input type="text" name="LN" value="<?php echo $dbfamilyname?>" required></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="FN" value="<?php echo $dbfirstname?>"required></td>
			</tr>
			<tr>
				<td>Middle Name:</td>
				<td><input type="text" name="MN" value="<?php echo $dbmiddlename?>"required></td>
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
				<td>Address:</td>
				<td><textarea name="add" row="3"></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input type="submit"  name="btnUpdate" value="Update">
						<input type="reset" name="btnCancel" value="Cancel">
						<input type="submit" name="btnView" value="View All">
					</center>
				</td>
			</tr>
		</table>
		
	</form>