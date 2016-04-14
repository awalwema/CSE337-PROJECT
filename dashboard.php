<!DOCTYPE html>
<?php session_start();?>
<?php $user = $_COOKIE['username']; ?>
<?php require 'dbconnect.php'; 
$username = $_SESSION['username'];
                                
$query_ID = mysql_query("SELECT USER_ID FROM USER WHERE USER_SCREENNAME = '$username'");
$row = mysql_fetch_array($query_ID);
$usr_id= $row['USER_ID'];
?>

<html lang="en">

<?php include 'header.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-success">Your Dashboard</h1><br>

                        <div class="panel panel-success">

                        <h1 class="text-info panel-heading">Your Characters</h1>
                        <p class="section-paragraph panel-body">
                            <?php
                                $result = mysql_query("SELECT CHARACTER_NAME, CHARACTER_ID, CHARACTER_LEVEL FROM character_main WHERE USER_ID = '$usr_id'");

                                if(mysql_num_rows($result) == 0) {
                            echo '<div class = "alert alert-success" role ="alert">You have no characters. <a href="bio.php?id=0">Click here to create one.</a></div>';
                            
                            } else {
                                        echo '<button type="button" class = "btn btn-secondary btn-lg" ><a href="bio.php?id=0">Create a new character.</a></button>';


                                        echo '<table class="table table-hover">';
                                            echo '<thead>';
                                                echo "<tr>";
                                                    echo "<th>#</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Level</th>";
                                                    
                                                    
                                                echo "<tr>";
                                            echo "</thead>";

                                        $counter = 1;   

                                        echo "<tbody>"; 

                                        while($row = mysql_fetch_assoc($result)) {
                                            
                                                echo "<tr>";
                                                    echo "<td>" . $counter . "</td>";
                                                    echo "<td>". '<a href="charactersheet.php?id='.$row["CHARACTER_ID"].'">' . $row["CHARACTER_NAME"]. '</a>'. "</td>";
                                                    echo "<td>". $row["CHARACTER_LEVEL"]. "</td>";
                                                echo "<tr>";
                                            

                                            $counter = $counter + 1;
                                        }

                                                    echo "</tbody>";

                                        echo "</table>";




                            }


                            ?>
                        </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

            <!-- jQuery -->
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>
