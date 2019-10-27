<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Open Form</title>
</head>

<body>
    <div style="float:left;">
        <?php
        session_start();
        echo "Hi " . $_SESSION["username"];
        ?>
    </div>
    <div style="float:right; margin-bottom:5px; color:black; ">
        <a href="logout.php">
            Log out</a>
    </div>
    <br>
    <div class="head" align="center">Open Form</div>
    <div align="center">
        <form class=" form1" action="" method="post">
            <input class="button" type="submit" value="Create Form" align="center">
            <input class="button" type="submit" value="View Form" align="center">
            <input class="button" type="submit" value="View Response" align="center">
        </form>
    </div>
</body>

</html>