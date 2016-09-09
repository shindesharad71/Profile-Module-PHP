<?php
$title = "All Registered users info";
include 'header.php';
include 'connect.php';
session_start();

if(!isset($_SESSION['username']))
{
	die('<center><h3 class="alert alert-danger">no session is running, login first!</h3>
   			<br><a class="btn btn-danger" href="index.php">back to login</a>');
	
}

echo '<div class="container">
			<h3 class="text-center">All Registered Users info</h3>
		</div>
		<br>
		<div class="container">
	<div class="table-responsive">
	<table class="table table-striped">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Nick Name</th>
	</tr>';

$sql = "SELECT * FROM students";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>". $row["username"]. "</td><td>" . $row["password"]. "</td><td>" . $row["nick"] . "</td></tr><br><br>";
    }
} else {
    echo "0 results";
}

echo '</table>
		</div>
			</div>';

include 'footer.php';
?>
