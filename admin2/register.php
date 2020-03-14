<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="registerUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">

          <div class="form-group">
          	<label>Full Name</label>
          	<input type="text" name="fname" class="form-control" required="required" autofocus="autofocus">
          </div>
          <div class="form-group">
          	<label>Username</label>
          	<input type="text" name="username" class="form-control" required="required">
          </div>
          <div class="form-group">
          	<label>Password</label>
          	<input type="password" name="pass" class="form-control" required="required">
          </div>
          <div class="form-group">
          	<label>Confirm Password</label>
          	<input type="password" name="cpass" class="form-control" required="required">
          </div>
          <input type="hidden" name="usertype" value="admin">

        </div> 
          <div class="modal-footer">
          	<button type="button" class="btn btn-secondary">Close</button>
          	<button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
          </div>
      
	     </form>

    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerUser">
              <i class="fas fa-user-plus"></i>
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
      echo '<div class="alert alert-success" role="alert"> '.$_SESSION['success'].' </div>';
      unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
      echo '<div class="alert alert-warning" role="alert"> '.$_SESSION['status'].' </div>';
      unset($_SESSION['status']);
    }
    ?>

    <div class="table-responsive">

      <?php
        // $conn = mysqli_connect("localhost","root","","admin");

        $query = "SELECT * FROM register";
        $query_run = mysqli_query($conn, $query);

      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Usertype</th>
            <th colspan="2">Action </th>
          </tr>
        </thead>
        <tbody>
     
        <?php
          if (mysqli_num_rows($query_run) > 0) 
          {
            while ($row = mysqli_fetch_assoc($query_run)) 
            {
              ?>
          <tr>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['usertype']; ?></td>
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-info"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td> 
          </tr>
          <?php
           }
         }
         else {
          echo "No record found!";
       }

        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>	


<?php 
include('includes/script.php');
?>