<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign in & Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="container-fluid">
	<div class="text-center">
		<h1>Sign In and Sign up Form</h1>
	</div>
</div>
<div class="container">
<!-- 1st form ------------------------------------>
	<div class="col-md-6">
		<form class = "form-horizontal" role = "form" >
   
		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "text" class = "form-control" id = "name" placeholder = "Enter Full Name" maxlength="25">
		      </div>
		   </div>
		   
		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "email" class = "form-control" id = "email" placeholder = "Email">
		      </div>
		   </div>

		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "text" class = "form-control" id = "username" placeholder = "Username">
		      </div>
		   </div>

		   <div class = "form-group">
		      <div class = "col-sm-10 col-md-7">
		         <input type = "password" class = "form-control" id = "password" placeholder = "Password">
		      </div>
		   </div>

		   <div class = "form-group">
		   		<label>Security Question - What is your nick name?</label>
		      <div class = "col-sm-10 col-md-7">
		         <input type = "text" class = "form-control" id = "nick" placeholder = "Your Answer">
		      </div>
		   </div>
		   
		   <div class = "form-group">
		      <div class = "col-sm-offset-2 col-sm-10">
		         <button type = "submit" class = "btn btn-default">Sign up</button>
		      </div>
		   </div>
			
		</form> 
	</div> <!-- END 1st form--->

<!-- 2nd form ------------------------------------>
	<div class="col-md-6">
				<form class = "form-horizontal" role = "form">

				   <div class = "form-group">
				      <div class = "col-sm-10 col-md-7">
				         <input type = "text" class = "form-control" id = "username" placeholder = "Username">
				      </div>
				   </div>

				   <div class = "form-group">
				      <div class = "col-sm-10 col-md-7">
				         <input type = "password" class = "form-control" id = "password" placeholder = "Password">
				      </div>
				   </div>

				   
				   
				   <div class = "form-group">
				      <div class = "col-sm-offset-2 col-sm-10">
				         <button type = "submit" class = "btn btn-default">Sign in</button>
				      </div>
				   </div>
					
				</form> 
		</div> 
	</div> <!-- End of 2nd form-------->

</div> <!----form container end-------->

<!---------- SCRIPTS ---------------------->
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</body>
</html>