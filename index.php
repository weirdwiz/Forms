<!DOCTYPE html>

<head>
<<<<<<< HEAD:index.html
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<title>Open Form</title>
</head>

<body>
	<p class="head" align="center">Open Form</p>
	<div class="main">
		<p class="sign" align="center">Sign in</p>
		<form class="form1">
			<input class="un " type="text" align="center" placeholder="Username">
			<input class="pass" type="password" align="center" placeholder="Password">
			<a class="submit" align="center">Sign in</a>
			<p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
			<a href="signup.html">
				<p class="register" align="center">Sign Up</p>
			</a>
		</form>
	</div>

=======
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Open Form</title>
</head>

<body>
    <p class="head" align="center">Open Form</p>
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form class="form1" action="authenticate.php" method="post">
            <input class="un " type="text" name="un" align="center" placeholder="Username" required>
            <input class="pass" type="password" name="pass" align="center" placeholder="Password" required>
            <input class="submit" type="submit" value="Sign in" align="center">
            <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
            <a href="signup.php">
                <p class="register" align="center">Sign Up</p>
            </a>
        </form>
    </div>
>>>>>>> 27aa298... Adds php:index.php
</body>

</html>