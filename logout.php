<?php
$title ='redirecting';
include 'header.php';
session_start();
unset($_SESSION['username']);
session_destroy();
if(isset($_SESSION['username']))
echo 'error in logout';
else
{
	echo '<br><br><div class="container"><h3 class="text-center">logout successfully! redirecting you to login page</h3></div>';
	echo '<script>setTimeout(function () { window.location.href = "index.php";}, 2000);</script>';
}

?>