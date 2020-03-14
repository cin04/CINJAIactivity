<?php
$link= mysqli_connect ("localhost","root","");
mysqli_select_db($link,"crud");

?>




<html>
<body>
<form name="form1" action="" method="post">
<table>

<tr>
<td>Description</td>
<td><input type="text" name ="desc"></td>
</tr>
<tr>
<td>Finish</td>
<td><input type="text" name ="finish"></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name ="price"></td>
</tr>
<tr>
<td>Line Id</td>
<td><input type="text" name ="line"></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file" name ="img"></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="btnAdd" value="insert"> </td>
<input type="submit" name="submit2" value="delete">

<input type="submit" name="submit3" value="update">
<input type="submit" name="submit4" value="display">
<input type="submit" name="submit5" value="search">
</tr>

</table>

</form>
<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"insert into table1 values('$_POST[name]','$_POST[city]')");

}
if(isset($_POST["submit2"]))
{
mysqli_query($link,"delete from table1 where name='$_POST[name]'");

}
if(isset($_POST["submit3"]))
{
mysqli_query($link, " update table1 set name= '$_POST[city]' where name= '$_POST[name]'");

}
if(isset($_POST["submit4"]))
{
$res=mysqli_query($link, " select * from table1");

echo"<table border=1>";
echo "<tr>";
echo "<th>"; echo"name";   echo"</th>";
echo "<th>"; echo "city";   echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["name"];   echo"</td>";
echo "<td>"; echo $row["city"];   echo"</td>";
echo"</tr>";
}
echo "</table>";
}


if(isset($_POST["submit5"]))
{
$res=mysqli_query($link, " select * from table1 where name='$_POST[name]'");

echo"<table border=1>";
echo "<tr>";
echo "<th>"; echo"name";   echo"</th>";
echo "<th>"; echo "city";   echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["name"];   echo"</td>";
echo "<td>"; echo $row["city"];   echo"</td>";
echo"</tr>";
}
echo "</table>";
}
?>
</body>


</html>





///himo database crud . name ug city rani 

complete crud