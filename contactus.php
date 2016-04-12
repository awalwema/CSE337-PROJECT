<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>

<html lang="en">

       <?php include 'header.php'; ?>

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