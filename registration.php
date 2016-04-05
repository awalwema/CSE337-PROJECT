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
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Class Project Site</title>

            <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href = "css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href = "css/style.css">

        <link rel="stylesheet" type="text/css" href = "css/full-width-pics.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

<body>

  <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a href="registration.php">Register</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="aboutus.php">About Us</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-text">
                        <li class="active">
                            <?php if (($_SESSION['username']) != $user) : ?>

                                <a href="login.php">Login</a>

                            <?php else : ?>
                                <p>Logged in as: <?php echo $_SESSION['username'] ?>   </p>
                                <a href="logout.php"> Logout </a>
                            <?php endif; ?>

                        </li>

                    </ul>
                </div>
                    <!-- /.navbar-collapse -->
            </div>
                <!-- /.container -->
        </nav>

          <header class="image-bg-fluid-height">

        </header>



<section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <body>

                            <div class="register-page">
                                <div class="form">
                                    <h2 class="lead section-lead text-danger">Register:</h2>
                                    <form class="register-form" action = "registration.php" method='POST'>
                                        <input type="text" name = "firstname" placeholder="first name"/>
                                        <input type="text" name = "lastname" placeholder="last name"/>
                                        <input type="text" name = "username" placeholder="username"/>
                                        <input type="password" name = "password" placeholder="password"/>
                                        <input type="password" name = "confirmpassword" placeholder="confirmpassword"/>
                                        <input type="text" name = "email" placeholder="email address"/>


                                        <button type="submit" name="btn-signup" >Sign Up</button>
                                        <p class="message">Already registered? <a href="login.php">Sign In</a></p>
                                    </form>

                                </div>
                            </div>
                            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                            <script src="js/index.js"></script>

                    </div>
                </div>
            </div>
        </section>
</body>

 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2016</p>
                    </div>
                </div>
                    <!-- /.row -->
            </div>
                <!-- /.container -->
        </footer>

            <!-- jQuery -->
        <script src="public/javascripts/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
        <script src="javascripts/bootsatrap.min.js"></script>

    </body>
</html>