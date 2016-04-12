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
                        <h1 class="section-heading text-danger">About Us</h1><br>

                        <img src="http://www.acornsoftware.net/images/Careers/team.jpg" class="pull-right" width="500" height="300">

                        <div class="panel panel-success">

                        <h3 class="text-success panel-heading">Our Team</h3>
                        <p class="section-paragraph panel-body">
                        <br>
                            We take great pride in providing you with the best experience on our site.  Browse through our team
                            members below and gain some background information on them.  If you have any questions or concerns,
                            please go to our <a href="contactus.php">Contact Us</a>
                            page.
                        </p>

                        <h3 class="text-success panel-heading">Kyle Thornton:</h3>
                        <p class="section-paragraph panel-body">
                        <img src="http://www.acornsoftware.net/images/Careers/team.jpg" class="pull-left" style="padding-right:20px;" width="100" height="100">
                            Major -
                            <br><br>
                            Project Contribution -
                        </p>
                        <h3 class="text-success panel-heading">Matthew Vasilakis:</h3>
                        <p class="section-paragraph panel-body">
                        <img src="http://www.acornsoftware.net/images/Careers/team.jpg" class="pull-left" style="padding-right:20px;" width="100" height="100">
                            Major - Computer Science
                            <br><br>
                            Project Contribution -
                        </p>
                        <h3 class="text-success panel-heading">Andrew Walwema:</h3>
                        <p class="section-paragraph panel-body">
                        <img src="http://www.acornsoftware.net/images/Careers/team.jpg" class="pull-left" style="padding-right:20px;" width="100" height="100">
                            Major -
                            <br><br>
                            Project Contribution -
                        </p>
                        <h3 class="text-success panel-heading">Brianna Kearney:</h3>
                        <p class="section-paragraph panel-body">
                        <img src="http://www.acornsoftware.net/images/Careers/team.jpg" class="pull-left" style="padding-right:20px;" width="100" height="100">
                            Major -
                            <br><br>
                            Project Contribution -
                        </p>
                        <h3 class="text-success panel-heading">Brandon Jackson:</h3>
                        <p class="section-paragraph panel-body">
                        <img src="http://www.acornsoftware.net/images/Careers/team.jpg" class="pull-left" style="padding-right:20px;" width="100" height="100">
                            Major -
                            <br><br>
                            Project Contribution -
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
