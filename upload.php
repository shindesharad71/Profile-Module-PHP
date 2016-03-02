<?php
include 'connect.php';
session_start();
$title ='Change Profile Pic';
include 'header.php';

	if(!isset($_SESSION['username']))
	{
		
   		die('<center><h3 class="alert alert-danger">no session is running, login first!</h3>
   			<br><a class="btn btn-danger" href="index.php">back to login</a>');
	}

	if(isset($_SESSION['username']))     // checking session
	{

		$username = $_SESSION['username'];

		if(isset($_FILES['image']))
		{
		      $errors= array();
		      $file_name = $_FILES['image']['name'];
		      $file_size =$_FILES['image']['size'];
		      $file_tmp =$_FILES['image']['tmp_name'];
		      $file_type=$_FILES['image']['type'];
		      
		      if($file_size > 2097152){
		         $errors[]='File size must be excately 2 MB';
		      }
		      
		      if(empty($errors)==true){
		         move_uploaded_file($file_tmp,"img/".$file_name);
		         $addr = 'img/'.$file_name;
          		$q = "UPDATE students SET pic='$addr' WHERE username='$username'";
   				mysqli_query($con,$q);
         		echo '<script>setTimeout(function () { window.location.href = "profile.php";}, 2000);</script>';
         		

		      }else{
		         print_r($errors);
		      }
   }

}

?>
  
<div class="container">
	<br><br>
	<div align="right"><a href="logout.php">logout</a></div>
	<center>
	<tr><h3>Hello! <?php echo $username;?> , <small>change profile pic by uploading new JPG or PNG image</small></h3>
	<br><br>
	<fieldset>
	<legend>Upload Profile Picture</legend>
      <form action="" role="form" method="POST" enctype="multipart/form-data">
         <input type="file" name="image"><br><br>
         <input type="submit" class="btn btn-info" value="upload">
         <a href="profile.php" class="btn btn-danger">Cancel & go back</a>
      </form>
      </fieldset>
    </center>
</div>
<br><br>
<?php
	include 'footer.php';
?>
