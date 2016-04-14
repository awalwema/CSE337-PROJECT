<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); 
$character_id = $_GET['id'];?>
<?php require 'dbconnect.php'; ?>
<html lang="en">

<?php include 'header.php'; ?>

<body>

    <script>

       
        function findTotal(){

            var tot= parseInt(<?php echo $skillPoints; ?>);
            for(var i=0;i<arr.length;i++){
                if(parseInt(arr[i]))
                    tot -= parseInt(arr[i]);
            }
            document.getElementById('total').value = tot;

        }

        /*function validateField(value) {
            //alert(value);

            for(var a=0;a < 12;a++) {
                arr[a] = document.getElementById(ids[a]).value;
            }

            for(var j=0;j<arr.length;j++) {

                if(!isNaN(arr[j]) ) {
                    if(parseInt(arr[j]) <= 10 && parseInt(arr[j]) >= 0) {
                        findTotal();
                    }
                    else {
                        alert("Value must be between 0 and 10.")
                        return false;
                    }
                }
                else {
                    alert("You must input a number.");
                    return false;
                }
            }
        }*/

    </script>

<!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading text-danger">Edit Your Character</h1><br>

                <div class="panel panel-warning">

                    <h3 class="text-warning panel-heading">Abilities</a></h3>
                    <br><br>
                    <form class="form-horizontal">
                        <p> Number of ability points:</p>
                        <br>
                        <label for="chooseability"> Choose your abilities: </label>
                        <?php
                        $username = $_SESSION['username'];
                        $query = mysql_query("SELECT ABILITIES_ID, ABILITIES_NAME,ABILITIES_COST FROM abilities");
                        // Open the drop down box
                        // Loop through the query results, outputting the options one by one
                        echo'<br>';
                        while ($row = mysql_fetch_array($query)) {
                            echo '<input type="checkbox" id = "qty" name = "' . $row['ABILITIES_NAME'] . '" value="'.$row['ABILITIES_COST'].' onblur="javascript:validateField(qty);" />">'.$row['ABILITIES_NAME']. " - " . $row['ABILITIES_COST'] . '<br>';
                        }
                        ;?>

                        
                                         <div align="right">
                            <input type="Submit" value="Save" name="submit" class="btn btn-primary">
                            </div>
                    </form>
                    <br>



                </div>
                <div>
                                    <button type="button" class="btn btn-warning pull-right"><a href="charactersheet.php?id=<?php echo $character_id ?>">Back to Character Sheet</a></button>
                            </div>
            </div>
        </div>
    </div>
</section>



</body>

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