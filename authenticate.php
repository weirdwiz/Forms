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
    while ($row = $result->fetch_assoc()) {
        if ($password == $row['password']) {
            echo "Mila"; 
            session_start();
            

        } 
        else {
            echo "Wrong Password";
        }
    }
}
else {
    echo "User doesn't exist";
}
// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
//     header("Location: main.php");
// }
$conn->close();
