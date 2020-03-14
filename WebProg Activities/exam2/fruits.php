<?php
$link= mysqli_connect ("localhost","root","");
mysqli_select_db($link,"castro");

?>

<html>
<body>
<center>
	<h1>Buy Now</h1><br>
	<form action="#" method="POST">
		<table>
			<tr>
				<th>SELECT</th>
				<th>FRUITS</th>
				<th>PRICE</th>
				<th>QTY</th>
			</tr>
			<tr>
				<td><input type="checkbox" value="50" name="fruit[]"></td>
				<td>Apple</td>
				<td>50</td>
				<td><input type="text" name="qty[]"></td>
			</tr>
			<tr>
				<td><input type="checkbox" value="60" name="fruit[]"></td>
				<td>Manga</td>
				<td>60</td>
				<td><input type="text" name="qty[]"></td>
			</tr>
			<tr>
				<td><input type="checkbox" value="45" name="fruit[]"></td>
				<td>Orange</td>
				<td>45</td>
				<td><input type="text" name="qty[]"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr>
				<td colspan="6" align="center">
				<input type="submit"  name="btnSubmit" value="Submit">
				</td>
			</tr>
		</table>
		Search: <input type="text" name="search">
			<input type="submit" name="btnSearch" value="Search"><input type="submit" name="btnDisplay" value="Display">
	</form>
</center>
<center>
<?php
	if(isset($_POST['btnSubmit'])){
		if(!empty($_POST['fruit'])){
			$fruits=$_POST['fruit'];
			$quanty=$_POST['qty'];
			$ln =$_POST['lastname'];
			$fn =$_POST['firstname'];
			$checked_count = count($fruits);
			$total = 0;
			$apple = 50;
			$manga = 60;
			$orange = 45;


			for ($i=0; $i<$checked_count ; $i++){
   				if ($fruits[$i] == 50){
        			$total = $total + $apple * $quanty[$i];
        			echo "Apple : $quanty[$i] <br><br>";
				}elseif ($fruits[$i] == 60){
       				$total = $total + $manga * $quanty[$i];
        			echo "Manga : $quanty[$i] <br><br>";
    			}elseif ($fruits[$i] == 45){
        			$total = $total + $orange * $quanty[$i];
        			echo "Orange : $quanty[$i] <br><br>";
        		}
       		}echo "Total = $total <br><br>";
		}else{
			echo "<b>Please select fruits you want to buy</b>";
		}

		mysqli_query($link,"Insert into fruits values('$ln','$fn','$total')");
	}

	if(isset($_POST["btnSearch"])){
		$ln =$_POST['lastname'];
		$fn =$_POST['firstname'];
		$total = 0;
		$res=mysqli_query($link, " select * from fruits where Lname='$_POST[lastname]' || Fname='$_POST[firstname]' || Total='$total'");

		echo"<table border=1>";
echo "<tr>";
echo "<th>"; echo"Last name";   echo"</th>";
echo "<th>"; echo "First Name";   echo"</th>";
echo "<th>"; echo "Total";   echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["Lname"];   echo"</td>";
echo "<td>"; echo $row["Fname"];   echo"</td>";
echo "<td>"; echo $row["Total"];   echo"</td>";
echo"</tr>";
		}
		echo "</table>";
	}

	if(isset($_POST["btnDisplay"]))
{
$res=mysqli_query($link, " select * from fruits");

echo"<table border=1>";
echo "<tr>";
echo "<th>"; echo"Last name";   echo"</th>";
echo "<th>"; echo "First Name";   echo"</th>";
echo "<th>"; echo "Total";   echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["Lname"];   echo"</td>";
echo "<td>"; echo $row["Fname"];   echo"</td>";
echo "<td>"; echo $row["Total"];   echo"</td>";
echo"</tr>";
}
echo "</table>";
}
?>

</center>
</body>
</html>