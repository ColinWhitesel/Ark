<?php
	require("common.php");

	$animalID = htmlspecialchars($_POST["id"]);
	$sql ="DELETE FROM animals WHERE id=\"" . $animalID . "\"";
    insertUpdateDatabase($sql);

?>