<?php session_start(); ?>
<?php error_reporting(0); ?>
<?php

require 'dbconnect.php';
if(isset($_POST['btn-signup'])){
    $username = strtolower(strip_tags($_POST['username']));
    $email = strtolower(strip_tags($_POST['email']));
    $firstname = strip_tags($_POST['firstname']);
    $lastname =strip_tags($_POST['lastname']);
    $password =strip_tags($_POST['password']);
    $confirmpassword=$_POST['confirmpassword'];
    $namecheck = mysql_query("SELECT USER_SCREENNAME FROM USER WHERE USER_SCREENNAME='$username'");
    $count = mysql_num_rows($namecheck);
    if($count!=0)
{
die ("Username already taken!");
}
// all feilds filled
if ($username&&$firstname&&$lastname&&$password&&$confirmpassword)
{
	// making sure that password and confirm password are the same
	if ($password == $confirmpassword)
	{
	   if(strlen($username) > 25 || strlen($firstname) >25 || strlen($lastname) > 25)
	   {
		echo "Length of username, first name, or last name is too long";
	    }
                      else
	    {
		if (strlen($password) > 25 || strlen($password) < 6)
		{
		echo "Password should be between 6 and 25 characters";
		}
		else
		{
		// registering the user
		$queryreg = mysql_query("INSERT INTO USER (USER_ID, USER_FNAME, USER_LNAME, USER_PASSWORD, USER_EMAIL, USER_SCREENNAME ) VALUES (' ', '$firstname', '$lastname','$password', '$email', '$username')");
		die("You have been registered! <a href='login.php'> Return to sign in page</a> ");
		}
	          }
	  }
	else
	      echo "Your passwords do not match!";
}
 else 
	echo"Please fill in <b>all </b> fields!";
}
?>
<?php $user = $_COOKIE['username']; ?>
<!DOCTYPE html>
<html>
     <?php include 'header.php'; ?>
	<section>
        <div class="container-fluid">
            <div class="row">
				<div class="col-lg-3"></div>
                <div class="panel panel-success col-lg-6">
                    <div class="panel-heading"><h2>Register</h2></div>
					<br>
                    <form role="form-horizontal" action = "registration.php" method='POST'>
					<fieldset>
						<p class="help-block">Please fill out all fields.</p><br>
						<div class="row form-group">
							<label for="firstname" class="col-sm-3 control-label text-right">First Name:</label>
							<div class="col-sm-9">
                            <input type="text" class="form-control" name = "firstname" id="firstname"/>
							</div>
						</div>
						<div class="row form-group">
							<label for="lastname" class="col-sm-3 control-label text-right">Last Name:</label>
							<div class="col-sm-9">
                            <input type="text" class="form-control" name = "lastname" id="lastname"/>
							</div>
						</div>
						<div class="row form-group">
							<label for="username" class="col-sm-3 control-label text-right">User Name:</label>
							<div class="col-sm-9">
                            <input type="text" class="form-control" name = "username" id="username"/>
							</div>
						</div>
						<div class="row form-group">
							<label for="password" class="col-sm-3 control-label text-right">Password:</label>
							<div class="col-sm-9">
                            <input type="password" class="form-control" name = "password" id="password"/>
							</div>
						</div>
						<div class="row form-group">
							<label for="confirmpw" class="col-sm-3 control-label text-right">Confirm Password:</label>
							<div class="col-sm-9">
                            <input type="password" class="form-control" name = "confirmpassword" id="confirmpw"/>
							</div>
						</div>
						<div class="row form-group">
							<label for="email" class="col-sm-3 control-label text-right">Email:</label>
							<div class="col-sm-9">
                            <input type="text" class="form-control" name = "email" id="email"/>
							</div>
						</div>
                        <button type="submit" class="btn btn-default" name="btn-signup">Sign Up</button>
						<br><br>
                        <p class="help-block">Already registered? <a href="login.php">Sign in here.</a></p>
					</fieldset>
                    </form>
                </div>
				<div class="col-lg-3"></div>
            </div>
        </div>
    </section>
</body>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
            <!-- jQuery -->
        <script src="public/javascripts/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
        <script src="javascripts/bootsatrap.min.js"></script>

    </body>
</html>