<?php
include 'db_config.php'; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];

    // Prepare SQL query
    $sql = "INSERT INTO users (first_name, last_name, email, mobile, dob, address, city, state, zipcode) 
            VALUES ('$first_name', '$last_name', '$email', '$mobile', '$dob', '$address', '$city', '$state', '$zipcode')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Close connection
}
?>
