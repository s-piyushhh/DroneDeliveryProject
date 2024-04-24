<?php

include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    

    // Prepare SQL statement to insert user data into the database
    $sql = "INSERT INTO operator (name, email, password) VALUES ('$fullname', '$email', '$password')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Registered successfully!!');
window.location.href='index.php';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
