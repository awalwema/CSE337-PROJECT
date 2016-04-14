
<?php error_reporting(0); ?>
<?php $user = $_COOKIE['username']; ?>
<?php
session_start();
if (isset($_POST['sign-in'])) {

    $connect = mysql_connect("localhost", "root", "") or die ("Couldn't connect!");
    mysql_select_db("FANTASY") or die ("Couldn't find db");

    $username = strtolower(strip_tags($_POST[ 'username' ]));
    $password = strtolower(strip_tags($_POST[ 'password' ]));
    echo($username);
    $_SESSION['Error'] = "You left one or more of the required fields.";
    if ($username&&$password) {
            

        $query = mysql_query("SELECT * FROM USER WHERE USER_PASSWORD ='$password' AND USER_SCREENNAME='$username'", $connect);

        if (mysql_num_rows($query) == 1) {
            $_SESSION['username']= $username; // Initializing Session
            $_SESSION['loggedin'] = true;
            header("location: home.php"); // Redirecting To Other Page
            setcookie('username', strtolower(strip_tags($_POST['username'])), time()+60*60*60*24*365);
        } else {
            $msg="Incorrect username and password!";

            echo $msg;
        }
    }
    mysql_close($connect); // Closing Connection
}
?>

<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>
	<section>
            <div class="container-fluid">
                <div class="row">
					<div class="col-lg-4"></div>
                    <div class="panel panel-success col-lg-4">                    
                        <div class="panel-heading"><h2>Log In</h2></div>
						<br>
						<form role="form" method="post">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
							</div>
							<button type="submit" class="btn btn-default" name="sign-in">Login</button>
							<br><br>
							<p class="help-block">Not registered? <a href="registration.php">Create an account.</a></p>
						</form>
					</div>
					<div class="col-lg-4"></div>
				</div>
			</div>
		</section>
	</body>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</html>