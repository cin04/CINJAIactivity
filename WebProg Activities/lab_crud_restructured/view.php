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

        $query = "SELECT * FROM members";
        $statement = $conn->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll();
        foreach ($result as $row): ?>
            <?php $dbid = $row['member_id']; ?>
            <?php $dbfamilyname = $row['familyname']; ?>
            <?php $dbfirstname = $row['firstname']; ?>
            <?php $dbmiddlename = $row['middlename']; ?>
            <?php $dbgender = $row['gender']; ?>
            <?php $dbcivil = $row['civil']; ?>
            <?php $dbhobbies = $row['hobbies']; ?>
            <?php $dbaddress= $row['address']; ?>
    <tr>
        <td><?php echo ($dbid) ?></td>
        <td><?php echo ($dbfamilyname) ?></td>
        <td><?php echo ($dbfirstname) ?></td>
        <td><?php echo ($dbmiddlename) ?></td>
        <td><?php echo ($dbgender) ?></td>
        <td><?php echo ($dbcivil) ?></td>
        <td><?php echo ($dbhobbies) ?></td>
        <td><?php echo ($dbaddress) ?></td>
        <td><a href='update.php?user_id=<?php echo $dbid?>'>Edit</a></td>
        
    </tr>
    <?php endforeach; ?>

</table>