<!DOCTYPE html>
<?php ob_start();
session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php //error_reporting(0);?>
<?php require 'dbconnect.php';

$character_id = $_GET['id'];
$username = $_SESSION['username'];

$query_ID = mysql_query("SELECT USER_ID FROM USER WHERE USER_SCREENNAME = '$username'");
$row = mysql_fetch_array($query_ID);
$usr_id= $row['USER_ID'];

if ($character_id == 0){

    ob_start();
}
?>
<html lang="en">

        <?php include 'header.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-danger">Edit Your Character</h1><br>

                        <div class="panel panel-warning">

                        <h3 class="text-warning panel-heading">Bio</a></h3>
                        <br><br>
                            <form action= "bio.php?id=<?php echo $character_id ?>" method = "POST">
                                <label>Name:</label>
                                <textarea class="form-control" rows="1" name="name" id = "comments"><?php $query_INFO = mysql_query("SELECT CHARACTER_NAME, CHARACTER_BACKGROUND FROM character_main WHERE USER_ID = '$usr_id' AND CHARACTER_ID = '$character_id'");$row = mysql_fetch_array($query_INFO);
$get_name = $row['CHARACTER_NAME']; echo $get_name;?></textarea>
                                <label >Character Information:</label>
                                <textarea class="form-control" rows="8" name="characterinfo" id = "comments"><?php $get_desc = $row['CHARACTER_BACKGROUND']; echo $get_desc;?></textarea>
                                <?php
                                if(isset($_POST["submit"])) {
                                    $name = $_POST['name'];
                                    $c_info = $_POST['characterinfo'];

                                    $query_row = mysql_query("SELECT * FROM character_main WHERE USER_ID = '$usr_id' AND CHARACTER_ID = '$character_id'");
                                    $num =mysql_num_rows($query_row);

                                if ((1 == $num) and ($character_id !=0)){
                                        mysql_query("UPDATE character_main
                                                    SET CHARACTER_NAME = '$name', CHARACTER_BACKGROUND = '$c_info'
                                                    WHERE USER_ID = '$usr_id' AND CHARACTER_ID= '$character_id'");
                                        echo "Changes have been saved";
                                        header('Location:bio.php?id=' . $character_id . '');
                                exit;
                                }

                                else{
                                    $query_ins = mysql_query("INSERT INTO character_main(USER_ID, CHARACTER_NAME, CHARACTER_BACKGROUND) VALUES ('$usr_id','$name', '$c_info')");
                                    echo "Changes have been saved";

                                    $query_NID = mysql_query("SELECT LAST_INSERT_ID()");

                                    $row = mysql_fetch_array($query_NID);
                                    $character_id= $row['LAST_INSERT_ID()'];


                                    header('Location:bio.php?id=' . $character_id . '');
                                    exit;
                                    }

                                
                                }

                                    ?>
                                <td><input type="Submit" value="Save" name="submit"></td>
                            </form>

                        </div>
                        <button type="button" class="btn btn-warning pull-right"><a href="charactersheet.php?id=<?php echo $character_id ?>">Back to Character Sheet</a></button>

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
