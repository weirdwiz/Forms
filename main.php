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
        if ($_SESSION['username'] == NULL) {
            session_destroy();
            header("location: index.php");
        }
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
        <form class="form1">
            <input class="button" type="submit" name="create" value="Create Form">
            <input class="button" type="submit" name="view" value="View Form">
            <input class="button" type="submit" name="respose" value="View Response">
        </form>
    </div>
</body>

</html>