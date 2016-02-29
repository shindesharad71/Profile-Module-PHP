<?php

	include 'connect.php';
	session_start();

	if(isset($SESSION['username']))     // checking session
	{

      $username = $SESSION['username'];
      echo $username;

      if(isset($_FILES['image']))         //checking image is set to upload
      {   
         move_uploaded_file($_FILES['image'] ['tmp_name'],"../img/{$_FILES['image'] ['name']}");

         if (is_uploaded_file($_FILES['image']['name'])) 
         {
            echo "File ". $_FILES['image']['name'] ." uploaded successfully.\n";
            echo "Displaying contents\n";
            readfile($_FILES['image']['name']);
         } 
         else 
         {
            echo "Possible file upload attack: ";
            echo "filename '". $_FILES['image']['name'] . "'.";
         }

         $addr = 'img/'.$_FILES['image']['name'];
          $q = "UPDATE students SET pic='$addr' WHERE username='$username'";
   		mysqli_query($con,$q);
         $rows = mysqli_affected_rows($con);
         echo $rows;    
      }
      else
         echo 'upload failed';
   }
   else
      echo 'session error!';

   ?>