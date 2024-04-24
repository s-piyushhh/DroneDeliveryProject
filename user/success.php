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


$wallet = $wallet + 500;

$sql = "UPDATE `user` SET `wallet`='$wallet'  WHERE `email`='$sessionemail'";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Wallet Recharged');
window.location.href='wallet.php';
</script>";
} else {
  echo "<script>
alert('Wallet Not Recharged');
window.location.href='wallet.php';
</script>";
}

?>



