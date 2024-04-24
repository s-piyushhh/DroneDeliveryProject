<?php
// Include database connection
include 'db.php';

// Check if order ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the order ID to prevent SQL injection
    $order_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Prepare SQL statement to delete the order
    $sql = "DELETE FROM `order1` WHERE `id` = '$order_id'";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Order Deleted successfully !!');
window.location.href='pendingorder.php';
</script>";
    } else {
        echo "Error deleting order: " . $conn->error;
    }

   
} else {
    // If order ID is not provided or empty, redirect back to the page showing pending orders
    header("Location: pending_orders.php");
    exit();
}
?>
