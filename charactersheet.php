<!DOCTYPE html>
<?php session_start();?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>

<html lang="en">

        <?php include 'header.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-danger">Your Character</h1><br>

                        <div class="panel panel-info">

                        <h3 class="text-info panel-heading"><a href="bio.php">Bio</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>

                        <h3 class="text-info panel-heading"><a href="skilldefense.php">Skills & Defenses</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="abilities.php">Abilities</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="combatpowers.php">Combat Powers</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="features.php">Features</a></h3>
                        <p class="section-paragraph panel-body">
                            text here returned from database
                        </p>
                        <h3 class="text-info panel-heading"><a href="specialmoves.php">Special Moves</a></h3>
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
