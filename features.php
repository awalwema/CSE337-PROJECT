<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>
<?php require 'dbconnect.php'; ?>
<html lang="en">

        <?php include 'header.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-danger">Edit Your Character</h1><br>

                        <div class="panel panel-warning">

                        <h3 class="text-warning panel-heading">Features</a></h3>
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
