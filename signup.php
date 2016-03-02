<?php

	include 'connect.php';
	session_start();
	$title = 'redirecting.....';
	include 'header.php';
	
	if(isset($_POST['signup']))
	{
		$name = $_POST['name'];
		$name = stripcslashes($name);

		$email = $_POST['email'];
		$email = stripcslashes($email);

		$username = $_POST['username'];
		$username = stripcslashes($username);

		$password = $_POST['password'];
		$password = stripcslashes($password);

		$nick = $_POST['nick'];
		$nick = stripcslashes($nick);


		$q = "INSERT into students (name, email, username, password, pic, nick) VALUES ('$name','$email','$username','$password','img/user.jpg', '$nick')";

		mysqli_query($con,$q);
		echo '<br><br><h3 class="text-center">redirecting to <a href="profile.php">login</a> page!</h3>';
		echo '<script>setTimeout(function () { window.location.href = "index.php";}, 2000);</script>';
	}

	mysqli_close($con);
?>