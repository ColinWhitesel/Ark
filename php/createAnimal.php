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
  $weight = NULL;
}

$color = $_POST["color"];
if ($color == ""){
  $color = NULL;
}

$birthdate = $_POST["birthdate"];
if ($birtdate = ""){
  $birthdate = NULL;
}

$NewAnimalIntoDatabaseSQL = "INSERT INTO animals (id, user, species, sex, weight, color, birthdate, name) VALUES (NULL, '" . $owner . "','" . $species . "','" . $gender . "'," . $weight . ",'" . $color . "','" . $birthdate . "','" . $animalname . "')";

$response = insertUpdateDatabase($NewAnimalIntoDatabaseSQL);
SendJSON($response);
?>
