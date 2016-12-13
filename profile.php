<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<?php require_once "nav.php" ?>
<h2>Login</h2>
<p>Your PASSWORD is: <?php echo $_SESSION["pw"]; ?></p>
<p>Your USER is: <?php echo $_SESSION["user"]; ?> </p>
    
<p><a href="logout.php">logout</a></p>
<?php require_once "footer.php"; ?>
</body>
</html>