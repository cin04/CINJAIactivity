<?php
$dis=$_GET['display'];
$calc=$_GET['cal'];


if(isset($_GET['cal']) || ($_GET['display'])){
	echo $_GET['cal'];
	echo $_GET['display'];
}





?>

<html>
<style>

*{
	box-sizing: border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
}
.wrap{
	width:400px;
	margin:auto;
	height:auto;
	background:#0F7D63;
	padding:15px;
}
input[type=text]{
	width:79%;
	padding:10px;
	font-size:22px;
	font-weight: bold;
	margin-top: 20px;
	border-radius: 5px;
}
input[type=button]{
	width: 89px;
	padding:10px;
	font-size: 22px;
	font-weight: bold;
	border-radius: 5px;
}
#del{
	width: 186px;
}
</style>
<body align="center">
	<div class="wrap">
	<form name="cal">
		<input type="text" name="display">
		<br><br>
		<input type="button" value="1" onclick="<?php if(isset($_GET['cal']) || ($_GET['display'])){
	echo $_GET['cal'];
	echo $_GET['display'];
}?>">&nbsp;
		<input type="button" value="2" onclick="cal.display.value+='2'">&nbsp;
		<input type="button" value="3" onclick="cal.display.value+='3'">&nbsp;
		<br><br>
		<input type="button" value="4" onclick="cal.display.value+='4'">&nbsp;
		<input type="button" value="5" onclick="cal.display.value+='5'">&nbsp;
		<input type="button" value="6" onclick="cal.display.value+='6'">&nbsp;
		<br><br>
		<input type="button" value="7" onclick="cal.display.value+='7'">&nbsp;
		<input type="button" value="8" onclick="cal.display.value+='8'">&nbsp;
		<input type="button" value="9" onclick="cal.display.value+='9'">&nbsp;
		<br><br>
		<input type="button" value="0" onclick="cal.display.value+='0'">&nbsp;
		<input type="button" value="DELETE" onclick="cal.display.value= ''" id="del">
		<br><br>
	</form>
</div>
</body>

</html>