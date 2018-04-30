<?php
  include("./php/top.php");
 ?>

<?php
  require("./php/common.php");

  $animalID = $_GET["id"];

  $sql = "SELECT * FROM animals WHERE id = '" . $animalID . "'";

  //echo $sql . "<br />";

  //$storeArray = Array();
  $storeArray = queryDatabase($sql);

  //echo json_encode($storeArray[0]);

  $name = $storeArray[0]['name'];
  $species = $storeArray[0]['species'];
  $sex =  $storeArray[0]['sex'];
  $color =  $storeArray[0]['color'];
  $birthdate =  $storeArray[0]['birthdate'];
  $weight = $storeArray[0]['weight'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>

     <form method="POST" action="./php/editAnimal.php" id="EditForm">
     <div class="editAnimalData">
 	<legend>Edit Animal Information</legend>
 	<div class="editAnimalData">
 		<input type="hidden" name="id" value="<?php echo $animalID ?>">
 		SPECIES: <input type="text" name="species" value="<?php echo $species ?>"> <br>
 		NAME: <input type="text" name="name" value="<?php echo $name ?>"> <br>
 		SEX: <input type="text" name="sex" value="<?php echo $sex ?>"> <br>
        WEIGHT (opt): <input type="text" name="weight" value="<?php echo $weight ?>"> <br />
        COLOR (opt): <input type="text" name="color" value="<?php echo $color ?>"> <br>
 		BIRTHDATE (opt): <input type="date" name="birthdate" value="<?php echo $birthdate ?>"> <br>

 		<button type="submit" name="EditAnimal">Submit Changes</button>

         </div>
     </div>
 </form>

 </body>
 </html>

 <?php
  include("./php/bottom.php");
 ?>
