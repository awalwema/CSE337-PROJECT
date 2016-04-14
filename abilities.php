<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>
<?php require 'dbconnect.php';
$username = $_SESSION['username'];

$query_ID = mysql_query("SELECT USER_ID FROM USER WHERE USER_SCREENNAME = '$username'");
$row = mysql_fetch_array($query_ID);
$usr_id= $row['USER_ID'];
$character_id = $_GET['id'];
$query_points = mysql_query("SELECT * FROM character_main WHERE CHARACTER_ID = '$character_id'");
$row2 = mysql_fetch_array($query_points);
$abilityPoints = $row2['CHARACTER_ABILITY_POINTS'];
$unusedPoints = $row2['CHARACTER_UNUSED_ABILITY_POINTS'];
?>

<html lang="en">


<?php include 'header.php'; ?>

<body>

    <script>


        function findTotal(chkbx){
            var tot= parseInt(document.getElementById('total').value);
            if(chkbx.checked == true) {
                if(tot - parseInt(chkbx.value) < 0) {
                    chkbx.checked = false;
                    alert("You do not have enough ability points for that skill.")
                }
                else {
                    tot -= parseInt(chkbx.value);
                }
            }
            else {
                tot += parseInt(chkbx.value);
            }
            document.getElementById('total').value = tot;

        }

    </script>

<!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading text-success">Edit Your Character</h1><br>

                <div class="panel panel-success">

                    <h3 class="panel-heading">Abilities</a></h3>
                    <br>
                    <?php


                    if(isset($_POST["submit"])) {

                        $sqlScript = "INSERT INTO character_abilities VALUES ";

                        $jumper = $_POST['Jumper'];
                        if($jumper == null) {
                            $jumper = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 1), ";
                        }
                        $haste = $_POST['Haste'];
                        if($haste == null) {
                            $haste = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 2), ";
                        }
                        $beginnerLuck = $_POST['Beginners_Luck'];
                        if($beginnerLuck == null) {
                            $beginnerLuck = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 3), ";
                        }
                        $resilient = $_POST['Resilient'];
                        if($resilient == null) {
                            $resilient = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 4), ";
                        }
                        $unreasonablyResilient = $_POST['Unreasonably_Resilient'];
                        if($unreasonablyResilient == null) {
                            $unreasonablyResilient = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 5), ";
                        }
                        $waterBreather = $_POST['Water_Breather'];
                        if($waterBreather == null) {
                            $waterBreather = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 6), ";
                        }
                        $waterControl = $_POST['Water_Control'];
                        if($waterControl == null) {
                            $waterControl = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 7), ";
                        }
                        $basicForaging = $_POST['Basic_Foraging'];
                        if($basicForaging == null) {
                            $basicForaging = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 8), ";
                        }
                        $notThisDay = $_POST['Not_This_Day!'];
                        if($notThisDay == null) {
                            $notThisDay = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 9), ";
                        }
                        $helpingHand = $_POST['Helping_Hand'];
                        if($helpingHand == null) {
                            $helpingHand = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 10), ";
                        }
                        $medicinalTraining = $_POST['Medicinal_Training'];
                        if($medicinalTraining == null) {
                            $medicinalTraining = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 11), ";
                        }
                        $illuminate = $_POST['Illuminate'];
                        if($illuminate == null) {
                            $illuminate = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 12), ";
                        }
                        $runeOfReturn = $_POST['Rune_of_Return'];
                        if($runeOfReturn == null) {
                            $runeOfReturn = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 13), ";
                        }
                        $outOfAHat = $_POST['Out_of_a_Hat'];
                        if($outOfAHat == null) {
                            $outOfAHat = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 14), ";
                        }
                        $signatureSpectacle = $_POST['Signature_Spectacle'];
                        if($signatureSpectacle == null) {
                            $signatureSpectacle = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 15), ";
                        }
                        $audiomancy = $_POST['Audiomancy'];
                        if($audiomancy == null) {
                            $jumper = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 16), ";
                        }
                        $concealment = $_POST['Concealment'];
                        if($concealment == null) {
                            $concealment = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 17), ";
                        }
                        $smokeBomb = $_POST['Smoke_Bomb'];
                        if($smokeBomb == null) {
                            $smokeBomb = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 18), ";
                        }
                        $jamLock = $_POST['Jam_Lock'];
                        if($jamLock == null) {
                            $jamLock = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 19), ";
                        }
                        $undetectable = $_POST['Undetectable'];
                        if($undetectable == null) {
                            $undetectable = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 20), ";
                        }
                        $sixthSense = $_POST['Sixth_Sense'];
                        if($sixthSense == null) {
                            $sixthSense = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 21), ";
                        }
                        $telepathy = $_POST['Telepathy'];
                        if($telepathy == null) {
                            $telepathy = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 22), ";
                        }
                        $telekinesis = $_POST['Telekinesis'];
                        if($telekinesis == null) {
                            $telekinesis = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 23), ";
                        }
                        $companion = $_POST['Companion'];
                        if($companion == null) {
                            $companion = 0;
                        }
                        else {
                            $sqlScript .= "(" . $character_id . ", 24), ";
                        }

                        mysql_query("DELETE FROM character_abilities
                                            WHERE CHAR_ID = '$character_id'");

                        $sqlScript = substr($sqlScript, 0, -2);
                        $sqlScript .= ";";
                        mysql_query($sqlScript);

                        $totalUsed = $jumper+$haste+$beginnerLuck+$resilient+$unreasonablyResilient+$waterBreather+$waterControl+$basicForaging+$notThisDay+$helpingHand+
                            $medicinalTraining+$illuminate+$runeOfReturn+$outOfAHat+$signatureSpectacle+$audiomancy+$concealment+$smokeBomb+$jamLock+$undetectable+
                            $sixthSense+$telepathy+$telekinesis+$companion;
                        $totalUnused = $abilityPoints - $totalUsed;

                        $unusedPoints = $totalUnused;
                        mysql_query("UPDATE character_main
                                        SET CHARACTER_UNUSED_ABILITY_POINTS = '$totalUnused'
                                        WHERE CHARACTER_ID = '$character_id'");


                    }
                    ?>
                    <br>
                    <form class="form-horizontal" action= "abilities.php?id=<?php echo $character_id ?>" method = "POST">
                        <h3> Ability Points:
                            <input type="text" id="total" style="border: none" readonly
                                   value= '<?php echo $unusedPoints ?>' /> </h3>
                        <br>
                        <label for="chooseability"> Choose your abilities: </label>

                        <?php
                        $username = $_SESSION['username'];
                        $query = mysql_query("SELECT ABILITIES_ID, ABILITIES_NAME,ABILITIES_COST FROM abilities");
                        // Open the drop down box
                        // Loop through the query results, outputting the options one by one
                        echo'<br>';
                        while ($row = mysql_fetch_array($query)) {
                            $temp = $row['ABILITIES_ID'];
                            $check = "";
                            $query5 = mysql_query("SELECT * FROM character_abilities WHERE CHAR_ID =  '$character_id' AND ABILITIES_ID = '$temp';");
                            if(mysql_num_rows($query5) == 1) { $check = "checked";}
                            echo '<input type="checkbox" id = "qty' . $row['ABILITIES_ID'] . '" name = "' . $row['ABILITIES_NAME'] . '" value='.$row['ABILITIES_COST'].' onclick="javascript:findTotal(qty' . $row['ABILITIES_ID'] . ');" '. $check. ' /> '.$row['ABILITIES_NAME']. " - " . $row['ABILITIES_COST'] . '<br>';
                        }
                        ;?>

                        <input type="Submit" value="Save" name="submit" class="btn btn-default"/>

                    </form>
                    <br>

                </div>
                <div>
                    <button type="button" class="btn btn-success pull-right"><a href="charactersheet.php?id=<?php echo $character_id ?>">Back to Character Sheet</a></button>
                </div>
            </div>
        </div>
    </div>
</section>



</body>

<!-- jQuery -->
<script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

<!-- Bootstrap Core JavaScript -->
<script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

</body>