<?php
include("conn.php");



// Retrieve data from the form
$username = $_POST['username'];
$passwordlog = $_POST['passwordlog'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email_address'];
$phone_number = $_POST['phone_number'];


// Insert data into the database
$sql = "INSERT INTO admin_information (id, username, passwordlog, confirm_password, email_address, phone_number) VALUES ('NULL','$username','$passwordlog','$confirm_password ', '$email','$phone_number ')";


if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

header("http://localhost/admin-panel/register.html");

exit(); 

?>