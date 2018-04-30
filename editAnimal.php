<?php
require_once 'config.php';

if(
    isset($_POST['id']) &&
    isset($_POST['species']) &&
    isset($_POST['name']) &&
    isset($_POST['sex']) &&
    isset($_POST['color']) &&
    isset($_POST['birthdate'])
) {
	$sql = "UPDATE animals 
            SET SPECIES = ".$_POST['species'].
            ", NAME = ".$_POST['name'].
            ", SEX = ".$_POST['sex'].
            ", COLOR = ".$_POST['color'].
            ", BIRTHDATE = ".$_POST['birthdate'].
            "WHERE ID = ".$_POST['id'];	
     
    if($stmt = mysqli_prepare($link, $sql)){
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){ 
            echo "Table Updated Successfully!";
        } else {
            echo mysqli_error($link);
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
}
?>