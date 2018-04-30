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
  $id = $_POST["id"];
  $species = $_POST["species"];
  $sex = $_POST["sex"];
  $name = $_POST["name"];
  
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
  if ($birtdate == ""){
    $birthdate = 'NULL';
  }

  echo $id."<br>";
  echo $species."<br>";
  echo $sex."<br>";
  echo $name."<br>";
  echo $weight."<br>";
  echo $color."<br>";
  echo $birthdate."<br>";

	$sql = "UPDATE animals SET species = '".$species."', name = '".$name."', sex = '".$sex."', weight = ".$weight.", color = ".$color.", birthdate = ".$birthdate." WHERE id = '".$id."'";

  insertUpdateDatabase($sql);

  echo "<script>window.location.replace('../index.php');</script>";
}
?>
