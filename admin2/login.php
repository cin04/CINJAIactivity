<?php 
// include('security.php');
session_start();
include('includes/header.php'); 
// include('includes/navbar.php'); 
?>


  
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php

          if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
          {
            echo '<div class="alert alert-warning" role="alert"> '.$_SESSION['status'].' </div>';
            unset($_SESSION['status']);
          }

        ?>
        <form class="user" action="logincode.php" method="post">

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputUser" name="user" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputUser">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button type="submit" name="btnLogin" class="btn btn-primary btn-user btn-block" href="index.php"> Login </button>
        </form>
        <div class="text-left">
          <a class="d-block small mt-3" href="signup.php">Register an Account</a>
        </div>
      </div>
    </div>
  </div>



<?php 
include('includes/script.php');
  
?>