<?php
	include 'connect.php';
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
			echo 'Welcome '.$_SESSION['username'];
			echo '  <b>login successfully!</b>';
			header('Refresh: 1;url=profile.php');
		} 
		else 
		{
			echo 'Username or Password is invalid!<br/>';
			echo 'redirecting to login page!';
			header('Refresh: 1;url=index.php');
		}
	}

		mysqli_close($con);
	?>