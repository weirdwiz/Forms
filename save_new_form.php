<?php

$servername = "localhost";
$username = "root";
$password = "12345@Qwert";
$dbname = "form";

$new_questions = $_POST["new_question"];
$form_UUID = uniqid();

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
}

$user = $_SESSION["username"];

$insert = "INSERT INTO username_form values ('$user','$form_UUID')";
$conn->query($insert);

foreach($new_questions as $question){
        $question = mysqli_real_escape_string($conn, $question);
        $insert = "INSERT INTO form_question values ('$form_UUID','$question')";
        $conn->query($insert);
}

// TODO: create form URL
$form_url = "http://" . $_SERVER['SERVER_NAME'] . "/form?f=" . $form_UUID;
echo $form_url;

// generate a link (using form uuid)
// find a way to open all the questions from form UUID
// that is find a way to read the URL and fetch content
// then add the way for user the get all his forms and the data on the form
// make a place to store all the things
?>
