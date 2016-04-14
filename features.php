<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0);
$character_id = $_GET['id']; ?>
<?php require 'dbconnect.php'; ?>
<html lang="en">

        <?php include 'header.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-success">Edit Your Character</h1><br>

                        <div class="panel panel-success">

                        <h3 class="panel-heading">Features</a></h3>
                        <br><br>
                        <form class="form-horizontal">

                              <br>
                              <label for="chooseability"> Choose your Feature: </label>
                            <?php
                            $username = $_SESSION['username'];
                            $query = mysql_query("SELECT FEATURES_ID, FEATURES_NAME FROM FEATURES");

                            // Open the drop down box
                            echo '<select name="Select Feature">';

                            echo '<option class="placeholder" selected disabled value="">Select Feature</option>';

                            // Loop through the query results, outputting the options one by one
                            while ($row = mysql_fetch_array($query)) {
                                echo '<option value="'.$row['FEATURES_ID'].'">'.$row['FEATURES_NAME'].'</option>';
                            }

                            // Close the drop down box
                            echo '</select>';?>

                            <div align="right">
                             <input type="Submit" value="Save" name="submit" class="btn btn-default">
                         </div>

                        </form>
                        <br>



                        </div>
                        <div>
                                    <button type="button" class="btn btn-success pull-right"><a href="charactersheet.php?id=<?php echo $character_id ?>">Back to Character Sheet</a></button>
                            </div>
                    </div>
                </div>
            </div>
        </section>

            <!-- jQuery -->
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>
