<html>
<body>
<form action="third.php" method="get">

<input type="checkbox" name="choice[]" value="1"required="required"/>Apple 50
<input name="quantity[]" type="text" /><br />

<input type="checkbox" name="choice[]" value="2" />Manga 60
<input name="quantity[]" type="text" /><br />

<input type="checkbox" name="choice[]" value="3"/>Orange 45
<input name="quantity[]" type="text" /><br />



<input type="submit" value="Submit"/>

</form>


<?php

if(isset($_GET["choice"])){
	$food=$_GET["choice"];
	$quantity=$_GET["quantity"];
	$c = count($food);
	$price = 0.0;


	for ($i=0; $i<$c ; $i++){
    if ($food[$i] == 1){
		
        $price = $price + 50 * $quantity[$i];
		
        echo "You have selected " .$quantity[$i]." Apple <br>";
    }

     if ($food[$i] == 2){
        $price = $price + 60 * $quantity[$i];
        echo "You have selected" .$quantity[$i]." Manga <br>";
    }

     if ($food[$i] == 3){
        $price = $price + 45 * $quantity[$i];
        echo "You have selected " .$quantity[$i]." Orange <br>";
    }
	
    
   }
  echo "Total: ".$price . "<br>";
	}
	else {
	echo "Please select something!";
}






?>

</body>
</html>