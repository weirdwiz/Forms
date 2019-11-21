<!DOCTYPE html>

<html>
<head>
    <title> Form </title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "12345@Qwert";
$dbname = "form";

$form_UUID = $_GET["f"];
// get the the questions after getting the form uuid;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$user = uniqd("user");
?>

<div>
<!-- needs styling -->

<form action = "" method="POST">

<?php

$result = $conn->query("SELECT question from form_question where uuid=$form_UUID");
while($row = $result->fetch_assoc()){
        echo "<h1>".$row["question"]."</h1>";
        echo "<input type=\"text\" name=\"answer[]\">";
}
echo "<input type=\"text\" value=$form_UUID disabled name=\"form_UUID\">";
?>
<input type="submit" value="submit">
</form>
</div>

<?php
$conn->close();
?>
</body>
</html>
