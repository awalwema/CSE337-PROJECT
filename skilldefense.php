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
$skillPoints = $row2['CHARACTER_SKILL_POINTS'];
$unusedPoints = $row2['CHARACTER_UNUSED_SKILL_POINTS'];
$acrobatics = $row2['CHARACTER_ACROBATICS'];
$arcana = $row2['CHARACTER_ARCANA'];
$dexterity = $row2['CHARACTER_DEXTERITY'];
$heal = $row2['CHARACTER_HEAL'];
$insight = $row2['CHARACTER_INSIGHT'];
$might = $row2['CHARACTER_MIGHT'];
$perception = $row2['CHARACTER_PERCEPTION'];
$stealth = $row2['CHARACTER_STEALTH'];
$genKnowledge = $row2['CHARACTER_GEN_KNOWLEDGE'];
$endurance = $row2['CHARACTER_ENDURANCE'];
$reflexes = $row2['CHARACTER_REFLEXES'];
$will = $row2['CHARACTER_WILL'];

?>
<html lang="en">

        <?php include 'header.php'; ?>

    <body>

    <script>

        var arr = [1,2,3,4,5,6,7,8,9,0,1,2];
        //var names = ["acrobatics", "arcana", "dexterity", "heal", "insight", "might", "perception", "stealth", "generalknowledge", "endurance", "reflexes", "will"];
        var ids = ["qty1", "qty2", "qty3", "qty4", "qty5", "qty6", "qty7", "qty8", "qty9", "qty10", "qty11", "qty12"];
        function findTotal(){

            var tot= parseInt(<?php echo $skillPoints; ?>);
            for(var i=0;i<arr.length;i++){
                if(parseInt(arr[i]))
                    tot -= parseInt(arr[i]);
            }
            document.getElementById('total').value = tot;

        }

        function validateField(value) {
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
        }

    </script>
            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-success">Edit Your Character</h1><br>

                        <div class="panel panel-success">

                        <h3 class="panel-heading">Skills & Defenses</a></h3>
                            <?php
                            if(isset($_POST["submit"])) {

                                    $acrobatics = $_POST['acrobatics'];
                                    $arcana = $_POST['arcana'];
                                    $dexterity = $_POST['dexterity'];
                                    $heal = $_POST['heal'];
                                    $insight = $_POST['insight'];
                                    $might = $_POST['might'];
                                    $perception = $_POST['perception'];
                                    $stealth = $_POST['stealth'];
                                    $genKnowledge = $_POST['generalknowledge'];
                                    $endurance = $_POST['endurance'];
                                    $reflexes = $_POST['reflexes'];
                                    $will = $_POST['will'];

                                $totalUsed = $acrobatics + $arcana + $dexterity + $heal + $insight + $might + $perception +
                                    $stealth + $genKnowledge + $endurance + $reflexes + $will;
                                $totalUnused = $skillPoints - $totalUsed;
                                
                                if($totalUsed > $skillPoints) {
                                    echo "Too many skill points allotted.";

                                }
                                else {

                                    

                                    mysql_query("UPDATE character_main
                                                SET CHARACTER_ACROBATICS = '$acrobatics', CHARACTER_ARCANA = '$arcana',
                                                CHARACTER_DEXTERITY = '$dexterity', CHARACTER_HEAL = '$heal', CHARACTER_INSIGHT = '$insight',
                                                CHARACTER_MIGHT = '$might', CHARACTER_PERCEPTION = '$perception', CHARACTER_STEALTH = '$stealth',
                                                CHARACTER_GEN_KNOWLEDGE = '$genKnowledge', CHARACTER_ENDURANCE = '$endurance',
                                                CHARACTER_REFLEXES = '$reflexes', CHARACTER_WILL = '$will', CHARACTER_UNUSED_SKILL_POINTS = '$totalUnused'
                                                WHERE CHARACTER_ID = '$character_id'");

                                    echo '<div class="alert alert-success" role ="alert">Changes Saved.</div>';
                                }

                            }
                            ?>
                            <br>
                        <form class="form-horizontal" action= "skilldefense.php?id=<?php echo $character_id ?>" method = "POST">
                            <h3>Skill Points:
                            <input type="text" id="total" style="border: none" readonly
                                   value= '<?php echo $unusedPoints ?>' /> </h3>
                            <br>
                            <h3>Skills</h3>
                            <br>
                            <div class="text">
                                <label for="acrobatics"> Acrobatics: &nbsp</label>
                                <input type="text" id = "qty1" name = "acrobatics" placeholder="Enter Points"
                                       value = '<?php echo $acrobatics; ?>' onblur="javascript:validateField(qty1.value);" />
                                <p>Acrobatics is your nimbleness - Tumbling, Balancing, Juggling, Agility. Acrobatics
                                    and Might overlap in things like Running or Mountain Climbing (which both could perform).</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for="aracana"> Arcana: &nbsp</label>
                                <input type="text" id = "qty2" name = "arcana" placeholder="Enter Points"
                                       value = '<?php echo $arcana; ?>' onblur="javascript:validateField(arcana.value);" />
                                <p>Arcana is your ability to interact with and understand Magic. It’s Analyzing and
                                Manipulating magical effects, similar to how Dexterity can fiddle with traps or machines.</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for="dexterity"> Dexterity:   &nbsp</label>
                                <input type="text" id = "qty3" name = "dexterity" placeholder="Enter Points"
                                       value = '<?php echo $dexterity; ?>' onblur="javascript:validateField(dexterity.value);" />
                                <p>Dexterity is your Fine Motor Skills - lock-picking, machine-jiggering and
                                trap-disabling/resetting.  Dexterity also governs aiming in non-combat situations,
                                like tossing a rock and hitting a lever across the room.</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for="heal"> Heal:   &nbsp</label>
                                <input type="text" id = "qty4" name = "heal" placeholder="Enter Points"
                                       value = '<?php echo $heal; ?>' onblur="javascript:validateField(heal.value);"/>
                                <p>Heal is your ability to remove Afflictions, analyze wounds, diseases etc</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "insight"> Insight:    &nbsp </label>
                                <input type="text" id = "qty5" name = "insight" placeholder="Enter Points"
                                       value = '<?php echo $insight; ?>' onblur="javascript:validateField(insight.value);" />
                                <p>Insight is like your social perception. It’s reading peoples' expressions, tones of
                                voice and similar to determine what they're feeling and whether they're lying.</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "might"> Might:     &nbsp</label>
                                <input type="text" id = "qty6" name = "might" placeholder="Enter Points"
                                       value = '<?php echo $might; ?>' onblur="javascript:validateField(might.value);" />
                                <p>Might is your physical strength - swimming against the current, leaping wide chasms,
                                breaking down doors</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "perception"> Perception:    &nbsp </label>
                                <input type="text" id = "qty7" name = "perception" placeholder="Enter Points"
                                       value = '<?php echo $perception; ?>' onblur="javascript:validateField(perception.value);" />
                                <p>Perception is your ability to notice things with your physical senses (all of them –
                                sight, hearing, touch, smell, etc.)</p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "Stealth"> Stealth:   &nbsp  </label>
                                <input type="text" id = "qty8" name = "stealth" placeholder="Enter Points"
                                       value = '<?php echo $stealth; ?>' onblur="javascript:validateField(stealth.value);"/>
                                <p>Stealth is your ability to move about discretely - to successfully stay quiet and avoid being noticed. </p>
                            </div>
                            <br>
                            <div class="text">
                                <label for= "generalknowledge"> General Knowledge:   &nbsp   </label>
                                <input type="text" id = "qty9" name = "generalknowledge" placeholder="Enter Points"
                                       value = '<?php echo $genKnowledge; ?>' onblur="javascript:validateField(generalknowledge.value);" />
                                <p>Your knowledge of things that don’t fall into the other skills. Who's the king of
                                this land? What’s the historical significance of the strange coin you just found?
                                How do you cook a decent meal? Which mushrooms are safe to eat?</p>
                            </div>

                            <h3> Defenses </h3>
                            <br>
                            <div class="text">
                                <label for= "endurance"> Endurance:   &nbsp   </label>
                                <input type="text" id = "qty10" name = "endurance" placeholder="Enter Points"
                                       value = '<?php echo $endurance; ?>' onblur="javascript:validateField(endurance.value);" />
                                <p>Enduring serious damage, wounds and diseases through sheer physical toughness</p>
                            </div>
                            <div class="text">
                                <label for= "reflexes"> Reflexes:   &nbsp   </label>
                                <input type="text" id = "qty11" name = "reflexes" placeholder="Enter Points"
                                       value = '<?php echo $reflexes; ?>' onblur="javascript:validateField(reflexes.value);" />
                                <p>Quickly react to danger, dodging traps and responding to sucker-punches.</p>
                            </div>
                             <div class="text">
                                 <label for= "will"> Will:   &nbsp   </label>
                                 <input type="text" id = "qty12" name = "will" placeholder="Enter Points"
                                        value = '<?php echo $will; ?>' onblur="javascript:validateField(will.value);" />
                                 <p>Mentally resisting mind-altering effects, or similar mental assaults (from resisting
                                  body possession and charm spells to holding onto one's sanity in the face of
                                  abominations).</p>
                             </div>

                            <div align="right">
                            <input type="Submit" value="Save" name="submit" class="btn btn-default">
                            </div>


                        </form>
                        <br>
                            <div>
                                    <button type="button" class="btn btn-success pull-right"><a href="charactersheet.php?id=<?php echo $character_id ?>">Back to Character Sheet</a></button>
                            </div>

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
