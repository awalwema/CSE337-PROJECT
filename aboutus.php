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
                    <div class="panel panel-success col-lg-12">
						<div class="panel-heading text-center"><h2>About Us</h2></div>
						<p class="lead section-lead text-center">
							<i>On a dark and stormy night, five brave students taking CSE/CIT 337 gathered to form this team...</i>
						</p>
						
						<div class="panel panel-success col-lg-12">
							<div class="panel-heading text-center"><h4>Kyle Thornton</h4></div>
							<div class="col-lg-2"><br>
								<img src="kyle.png" width="100" height="100" class="img-rounded center-block">
							</div>
							<div class="col-lg-10">
								<p class="section-paragraph panel-body text-left">
									Kyle is an Information Technology major.
									He lends his mighty skills to the faraway kingdom of Birmingham.
									He has a +5 bonus to all skill checks involving John Cena.
								</p>
							</div>
						</div>

						<div class="panel panel-success col-lg-12">
							<div class="panel-heading text-center"><h4>Matthew Vasilakis</h4></div>
							<div class="col-lg-2"><br>
								<img src="matthew.png" width="100" height="100" class="img-rounded center-block">
							</div>
							<div class="col-lg-10">
								<p class="section-paragraph panel-body text-left">
									Matthew is a Computer Science major.
									What he does in his spare time is a mystery to many.
									What is known, however, is that he has the power to slay a dozen men in a heartbeat, but he usually doesn't because he's such a nice guy.
								</p>
							</div>
						</div>

						<div class="panel panel-success col-lg-12">
							<div class="panel-heading text-center"><h4>Andrew Walwema</h4></div>
							<div class="col-lg-2"><br>
								<img src="andrew.png" width="100" height="100" class="img-rounded center-block">
							</div>
							<div class="col-lg-10">
								<p class="section-paragraph panel-body text-left">
									Andrew is a Computer Science major.
									He can be found providing sagely assistance to wayward technology users at the Kresge Library.
									His chief weapons are fear, surprise, and a Linux operating system.
								</p>
							</div>
						</div>

						<div class="panel panel-success col-lg-12">
							<div class="panel-heading text-center"><h4>Brianna Kearney</h4></div>
							<div class="col-lg-2"><br>
								<img src="brianna.png" width="100" height="100" class="img-rounded center-block">
							</div>
							<div class="col-lg-10">
								<p class="section-paragraph panel-body text-left">
									Brianna is an Information Technology major.
									In her spare time she does absolutely nothing of value.
									It is rumored that she is actually a several-centuries-old sorceress.
								</p>
							</div>
						</div>

						<div class="panel panel-success col-lg-12">
							<div class="panel-heading text-center"><h4>Brandon Jackson</h4></div>
							<div class="col-lg-2"><br>
								<img src="brandon.png" width="100" height="100" class="img-rounded center-block">
							</div>
							<div class="col-lg-10">
								<p class="section-paragraph panel-body text-left">
									Brandon is a Computer Science major.
									He is accomplished in the mystical art of plasticraft.
									Do not meddle in his affairs for he is subtle and quick to anger.
								</p>
							</div>
						</div>

                    </div>
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
