<?php
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body style="color: red"background="hakeem12.jpg">

	<a href="logout.php">logout</a>
	<h1>Welcome to the index page</h1>

	<br>
	Hello welcome to my website, <?php echo $user_data['user_name']; ?>
</body>
</html>
