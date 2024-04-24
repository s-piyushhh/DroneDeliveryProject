<?php


include 'db.php';

$id = $_GET['id'];
$rider = $_GET['rider'];

$sql = "UPDATE `order1` SET `operator`='$rider' ,`status`='accepted' WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Order Accepted');
window.location.href='myorder.php';
</script>";
} else {
  echo "Error updating record: " . $conn->error;
}




?>