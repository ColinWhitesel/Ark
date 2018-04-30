<?php
  include("./php/top.php");
 ?>

<?php
	$userID = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="./php/createAnimal.php" id="AddForm">
<div class="addAnimalData">
	<legend>Add Animal Information</legend>
	<div class="newAnimalData">
		<input type="text" name="user" min="1" max="200" style="display:none;" value="<?php $userID ?>"/>
		SPECIES: <input type="text" name="species" /> <br />
		NAME: <input type="text" name="animalname" /> <br />
		SEX: <input type="text" name="gender" /> <br />
		COLOR (opt): <input type="text" name="color" /><br />
		WEIGHT (opt): <input type="text" name="weight" /> <br />
		BIRTHDATE (opt): <input type="date" name="birthdate" /> <br />

		<input type="submit" value="Add Animal">

	</div>
</div>
</form>
</body>
</html>

<?php
 include("./php/bottom.php");
?>