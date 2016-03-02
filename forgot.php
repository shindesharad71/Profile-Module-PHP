<?php
include 'connect.php';
$title = "Here is password!";
include 'header.php';
if(isset($_POST['forgot']))
{
	$username = $_POST['username'];
	$username = stripcslashes($username);

	$nick = $_POST['nick'];
	$nick = stripcslashes($nick);

	mysqli_query($con,"SELECT * FROM students WHERE username='$username' AND nick='$nick'");
	$row = mysqli_affected_rows($con);
	if($row==1)
	{
		$passquery=mysqli_query($con,"SELECT password FROM students WHERE username='$username'");
		$password = $passquery->fetch_object()->password;
	}
	else
	{
		echo '<h3 class="alert alert-danger">you entered wrong username and Answer combination, try again</h3>';
		echo '<script>setTimeout(function () { window.location.href = "frgt.php";}, 2000);</script>';
		die();
	}
}

?>
	<br>
	<h3 class="text-center">Alright! here is your password</h3>
	<div class="container">
		<div class="alert alert-success">
        <h3>Your username:  <?php echo $username; ?></h3>
        <br>
        <br>
        <h3>Your password:  <?php echo $password; ?></h3>
        <br>
        <br>
        </div>
        <center>
        	<a class="btn btn-info" href="index.php">back to login page</a>
        </center>
     	
    </div>

<?php
	include 'footer.php';
?>