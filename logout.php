<?php

session_start();
unset($_SESSION['username']);
session_destroy();
if(isset($_SESSION['username']))
echo 'error in logout';
else
{
	echo '<b>logout successfully</b> redirecting you to login page';
	header('Refresh: 1;url=index.php');
}

?>