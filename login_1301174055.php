<?php 

	session_start();

	include("config_1301174055.php");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="login">
            <h1>login</h1>
            <form action="inputNilai_1301174055.php" method="POST">
                <input type="text" placeholder="nim" name="nim">
                <input type="password" placeholder="password" name="password">
                <button type="submit" name='submit'>Login</button>
            </form>
        </div>
    </div>
</body>
</html>