<?php
include 'connect.php';
if(isset($_POST['forgot']))
{
	$username = $_POST['username'];
	$username = stripcslashes($username);

	$email = $_POST['email'];
	$email = stripcslashes($email);

	mysqli_query($con,"SELECT * FROM students WHERE email='$email' AND username='$username'");
	$row = mysqli_affected_rows($con);
	echo $row;
	if($row==1)
	{
		$passquery=mysqli_query($con,"SELECT password FROM students WHERE email='$email' AND username='$username'");
		$password = $passquery->fetch_object()->password;
	}
	else
	{
		echo 'you entered wrong username and email combination, try again';
		header('Refresh: 2;url = forgot.html');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Here is your password!</title>
</head>
<body>
	<div class="wrapper">
        <h3>Your username:  <?php echo $username; ?></h3>
        <br>
        <br>
        <h3>Your password:  <?php echo $password; ?></h3>
        <br>
        <br>
        <center>
        	<a class="forgotlink" href="index.php">back to login page</a>
        </center>
     	
    </div>
</form>
</body>
</html>