<?php
/*
  CS 270 - Group Project
  ARK (Animal Record Keeper)
  Trevor D. Brown, Jamie Thomas, Colin Whitesel, Brian Bulka

  createAnimal.php - creates a new animal entry for ARK.
*/

require("./common.php");

$owner = $_POST["user"];
$species = $_POST["species"];
$gender = $_POST["gender"];
$animalname = $_POST["animalname"];

$weight = intval($_POST["weight"]);
if ($weight == ""){
  $weight = 'NULL';
}

$color = $_POST["color"];
if ($color == ""){
  $color = 'NULL';
} else {
  $color = "'".$color."'";
}

$birthdate = $_POST["birthdate"];
if ($birthdate == ""){
  $birthdate = 'NULL';
}
else{
  $birthdate = strtotime($_POST["birthdate"]);
  $birthdate = date('Y-m-d', $birthdate);
  $birthdate = "'" . $birthdate . "'";
}

$NewAnimalIntoDatabaseSQL = "INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, '" . $owner . "','" . $species . "','" . $gender . "'," . $weight . "," . $color . "," . $birthdate . ",'" . $animalname . "')";

insertUpdateDatabase($NewAnimalIntoDatabaseSQL);

echo "<script>window.location.replace('../index.php');</script>";
?>
