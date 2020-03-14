
<form>
<fieldset>
<?php


	if(isset($_GET['fName'])){ 
		echo "First Name:" .$_GET['fName'];
	}

	if(isset($_GET['lName'])){ 
		echo "Last Name is:" .$_GET['lName'];
	}

	if($_GET['gender']=="male")
		echo "Gender:" .$_GET['gender'];
	else
		echo "You are:" .$_GET['gender'];
?>
</fieldset>
</form>

