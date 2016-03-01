<?php
	$title = 'Sign in & Sign up';
	include 'header.php';

?>

<div class="container-fluname">
	<div class="text-center">
		<h1>Sign In and Sign up Form</h1>
	</div>
</div>
<div class="container">
<!-- 1st form ------------------------------------>
	<div class="col-md-6">
		<form class = "form-horizontal" action="signup.php" method="post" role = "form" >
   
		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "text" class = "form-control" name = "name" placeholder = "Enter Full Name" maxlength="25" required>
		      </div>
		   </div>
		   
		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "email" class = "form-control" name = "email" placeholder = "Email" required>
		      </div>
		   </div>

		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "text" class = "form-control" name = "username" maxlength="25" placeholder = "Username" required>
		      </div>
		   </div>

		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "password" class = "form-control" name = "password" maxlength="25" placeholder = "Password" required>
		      </div>
		   </div>

		   <div class = "form-group">
		   		<label>Security Question - What is your nick name?</label>
		      <div class = "col-sm-10 col-md-7">
		         <input type = "text" class = "form-control" name = "nick" placeholder = "Your Answer" maxlength="25" required>
		      </div>
		   </div>
		   
		   <div class = "form-group">
		      <div class = "col-sm-offset-2 col-sm-10">
		         <button type = "submit" name="signup" class = "btn btn-success">Sign up</button>
		      </div>
		   </div>
			
		</form>
	</div> <!-- END 1st form--->

<!-- 2nd form ------------------------------------>
	<div class="col-md-6">
				<form class = "form-horizontal" action="login.php" method="post" role = "form">

				   <div class = "form-group">
				      <div class = "col-sm-10 col-md-7">
				         <input type = "text" class = "form-control" name = "username" required maxlength="25" placeholder = "Username">
				      </div>
				   </div>

				   <div class = "form-group">
				      <div class = "col-sm-10 col-md-7">
				         <input type = "password" class = "form-control" required maxlength="25" name = "password" placeholder = "Password">
				      </div>
				   </div>

				   
				   
				   <div class = "form-group">
				      <div class = "col-sm-offset-2 col-sm-10">
				         <button type = "submit" name="login" class = "btn btn-info">Sign in</button>
				      </div>
				   </div>
					
				</form> 
		</div> 
	</div> <!-- End of 2nd form-------->

</div> <!----form container end-------->

<?php
	include 'footer.php';
?>