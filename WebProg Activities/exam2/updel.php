<?php
$link= mysqli_connect ("localhost","root","");
mysqli_select_db($link,"crud");

?>




<html>
<body>
<form action="#" method="post">

<input type="text" name ="lname" placeholder="Last Name">
<input type="text" name ="fname" placeholder="First Name"><br>
<input type="text" name="search" placeholder="Search">
<input type="submit" name="btnSubmit" value="Submit">&nbsp;
<input type="submit" name="btnDelete" value="Delete">&nbsp;
<input type="submit" name="btnUpdate" value="Update">&nbsp;
<input type="submit" name="btnView" value="View All">&nbsp;
<input type="submit" name="btnSearh" value="Search">&nbsp;

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