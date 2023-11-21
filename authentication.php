<?php 
include("conn.php");

$username = $_POST['username'];
$passwordlog = $_POST['passwordlog'];


//To prevent from mysqli injection
$username = stripcslashes($username);
$passwordlog = stripcslashes($passwordlog);
$username = mysqli_real_escape_string($conn, $username);  
$passwordlog= mysqli_real_escape_string($conn, $passwordlog); 


$sql = "SELECT * FROM admin_information WHERE username = '$username' and passwordlog = '$passwordlog'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$count = mysqli_num_rows($result); 

if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}

header("http://localhost/admin-panel/logged.html");
exit();
?>