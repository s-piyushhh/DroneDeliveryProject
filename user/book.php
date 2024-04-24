<?php
// Include header
include 'header.php';
// Include database connection
include 'db.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Book New Order</h1>
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
                            <h3 class="card-title">Book Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="order.php" method="POST">
                                
                                <div class="form-group">
                                    <label for="fullname">Full Name:</label>
                                    <input type="text" name="email" value="<?php echo $sessionemail; ?>" hidden="">
                                    <input type="text" class="form-control" value="<?php echo $sessionname; ?>" id="fullname" name="name"  required readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="date">Item:</label>
                                    <input type="text" class="form-control"  name="item" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">Pickup Latitute:</label>
                                    <input type="text" class="form-control"  name="picklat" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">Pickup Longitutde:</label>
                                    <input type="text" class="form-control"  name="picklon" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">Weight (in Grams ):</label>
                                    <input type="number" min="0" max="1000" class="form-control"  name="weight"  required>
                                </div>

                              
                                
                                
                                
                                <button type="submit" class="btn btn-primary">Book Parcel</button>
                            </form>
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
