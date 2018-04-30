<?php
require_once 'config.php';

$sql = "SELECT * FROM animals WHERE id = ?";

$animalID = $_GET["animalID"];

$result = '';
$storeArray = Array();

$species = '';
$animalName = '';
$sex = '';
$color = '';
$birthdate = '';

    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_id);
        
        // Set parameters
        $param_id = $animalID;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){ 

            // Store result
            mysqli_stmt_store_result($stmt);

            // Verify that the id returns an animal        
            if(mysqli_stmt_num_rows($stmt) == 1){  
            
                $result = mysqli_stmt_get_result($stmt);
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $num_rows = count($rows);
                print "$num_rows rows\n";
                
                $species = '';
                $animalName = '';
                $sex = '';
                $color = '';
                $birthdate = '';
                
            } else{
                // Display an error message if id doesn't exist
                $result = 'No animal found with that id.';
            }
        } else{
            $result = mysqli_error($link);
        }
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        $result = mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <form method="post" id="EditForm">
    <div class="editAnimalData">
	<legend>Edit Animal Information</legend>
	<div class="editAnimalData">
		<input type="text" name="id" style="display:none;" value="<?php $animalID ?>">
		SPECIES: <input type="text" name="species" value="<?php $species ?>"> <br>
		NAME: <input type="text" name="name" value="<?php $name ?>"> <br>
		SEX (opt): <input type="text" name="sex" value="<?php $sex ?>"> <br>
		COLOR (opt): <input type="text" name="color" value="<?php $color ?>"> <br>
		BIRTHDATE (opt): <input type="date" name="birthdate" value="<?php $birthdate ?>"> <br>
		
		<button type="submit" name="EditAnimal">Submit Changes</button>

        </div>
    </div>
</form>

</body>
</html>