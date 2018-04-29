<?php include("top.html"); ?>

<?php
	require("common.php");
	
	$userName = null;
	/*
	if(isset($_GET["name"])){
		$userName = htmlspecialchars($_GET["name"]);
	}
	else{
		echo "Are you lost? Please return to the zoo. (zoo.php)";
	}
	*/
	$userName = "trevor";
	
	//get user's animalsS
	$sqlUsersAnimals = "SELECT * From animals WHERE user=\"" . $userName . "\"";
	$usersAnimals = queryDatabase($sqlUsersAnimals);

	echo "<div id=\"header\">";
		echo "<h1> A.R.K. </h1>";
		echo "<img src=\"images/arkLogo.jpg\" width=\"250\" height=\"80\"> ";
		echo "<p> Welcome " . $userName . "!</p>";
	echo "</div>";
	
	echo "<div id=\"container\">";
	
	$length = count($usersAnimals);
	for ($i=0; $i < $length; $i++)
	{
		echo "<div class=\"animalCard\">";
		
			echo "<h2>" . $usersAnimals[$i]['species'] . " </h2>";
			echo "<ul>";
			
				echo "<li> Name: " . $usersAnimals[$i]['name'] . " </li>";
				echo "<li> Sex: " . $usersAnimals[$i]['sex'] . " </li>";
				echo "<li> Weight: " . $usersAnimals[$i]['weight'] . " </li>";
				echo "<li> Color: " . $usersAnimals[$i]['color'] . " </li>";
				echo "<li> Birth-date: " . $usersAnimals[$i]['birthdate'] . " </li>";
			
			echo "</ul>";
			
			echo "<button type=\"button\" onclick=\"update(" . $usersAnimals[$i]['id'] . ")\">Update</button>";
			echo "<button type=\"button\" onclick=\"remove(" . $usersAnimals[$i]['id'] . ")\">Delete</button>";
		echo "</div>";
	}
		
	//unset() destroys the specified variables.
	resetLoop();
	
	echo "</div>";
	
	function resetLoop()
	{
		unset($i);
		unset($length);
	}

	function addSession($animalID)
	{
		$_SESSION['id'] = $animalID;
	}

?>


<?php include("bottom.html"); ?>