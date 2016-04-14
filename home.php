<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>
<html lang="en">

    <?php include 'header2.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container-fluid">
                <div class="row">
					<div class="col-lg-2"></div>
                    <div class="col-lg-8 panel panel-success">
						<div class="panel-heading"><h1>Welcome to Castle Cumulus!</h1></div>
                        <p class="lead section-lead">This website allows you to easily create character sheets for use with the Wanderlust roleplaying system.</p>
                        <p class="section-paragraph">To get started, <a href="login.php">log into</a> your account (or <a href="registration.php">register</a> for a free account if you don't have one). 
						<br> Once you are logged in, you can start building your own <a href="charactersheet.php">Character Sheet</a>!
                        </p>
						<div class="panel-footer"><i>Graphic elements on this site used under fair-use law for educational purposes. Please don't sue us.</i></div>
                    </div>
					<div class="col-lg-2"></div>
                </div>
            </div>
        </section>

            <!-- Fixed Height Image Aside -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->


            <!-- Content Section -->
            <!-- Content Section -->

            <!-- jQuery -->
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>

</html>