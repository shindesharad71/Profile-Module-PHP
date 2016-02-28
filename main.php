<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['username']))
{
	echo '<b>you are not logged in! login first</b>';
	header('Refresh: 2;url=index.php');
	die();
	
}
$userpic = '../img/user.jpg';
$username = $_SESSION['username'];
$name = mysqli_query($con,"SELECT name from students WHERE username='$username'");
$email = mysqli_query($con,"SELECT email from students WHERE username='$username'");
$password = mysqli_query($con,"SELECT password from students WHERE username='$username'");

?>

<html>
<body>
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Profile of <?php echo  $username; ?></title>
</head>
<center>
	<div class="wrapper">
		<h1>Profile Details</h1>
		<br>
		<h3><tr><img src="<?php echo $userpic; ?>"><small><a class="forgotlink" href="profile_pic.php">change profile pic</a></small></tr></h3>
		<br>
		<h3>Name: <?php echo $name->fetch_object()->name; ?></h3>
		<h3>Email: <?php echo $email->fetch_object()->email; ?></h3>
		<h3>Username: <?php echo  $username; ?></h3>
		<h3>Password: <?php echo  $password->fetch_object()->password; ?></h3>
		<a class="forgotlink" href="logout.php"><br/>logout</a>
	</div>
</center>
</body>
</html>
