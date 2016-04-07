
<?php error_reporting(0); ?>
<?php $user = $_COOKIE['username']; ?>
<?php
session_start();
if (isset($_POST['sign-in'])) {

    $connect = mysql_connect("localhost", "root", "") or die ("Couldn't connect!");
    mysql_select_db("FANTASY") or die ("Couldn't find db");

    $username = strtolower(strip_tags($_POST[ 'username' ]));
    $password = strtolower(strip_tags($_POST[ 'password' ]));
    $_SESSION['Error'] = "You left one or more of the required fields.";
    if ($username&&$password) {
            

        $query = mysql_query("SELECT * FROM USER WHERE USER_PASSWORD ='$password' AND USER_SCREENNAME='$username'", $connect);

        if (mysql_num_rows($query) == 1) {
            $_SESSION['username']= $username; // Initializing Session
            $_SESSION['loggedin'] = true;
            header("location: home.php"); // Redirecting To Other Page
            setcookie('username', $_POST['username'], time()+60*60*60*24*365);
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
        <link rel="stylesheet" type="text/css" href="css/signinstyle.css">
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
                        <li class="active">
                            <?php if (($_SESSION['username']) != $user) : ?>

                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="aboutus.php">About Us</a>
                        </li>

                        <?php else : ?>

                                <li>
                                    <a href="home.php">Home</a>
                                </li>
                                <li>
                                    <a href="contactus.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="aboutus.php">About Us</a>
                                </li>
                                <li>
                                    <a href="charactersheet.php">Character Sheet</a>
                                </li>

                        <?php endif; ?>

                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-text">
                        <li class="active">
                            <?php if (($_SESSION['username']) != $user) : ?>

                                <li><a href="login.php"> Log In</a></li>
                                <li><a href="registration.php"> Register</a></li>

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
            <img class="img-rounded img-responsive img-center" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/5459b646539419.5607d7390e203.png" width="200" height="200">
        </header>

<section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">


                        <body>

                            <div id="login-form" class="login-page">
                                <div class="form">
                                    <h2 class="lead section-lead text-danger">Login:</h2><br>
                                    <form method="post" >
                                        <input type="text" name ="username" placeholder="username"/>
                                        <input type="password" name ="password" placeholder="password"/>
                                        <button type="submit" name="sign-in">login</button>
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