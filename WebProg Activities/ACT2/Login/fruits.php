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
				<td colspan="6" align="center">
				<input type="submit"  name="btnSubmit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</center>
<center>
<?php
	if(isset($_POST['btnSubmit'])){
		if(!empty($_POST['fruit'])){
			$fruits=$_POST['fruit'];
			$quanty=$_POST['qty'];
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
			echo "<b>Please Select Atleast One Option.</b>";
		}
	}
?>
</center>
</body>
</html>