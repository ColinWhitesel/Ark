<?php
require './common.php';

if(
    isset($_POST['id']) &&
    isset($_POST['species']) &&
    isset($_POST['name']) &&
    isset($_POST['sex']) &&
    isset($_POST['weight']) &&
    isset($_POST['color']) &&
    isset($_POST['birthdate'])
) {
	$sql = "UPDATE animals SET species = '" . $_POST['species'] . "', name = '" . $_POST['name'] . "', sex = '" . $_POST['sex'] . "', weight = '" . $_POST['weight'] . "', color = '" . $_POST['color']. "', birthdate = '" . $_POST['birthdate'] . "' WHERE id = '" . $_POST['id'] . "'";

  insertUpdateDatabase($sql);

}
?>
