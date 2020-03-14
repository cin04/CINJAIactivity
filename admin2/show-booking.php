<?php 

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<style type="text/css">
  img{
      max-height: 120px;
      max-width: 120px;
    }
</style>

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
            <label>Service</label>
            <input type="text" name="service" class="form-control" required="required" autofocus="autofocus">
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" required="required">
          </div>
          <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control" required="required">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary">Close</button>
            <button type="submit" name="btnAdd" class="btn btn-primary">Add</button>
          </div>
      </div>
  </form>

    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Services
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

        $query = "SELECT * FROM bookingtbl";
        $query_run = mysqli_query($conn, $query);

      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Service</th>
            <th>Time</th>
            <th>Date</th>
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
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['service']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['date']; ?></td>
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
