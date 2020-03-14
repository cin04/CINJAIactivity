<?php 

include('security.php');
include('includes/header.php'); 
include('includes/user-navbar.php'); 
?>
<style type="text/css">
  img{
      max-height: 120px;
      max-width: 120px;
    }

</style>
<div class="container-fluid">
  <?php
        // $conn = mysqli_connect("localhost","root","","admin");

        $query = "SELECT * FROM servicetbl";
        $query_run = mysqli_query($conn, $query);

      ?>


      <form action="code.php" method="POST">
        <div class="modal-body">

          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required="required" autofocus="autofocus">
          </div>
          <div class="form-group">
            <label>Service</label>
            <select name="services">
              <?php while($row = mysqli_fetch_array($query_run)):; ?> 
              
              <option value="<?php echo $row[0]; ?>"><?php echo $row[2];?></option>
            <?php endwhile; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Time</label>
            <input type="time" name="time" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required="required">
          </div>

          <div class="modal-footer">
            <button type="submit" name="addbooking" class="btn btn-primary">Add</button>
          </div>
      </div>
  </form>
</div>
   
     

<?php 
include('includes/script.php');
?>
