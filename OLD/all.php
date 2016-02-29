<?php
echo '<html>
<body>
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Profile of <?php echo  $username; ?></title>
</head>
<center>
	<div class="wrapper">
		<h1>All Table Details</h1>
		<br>';

include 'connect.php';
session_start();

if(!isset($_SESSION['username']))
{
	echo '<b>you are not logged in! login first</b>';
	//header('Refresh: 2;url=index.php');
	die();
	
}

$sql = "SELECT name, email, password FROM students";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. "<br>Email: " . $row["email"]. "<br>Password: " . $row["password"]. "<br><br><br><br>";
    }
} else {
    echo "0 results";
}


?>
