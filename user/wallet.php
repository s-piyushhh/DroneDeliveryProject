<?php
// Include header
include 'header.php';
// Include database connection
include 'db.php';


$sql = "SELECT * FROM `user` WHERE `email`='$sessionemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $wallet = $row["wallet"];
  }
} else {
  echo "0 results";
}


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Wallet -  <?php echo $wallet;  ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Balance</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                                <div class="form-group">
                                    <label for="fullname">Full Name:</label>
                                    <input type="text" class="form-control" value="<?php echo $sessionname; ?>" id="fullname" name="name"  required readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Current Balance:</label>
                                    <input type="text" class="form-control" value="<?php echo $wallet; ?>" id="fullname" name="name"  required readonly="">
                                </div>
                                
                                <a href="https://rzp.io/l/UNiizFdbAb"><button  class="btn btn-primary">Add Balance ( 500/- )</button></a>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
// Include footer
include 'footer.php';
?>
