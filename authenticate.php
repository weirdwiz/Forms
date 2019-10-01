<?php
session_start();
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

$uname = $_POST["uname"];
$pass = $_POST["pass"];

$sql = "SELECT username, password FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($uname == $row['username']) {
            if ($uname == $row['username'] && $pass == $row['password']) {
                header("Location: main.php");
            } else {
                echo "Not found";
            }
        }
    }
} else {
    echo "Table is empty";
}
$conn->close();
