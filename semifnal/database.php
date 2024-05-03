<?php
// Database connection parameters
$host = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "semi_f"; // Change this to your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if $isset($_POST["submit"]) {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bday = $_POST["bday"];
    $contact_no = $_POST["contact_no"];
    $region = $_POST["region"];
    $province = $_POST["province"];
    $city_municipality = $_POST["city_municipality"];
    $barangay = $_POST["barangay"];
    $postal_code = $_POST["postal_code"];
    $type = $_POST["type"];
    $available_rooms = $_POST["available_rooms"];
    $room_type = $_POST["room_type"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $price = $_POST["price"];
    $total_payment = $_POST["total_payment"];
    $payment_method = $_POST["payment_method"];

    // SQL statement to insert data into database
    $sql = "INSERT INTO reservations (fname, lname, bday, contact_no, region, province, city_municipality, barangay, postal_code, type, available_rooms, room_type, check_in, check_out, price, total_payment, payment_method)
            VALUES ('$fname', '$lname', '$bday', '$contact_no', '$region', '$province', '$city_municipality', '$barangay', '$postal_code', '$type', '$available_rooms', '$room_type', '$check_in', '$check_out', '$price', '$total_payment', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
