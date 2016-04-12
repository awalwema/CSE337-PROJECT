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
                        <h1 class="section-heading text-danger">Edit Your Character</h1><br>

                        <div class="panel panel-warning">

                        <h3 class="text-warning panel-heading">Bio</a></h3>
                        <br><br>
                            <label id="name">Name:</label>
                            <textarea class="form-control" rows="1" id="name"></textarea>

                        
                            <label id="characterinfo">Character Information:</label>
                            <textarea class="form-control" rows="8" id="characterinfo"></textarea>

                        <br><br>
                            <label id="image">Image:</label>
                            <textarea class="form-control" rows="4" id="image"></textarea>
                        <br><br>

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
