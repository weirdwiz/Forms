<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Open Form</title>
</head>

<body>
    <div class="head" align="center">Open Form</div>
    <div class="message">
        <?php
        session_start();
        $message = $_SESSION["message"];
        echo $message;
        ?>
    </div>

</body>

</html>