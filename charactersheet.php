<!DOCTYPE html>
<?php session_start();?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>
<?php require 'dbconnect.php'; 
$username = $_SESSION['username'];
                                
$query_ID = mysql_query("SELECT USER_ID FROM USER WHERE USER_SCREENNAME = '$username'");
$row = mysql_fetch_array($query_ID);
$usr_id= $row['USER_ID'];
$character_id = $_GET['id'];
?>

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
                        <h1 class="section-heading text-danger">Your Character: <?php $query_INFO = mysql_query("SELECT * FROM character_main WHERE USER_ID = '$usr_id' AND CHARACTER_ID = '$character_id'");
                             $row = mysql_fetch_array($query_INFO); $get_name = $row['CHARACTER_NAME']; echo $get_name; ?></h1><br>

                        <div class="panel panel-info">
                        <h3>Character's Picture</h3>
                        <p>
                            <form action="charactersheet.php?id=<?php echo $character_id ?>" method="post" enctype="multipart/form-data">
                            Select your character's image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit-pic">


<?php

$username = $_SESSION['username'];
$oldmask = umask(0);
// Create directory if it does not exist
if(!is_dir("uploads/". $username ."/".$character_id . "/")) {
    mkdir("uploads/". $username ."/". $character_id . "/");
}
umask($oldmask);

$target_dir = "uploads/" . $username . "/".$character_id . "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit-pic"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Previous file has been replaced.";
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         header('Location:bio.php?id=' . $character_id . '');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>

                        </form>
                        </p>

                        <h3 class="text-info panel-heading"><a href="bio.php?id=<?php echo $character_id ?>">Bio</a></h3>
                        <p class="section-paragraph panel-body">
                            <?php 
                             $get_desc = $row['CHARACTER_BACKGROUND']; 
                             echo $get_desc;
                             ?>
                        </p>

                        <h3 class="text-info panel-heading"><a href="skilldefense.php?id=<?php echo $character_id ?>">Skills & Defenses</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="abilities.php?id=<?php echo $character_id ?>">Abilities</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="combatpowers.php?id=<?php echo $character_id ?>">Combat Powers</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="features.php?id=<?php echo $character_id ?>">Features</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="specialmoves.php?id=<?php echo $character_id ?>">Special Moves</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        </div>
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
