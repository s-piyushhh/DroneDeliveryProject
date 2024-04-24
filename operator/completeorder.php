<?php
// Include database connection
include 'db.php';


    // Sanitize the order ID to prevent SQL injection
    $order_id = $_GET['id'];

    // Update the status of the order to 'completed'
    $sql = "UPDATE `order1` SET `status` = 'completed' WHERE `id` = '$order_id'";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Order Completed');
window.location.href='previousorder.php';
</script>";
    } else {
        echo "Error updating order status: " . $conn->error;
    }

   

?>
