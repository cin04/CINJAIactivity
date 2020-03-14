<html>
<style type="text/css">
	.wrap{
	width:400px;
	margin:auto;
	height:auto;
	background:#0F7D63;
	padding:15px;
}
input[type=text]{
	width:55%;
	padding:3px;
	font-size:22px;
	font-weight: bold;
	margin-top: 20px;
	border-radius: 5px;
}
input[type=submit]{
	width: 150px;
	padding:10px;
	font-size: 22px;
	font-weight: bold;
	border-radius: 5px;
}
	
</style>
<body align="center">
	<div class="wrap">
<form method="post" action="calc.php" name="cal">
<strong>Enter Value 1:</strong> &nbsp;<input type="text" name="val1"><br><br>
<strong>Enter Value 2:</strong> &nbsp;<input type="text" name="val2"><br><br>
<strong>Enter Value 3:</strong> &nbsp;<input type="text" name="val3"><br><br><br>

<input type="submit" name="add" value="ADD" formtarget="_self">&nbsp;&nbsp;
<input type="submit" name="subtract" value="SUBTRACT" formtarget="_self">&nbsp;&nbsp;<br><br>
<input type="submit" name="multiply" value="MULTIPLY" formtarget="_self">&nbsp;&nbsp;
<input type="submit" name="divide" value="DIVIDE" formtarget="_self">&nbsp;&nbsp;
</form>
</body>
</html>


<?php

if (isset($_POST['add'])){
	if(is_numeric($_POST['val1'])){
		$num1=$_POST['val1'];
		$num2=$_POST['val2'];
		$num3=$_POST['val3'];
		$add=$num1+$num2+$num3;
		echo "All field is filled with number! The result is (Sum): " .$add;
	} else {
		echo "Please type a number only. Try again.";
	}
 
}elseif (isset($_POST['subtract'])){
	$num1=$_POST['val1'];
	$num2=$_POST['val2'];
	$num3=$_POST['val3'];
	$sub=$num1-$num2-$num3;
	echo '<strong> Result (Sum): '.$sub.' </strong>';
}
elseif (isset($_POST['multiply'])){
	$num1=$_POST['val1'];
	$num2=$_POST['val2'];
	$num3=$_POST['val3'];
	$mult=$num1*$num2*$num3;
	echo '<strong> Result (Sum): '.$mult.' </strong>';
}
elseif (isset($_POST['divide'])){
	$num1=$_POST['val1'];
	$num2=$_POST['val2'];
	$num3=$_POST['val3'];
	$div=$num1/$num2/$num3;
	echo '<strong> Result (Sum): '.$div.' </strong>';
}

?>