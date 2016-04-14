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
						<div class="panel-heading text-center"><h2>Wanderlust Game Info</h2></div><br>
						<img src="rpg_party.jpg" class="img-rounded center-block"><br>
						<div class="text-center"><h4><i>"A balanced Role Playing Game that lets you bring almost any fantasy concept to life."</i></h4></div>
						<br>
						<p>This site is designed to help you create character sheets for the Wanderlust roleplaying game.
						Wanderlust is a roleplaying system designed for players playing post-by-post on a message board, or over Skype.
						Below, you can check out the official guides for the game.
						It is recommended that you read and familiarize yourself with the rules before you create your character sheet.<br><br>
						<div class="list-group">
							<a href="https://docs.google.com/document/d/1XddZitNG_7X4flsGf7ceIHf0Lb2YzCdnRbjZRxYokks/edit" class="list-group-item list-group-item-success text-center">Wanderlust - The Adventurer's Guide</a>
							<a href="https://docs.google.com/document/d/1ZJzsJmENHHegPO83-NQsCUzYQ1zm1GZsiC4LUwWjsj0/edit" class="list-group-item list-group-item-success text-center">Full list of Abilities</a>
							<a href="https://docs.google.com/document/d/1xcwdPNdDviPeh1HJ_uc1dqlp6zBj228VnGmk8NAXjso/edit" class="list-group-item list-group-item-success text-center">Full list of Combat Powers</a>
							<a href="https://docs.google.com/document/d/1orSjY0jWVVXsJqNFqNoSIPHdPkox1aFXNEK60_Y_dNw/edit" class="list-group-item list-group-item-success text-center">Full list of Features</a>
							<a href="https://docs.google.com/document/d/1EfswOwVDkEmoIuYCuRbQJTf4rhWdoK1W13BSle9PKKg/edit" class="list-group-item list-group-item-success text-center">Full list of Special Moves</a>
						</div>
						<br>
                    </div>
                </div>
            </div>
        </section>

            <!-- jQuery -->
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>

</html>