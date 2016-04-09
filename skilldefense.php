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
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <?php if (($_SESSION['username']) != $user) : ?>

                                <li><a href="login.php"> Log In</a></li>
                                <li><a href="registration.php"> Register</a></li>

                            <?php else : ?>
                                <li class="nav navbar-text">
                                    <p>Logged in as: <?php echo $_SESSION['username'] ?>   </p>

                                </li>
                                <li>
                                    <a href="logout.php"> Logout </a>
                                </li>
                            <?php endif; ?>

                        </li>

                    </ul>
                </div>
                    <!-- /.navbar-collapse -->
            </div>
                <!-- /.container -->
        </nav>

            <!-- Full Width Image Header with Logo -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->
        <header class="image-bg-fluid-height">
            <img class="img-rounded img-responsive img-center" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/5459b646539419.5607d7390e203.png" width="200" height="200">
        </header>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-danger">Edit Your Character</h1><br>

                        <div class="panel panel-warning">

                        <h3 class="text-warning panel-heading">Skills & Defenses</a></h3>
                        <br><br>
                        <form class="form-horizontal">
                            <h1>Skills</h1>
                            <br>
                            <div class="text">
                                <label for="aracana"> Arcana: &nbsp</label>
                                <input type="text" name = "arcana" placeholder="Enter Points"/>
                                <p>Arcana is your ability to interact with and understand Magic. It’s Analyzing and
                                Manipulating magical effects, similar to how Dexterity can fiddle with traps or machines.</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for="dexterity"> Dexterity:   &nbsp</label>
                                <input type="text" name = "dexterity" placeholder="Enter Points"/>
                                <p>Dexterity is your Fine Motor Skills - lock-picking, machine-jiggering and
                                trap-disabling/resetting.  Dexterity also governs aiming in non-combat situations,
                                like tossing a rock and hitting a lever across the room.</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for="heal"> Heal:   &nbsp</label>
                                <input type="text" name = "heal" placeholder = "Enter Points"/>
                                <p>Heal is your ability to remove Afflictions, analyze wounds, diseases etc</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "insight"> Insight:    &nbsp </label>
                                <input type= "text" name = "insight" placeholder = "Enter Points"/>
                                <p>Insight is like your social perception. It’s reading peoples' expressions, tones of
                                voice and similar to determine what they're feeling and whether they're lying.</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "might"> Might:     &nbsp</label>
                                <input type= "text" name = "might" placeholder = "Enter Points"/>
                                <p>Might is your physical strength - swimming against the current, leaping wide chasms,
                                breaking down doors</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "perception"> Perception:    &nbsp </label>
                                <input type= "text" name = "perception" placeholder = "Enter Points"/>
                                <p>Perception is your ability to notice things with your physical senses (all of them –
                                sight, hearing, touch, smell, etc.)</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "Stealth"> Stealth:   &nbsp  </label>
                                <input type= "text" name = "stealth" placeholder = "Enter Points"/>
                                <p>Stealth is your ability to move about discretely - to successfully stay quiet and avoid being noticed. </p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "generalknowledge"> General Knowledge:   &nbsp   </label>
                                <input type= "text" name = "generalknowledge" placeholder = "Enter Points"/>
                                <p>Your knowledge of things that don’t fall into the other skills. Who's the king of
                                this land? What’s the historical significance of the strange coin you just found?
                                How do you cook a decent meal? Which mushrooms are safe to eat?</p>
                            </div>

                            <h1> Defenses </h1>
                            <br>
                            <div class="text">
                                <label for= "endurance"> Endurance:   &nbsp   </label>
                                <input type= "text" name = "endurance" placeholder = "Enter Points"/>
                                <p>Enduring serious damage, wounds and diseases through sheer physical toughness</p>
                            </div>
                            <div class="text">
                                <label for= "reflexes"> Reflexes:   &nbsp   </label>
                                <input type= "text" name = "reflexes" placeholder = "Enter Points"/>
                                <p>Quickly react to danger, dodging traps and responding to sucker-punches.</p>
                            </div>
                             <div class="text">
                                 <label for= "will"> Will:   &nbsp   </label>
                                 <input type= "text" name = "will" placeholder = "Enter Points"/>
                                 <p>Mentally resisting mind-altering effects, or similar mental assaults (from resisting
                                  body possession and charm spells to holding onto one's sanity in the face of
                                  abominations).</p>
                             </div>




                        </form>
                        <br>



                        </div>
                        <button type="button" class="btn btn-success pull-right"><a href="charactersheet.php">Save</a></button>
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
