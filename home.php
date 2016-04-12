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

                        <?php
                                
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    echo '<h1 class="section-heading text-danger">Welcome to Character Creator!</h1>';

} else {
    echo '<h1 class="section-heading text-danger">Welcome to Character Creator!</h1>';
}
 ?>
                        <p class="lead section-lead">This website will allow you to easily create your own Wanderlust Character sheet</p>
                        <br>
                        <p class="section-paragraph text-success" >Login or Register now by clicking on the corresponding tab in the upper <br> right corner
                        of the page.  Once you are logged in, click the Character Sheet <br> tab on the navigational menu to edit or start
                        creating your character!

                        <img class="img-responsive pull-right" src="http://villageoffaith.org/uploads/6/2/2/8/62282299/1370146_orig.png" alt="">

                        </p>
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