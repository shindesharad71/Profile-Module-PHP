
<?php
$title = 'forgot password?';
 include 'header.php';
?>
<div class="container">
<br><br>
<div class="col-md-4">
<h3 class="text-left">forgot password form</h3><br>
</div>
<div class="col-md-8">
<form class = "form-horizontal" action="forgot.php" method="post" role = "form">

                   <div class = "form-group">
                      <div class = "col-sm-10 col-md-7">
                         <input type = "text" class = "form-control" required maxlength="25" name = "username" placeholder = "Username"><br>
                      </div>
                   </div>
                    <label>Security Question - What is your nick name?</label>
                   <div class = "form-group">
                        
                        <div class = "col-sm-10 col-md-7">
                            <input type = "text" class = "form-control" name = "nick" placeholder = "Your Answer" maxlength="25" required>
                        </div>
                     </div>

                   <div class = "form-group">
                      <div class = "col-sm-offset-2 col-sm-10">
                         <button type = "submit" name="forgot" class = "btn btn-info">Get Password!</button>
                      </div>
                   </div>
                    
                </form> 
            </div>
        </div>

<?php
 include 'footer.php';
 ?>