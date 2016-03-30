

<?php
session_start();
if(isset($_POST['btn-login'])){
$username = strtolower(strip_tags($_POST[ 'username' ]));
$password = strtolower(strip_tags($_POST[ 'password' ]));
$_SESSION['Error'] = "You left one or more of the required fields.";
if ($username&&$password)
{
$connect = mysql_connect ( "localhost", "root" , "") or die ("Couldn't connect!");
mysql_select_db("FANTASY") or die ("Couldn't find db");

$query = mysql_query("SELECT * FROM USER WHERE USER_PASSWORD ='$password' AND USER_SCREENNAME='$username'", $connect);

if (mysql_num_rows($query) == 1)
{
$_SESSION['username']= $username; // Initializing Session
$_SESSION['loggedin'] = true;
header("location: home.php"); // Redirecting To Other Page
}
else {$msg="Incorrect username and password!";

echo $msg;}
}
mysql_close($connect); // Closing Connection
}
?>

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
   <div id="title"
        
    
				<center>
				<div id="login-form" >
						<form method="post">
									<table align="center" width="30%" border="0">
											<tr><td><p> Username:<p></td>
											<td><input type="text" name="username" placeholder="Username" required /></td>
											</tr>
											<tr><td><p> Password:<p></td>
											<td><input type="password" name="password" placeholder="Your Password" required /></td>
											</tr>
											<tr><td></td>
											<td><button type="submit" name="btn-login">Sign In</button></td>
											</tr>
											<tr><td></td>
											<td><a href="registration.php">Sign Up Here</a></td>
											</tr>
									</table>
						      </form>
				 </div>



				
	</div>

<section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">


                        <body>

                            <div id="login-form" class="login-page">
                                <div class="form">
                                    <h2 class="lead section-lead text-danger">Login:</h2><br>
                                    <form method="post" class="login-form">
                                        <input type="text" name "username" placeholder="username"/>
                                        <input type="password" name "password" placeholder="password"/>
                                        <button type="submit" name="btn-login">login</button>
                                        <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
                                    </form>
                                </div>
                            </div>
                            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                            <script src="js/index.js"></script>




                        </body>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>