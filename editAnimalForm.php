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
 
<?php
    require('./php/top.php');
?>
    <div class="wrapper">
        <div class="form-container">
            <div class="form-container-header">Edit Animal Information</div>
            <div class="form-container-content">
                <p>Please update the details of your animal.</p>
				<form method="post" action="./php/editAnimal.php" id="AddForm">
					<input type="hidden" name="id" value="<?php echo $animalID ?>"/>

                    <label>Species</label>
					<input type="text" name="species" class="form-control" value="<?php echo $species ?>"/>
                    <label>Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo $name ?>"/>
                    <label>Sex</label>
					<input type="text" name="sex" class="form-control" value="<?php echo $sex ?>"/>
                    <label>Color (optional)</label>
					<input type="text" name="color" class="form-control" value="<?php echo $color ?>"/>
                    <label>Weight (optional)</label>
					<input type="text" name="weight" class="form-control" value="<?php echo $weight ?>"/>
                    <label>Birthdate (optional)</label>
					<input type="date" name="birthdate" class="form-control" value="<?php echo $birthdate ?>"/>
					<input type="submit" class="button" style="margin-top:10px;" value="Update Animal">
				</form>
			</div>
		</div>
	</div>
<?php
    include("./php/bottom.php");
?>
