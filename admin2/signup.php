<?php 
// include('security.php');
session_start();
include('includes/header.php'); 
// include('includes/navbar.php'); 
?>

<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Register</div>
      <div class="card-body">
        <?php

          if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
          {
            echo '<div class="alert alert-warning" role="alert"> '.$_SESSION['status'].' </div>';
            unset($_SESSION['status']);
          }

        ?>

      <form action="code.php" method="POST">
        <div class="modal-body">

          <div class="form-group">
          	<label>Full Name</label>
          	<input type="text" name="fullname" class="form-control" required="required" autofocus="autofocus">
          </div>
          <div class="form-group">
          	<label>Username</label>
          	<input type="text" name="users" class="form-control" required="required">
          </div>
          <div class="form-group">
          	<label>Password</label>
          	<input type="password" name="passes" class="form-control" required="required">
          </div>
          <div class="form-group">
          	<label>Confirm Password</label>
          	<input type="password" name="cpasses" class="form-control" required="required">
          </div>
          <input type="hidden" name="types" value="admin">

        </div> 
          	<button type="submit" name="btnSignup" class="btn btn-primary btn-user btn-block">Register</button>
      
	     </form>
          <div class="text-left">
          <p>Already have an account?</p><a class="d-block small mt-3" href="login.php">Login</a>
        </div>
    </div>
  </div>
</div>


<?php 
include('includes/script.php');
?>