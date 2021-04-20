<?php
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];

		if(!empty($user_name) && !empty($user_password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,user_password) values ('$user_id','$user_name','$user_password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<body background="hakeem12.jpg";>

	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: white;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
	<div id="wish"style="font-size: 50px;font-family: sans-serif; margin : 10px; color: white">GARRAGE</div>

	<div id="box">

		<form method="post">
			<div style="font-size: 15px;margin: 10px;color: white">signup</div>

			<input id="text" type="text" name="user_name">
			<label style= "color: black">username</label>
			<br><br>

			<input id="text" type="password" name="user_password">
			<label style= "color: black">password</label>
			<br><br>

			<input id="button" type="submit" value="signup"><br><br>

			<a href="login.php">click to login</a><br><br>
		</form>
	</div>
</body>
</html>
