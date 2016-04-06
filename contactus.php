<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>

<html lang="en">

       <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Class Project Site</title>

            <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href = "css/bootstrap.min.css">

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
                                            <a href="registration.php">Register</a>
                                         </li>
                                         <li>
                                            <a href="contactus.php">Contact Us</a>
                                         </li>
                                         <li>
                                            <a href="aboutus.php">About Us</a>
                                         </li>

                                        </ul>
                                        <ul class="nav navbar-nav navbar-right ">
                                          <?php if (($_SESSION['username']) != $user) : ?>
                                         <li class="active">


                                                 <a href="login.php">Login</a>
                                         </li>
                                         <?php else : ?>
                                         <li class="nav navbar-text">
                                                 <p>Logged in as: <?php echo $_SESSION['username'] ?>   </p>

                                         </li>
                                         <li>
                                         <a href="logout.php"> Logout </a>
                                         </li>
                                          <?php endif; ?>

                                        </ul>

                                </div>
                    <!-- /.navbar-collapse -->
            </div>
                <!-- /.container -->
        </nav>

            <!-- Full Width Image Header with Logo -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->
        <header class="image-bg-fluid-height">
            <img class="img-responsive img-center" src="http://placehold.it/200x200&text=Logo" alt="">
        </header>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="http://oasissanjose.com/uploads/3/6/2/4/3624456/8429182_orig.png" class="pull-right" width="450" height="250">

                        <h1 class="section-heading text-danger">Contact Us</h1><br>
                        <div class="panel panel-primary">
                        <h2 class="lead section-lead panel-heading">Questions, Concerns? Contact us 24/7 at:</h2>
                        <h3 class="text-info panel-body">(800)-888-1234</h3>
                        </div>
                        <br><br>
                        <img src="http://content.presentermedia.com/files/animsp/00005000/5562/question_mark_serious_thinker_md_wm.gif" class="pull-right" width="400" height="250">
                    </div>
                </div>
            </div>
        </section>

            <!-- Fixed Height Image Aside -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->


            <!-- Content Section -->
            <!-- Content Section -->

            <!-- Footer -->
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
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>

</html>