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
                                            <a href="gameinfo.php">Game Info</a>
                                         </li>
                                         <li>
                                            <a href="aboutus.php">About Us</a>
                                         </li>


                                         <?php if (($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
 
                                          echo '<li>
                                            <a href="dashboard.php">Dashboard</a>
                                         </li>';
                                     }

                                         ?>

                                        </ul>
                                        <ul class="nav navbar-nav navbar-right ">
                                          <?php if (($_SESSION['username']) != $user) : ?>
                                         <li class="active">


                                                 <a href="login.php">Login &nbsp;</a>
                                         </li>
                                         <li class="active">


                                                 <a href="registration.php">  Register</a>
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
        <header>
            <img class="img-responsive img-center" src="fantasy_city.jpg">
        </header>