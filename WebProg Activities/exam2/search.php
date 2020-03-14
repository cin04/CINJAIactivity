<?php
$link= mysqli_connect ("localhost","root","");
mysqli_select_db($link,"castro");

?>

<table border="1">
    <?php 
    
        //include('dummy.php');
        //$familyname = $_POST['LN'];
        //$firstname = $_POST['FN'];
        
        //$_POST['Uname']=$familyname;
        //$_POST['pwd']=$firstname;
        $search = $_POST['search'];

        $query = "SELECT * FROM members WHERE Lname LIKE '%$search%' || Fname LIKE '%$search%' || Total LIKE '%$search'";

        $result = $statement->fetchAll();
        foreach ($result as $row): ?>
            <?php $ln = $row['Lname']; ?>
            <?php $fn = $row['Fname']; ?>
            <?php $total = $row['Total']; ?>
            <tr>
                <td><?php echo ($ln) ?></td>
                <td><?php echo ($fn) ?></td>
                <td><?php echo ($total) ?></td>
            </tr>
    <?php endforeach; ?>
</table>