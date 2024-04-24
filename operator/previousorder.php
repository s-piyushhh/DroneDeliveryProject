<?php
// Include header
include 'header.php';
// Include database connection
include 'db.php';

// Fetch previous orders from the database
$sql = "SELECT * FROM `order1` WHERE `status` != 'created' AND `status` != 'accepted' AND `operator`='$sessionemail'";
$result = $conn->query($sql);

// Initialize total earnings variable
$total_earnings = 0;

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Previous Orders</h1>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Previous Orders List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Order Date</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Check if there are any previous orders
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["id"] . "</td>";
                                            echo "<td>" . $row["uname"] . "</td>";
                                            echo "<td>" . $row["date"] . "</td>";
                                            echo "<td>" . $row["price"] . "</td>";
                                            echo "<td>" . $row["status"] . "</td>";
                                            echo "</tr>";

                                            // Add price to total earnings
                                            $total_earnings += $row["price"];
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No previous orders found</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <?php
                            // Output total earnings
                            echo "<h3>Total Earnings: ₹" . $total_earnings . "</h3>";
                            ?>
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
