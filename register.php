<?php

$servername = "localhost";
$username = "root";
$password = "12345@Qwert";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username, password FROM user where username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username already exist, Please choose different name";
} else if ($username != $row['username']) {
    $insert = "INSERT INTO user values ('$username','$password')";
    $result = $conn->query($insert);
    echo "Registered successfully";
}
$conn->close();