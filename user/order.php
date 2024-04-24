<?php

include 'db.php';

$email = $_POST['email'];
$name = $_POST['name'];


$sql = "SELECT * FROM `user` WHERE `email`='$email' and `name`='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $address = $row["address"];
    $lat = $row["lat"];
    $lon = $row["lon"];
    $picklat = $row["picklat"];
    $picklon = $row["picklon"];
  }
}




$item = $_POST['item'];
$weight = $_POST['weight'];

$price = $weight * 0.20;




function calculateDistance($lat1, $lon1, $lat2, $lon2) {
    // The radius of the Earth in kilometers
    $earthRadius = 6371;

    // Convert latitude and longitude from degrees to radians
    $latFrom = deg2rad($lat1);
    $lonFrom = deg2rad($lon1);
    $latTo = deg2rad($lat2);
    $lonTo = deg2rad($lon2);

    // Calculate the differences
    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    // Haversine formula
    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
        cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    
    // Calculate the distance
    $distance = $angle * $earthRadius;

    return $distance;
}

// Example usage
$latitude1 = $lat; // Latitude of first place
$longitude1 = $lon; // Longitude of first place
$latitude2 =  $picklat; // Latitude of second place
$longitude2 = $picklon; // Longitude of second place

$distance = calculateDistance($latitude1, $longitude1, $latitude2, $longitude2);
echo "The distance between the two places is approximately " . round($distance, 2) . " kilometers.";



$sql = "INSERT INTO `order1`(`uid`, `item`, `weight`, `price`, `uname`, `lat`, `lon`, `address`,`picklat`,`picklon`) VALUES ('$email','$item','$weight','$price','$name','$lat','$lon','$address','$picklat','$picklon')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Booking Created!!');
window.location.href='pendingorder.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}











?>