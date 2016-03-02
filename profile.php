<?php
session_start();
include 'connect.php';
$title = 'Profile';
include 'header.php';

if(!isset($_SESSION['username']))
{
	echo '<b>you are not logged in! login first</b>';
	echo '<script>setTimeout(function () { window.location.href = "index.php";}, 2000);</script>';
	die();
	
}

$username = $_SESSION['username'];
$name = mysqli_query($con,"SELECT name from students WHERE username='$username'");
$email = mysqli_query($con,"SELECT email from students WHERE username='$username'");
$pic = mysqli_query($con,"SELECT pic from students WHERE username='$username'");
$pic = $pic->fetch_object()->pic;

?>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1 class="text-left">Hello! <?php echo  $username; ?></h1>
			</div>
			<div class="col-md-8">
				<h4 class="text-right"><a href="all.php">Show All Profiles</a></h4>
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
			
			<div class="col-md-5" align="center">
				<img src="<?php echo $pic; ?>" height="150" width="150" class="img-responsive img-circle"><br>
				<a class="text-left" href="upload.php">change profile pic</a>
			</div>
			<div class="col-md-7 text-left">
				<h3><?php echo $name->fetch_object()->name; ?></h3>
				<h3><?php echo $email->fetch_object()->email; ?></h3><br>
			</div>

		</div>
	</div>
<?php
	include 'footer.php';
?>