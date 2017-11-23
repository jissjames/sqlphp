<?php
//Development db variables
// $servername = "127.0.0.1";
// $username = "jissjames9";
// $password = "";
// $dbname = "dbTest";

//Production db variables
$servername = "eu-cdbr-west-01.cleardb.com";
$username = "b1a00444c87ad6";
$password = "21fcccdd";
$dbname = "heroku_ea219b2aed88b3d";

$user_name = $_POST["user_name"];
$address = $_POST["address"];
$phone = $_POST["phone"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO tblUsers (UserNAME, UserADDRESS, UserPHONE)
VALUES ('$user_name', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>