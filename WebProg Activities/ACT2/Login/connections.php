<?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=login", "root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "<script type='text/javascript'>alert('Connection Successfully Established');</script>"; 
    }
catch(PDOException $e)
    {
    	//$err = $e->getMessage();
    echo "<script type='text/javascript'>alert('Connection Failed:');</script>";	
    echo "Connection failed: " . $e->getMessage();
    }

 ?>