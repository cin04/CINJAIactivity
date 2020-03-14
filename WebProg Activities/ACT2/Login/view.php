<?php
include_once('connections.php');

?>
<table border="1">
    <?php 
    
        //include('dummy.php');
        //$familyname = $_POST['LN'];
        //$firstname = $_POST['FN'];
        
        //$_POST['Uname']=$familyname;
        //$_POST['pwd']=$firstname;

        $query = "SELECT * FROM registration";
        $statement = $conn->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll();
        foreach ($result as $row): ?>
            
           <?php $dbid = $row['reg_id']; ?>
            <?php $dblastname = $row['LastName']; ?>
            <?php $dbfirstname = $row['FirstName']; ?>
            <?php $dbmiddlename = $row['MiddleName']; ?>
            <?php $dbgender = $row['Sex']; ?>
            <?php $dbcivil = $row['CivilStat']; ?>
            <?php $dbusername = $row['UserName']; ?>
            <?php $dbpassword= $row['Password']; ?>
            <tr>
                <td><?php echo ($dbid) ?></td>
                <td><?php echo ($dblastname) ?></td>
                <td><?php echo ($dbfirstname) ?></td>
                <td><?php echo ($dbmiddlename) ?></td>
                <td><?php echo ($dbgender) ?></td>
                <td><?php echo ($dbcivil) ?></td>
                <td><?php echo ($dbusername) ?></td>
                <td><?php echo ($dbpassword) ?></td>
            </tr>
    <?php endforeach; ?>

</table>