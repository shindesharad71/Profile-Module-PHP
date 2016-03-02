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
	header('Refresh: 1;url=index.php');
}

?>