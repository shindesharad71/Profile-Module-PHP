<?php
	include 'connect.php';
	$title = 'redirecting....';
	include 'header.php';
	session_start();
if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);

		mysqli_query($con,"SELECT * from students where username ='$username' AND password ='$password'");

		$rows = mysqli_affected_rows($con);

		if ($rows == 1) 
		{
			
			$_SESSION['username'] = $username;
			echo '<br><br><div class="container">
			<h3 class="text-center">Welcome <b>'.$_SESSION['username'];
			echo '</b>  login successfully!</h3></div>';
			echo '<script>setTimeout(function () { window.location.href = "profile.php";}, 2000);</script>';
		} 
		else 
		{
			echo '<br><br><h3 class="text-center alert alert-danger">Username or Password is invalid!<br/>';
			echo 'redirecting to login page!</h3>';
			echo '<script>setTimeout(function () { window.location.href = "index.php";}, 2000);</script>';
		}
	}

		mysqli_close($con);
	?>