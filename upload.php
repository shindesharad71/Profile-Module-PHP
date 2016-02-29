<?php
include 'connect.php';
session_start();


	if(isset($_SESSION['username']))     // checking session
	{

		echo $_SESSION['username'];
		$username = $_SESSION['username'];

		if(isset($_FILES['image']))
		{
		      $errors= array();
		      $file_name = $_FILES['image']['name'];
		      $file_size =$_FILES['image']['size'];
		      $file_tmp =$_FILES['image']['tmp_name'];
		      $file_type=$_FILES['image']['type'];

		      /* $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		      
		      $expensions= array("jpeg","jpg","png");
		      
		      if(in_array($file_ext,$expensions)=== false){
		         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		      }

		      */
		      
		      if($file_size > 2097152){
		         $errors[]='File size must be excately 2 MB';
		      }
		      
		      if(empty($errors)==true){
		         move_uploaded_file($file_tmp,"img/".$file_name);
		         echo "Success";

		         $addr = 'img/'.$file_name;
          		$q = "UPDATE students SET pic='$addr' WHERE username='$username'";
   				mysqli_query($con,$q);
         		$rows = mysqli_affected_rows($con);
         		echo $rows;

		      }else{
		         print_r($errors);
		      }
   }

}

?>

<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>