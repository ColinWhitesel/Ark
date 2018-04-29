<?php
/*
  CS 270 - Group Project
  ARK (Animal Record Keeper)
  Trevor D. Brown, Jamie Thomas, Colin Whitesel, Brian Bulka

  createUser.php - creates a new user entry for ARK.
*/

require("./common.php");

$user = $_POST["user"];
$password = $_POST["password"];

$NewUserIntoDatabaseSQL = "INSERT INTO users (user, hpass) VALUES (" . $user . "," . $password . ")";

$response = PDOCall($NewUserIntoDatabaseSQL);
SendJSON($response);
?>
