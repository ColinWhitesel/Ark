<?php
    require('./php/top.php');
?>

<?php
	require("./php/common.php");

	// Initialize the session
	session_start();

	// If session variable is not set it will redirect to login page
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	  header("location: login.php");
	  exit;
	}
	else{
		$userName = $_SESSION["username"];
	}

	//get user's animalsS
	$sqlUsersAnimals = "SELECT * From animals WHERE user=\"" . $userName . "\"";
	$usersAnimals = queryDatabase($sqlUsersAnimals);

	echo "<div class=\"wrapper\">";

	echo "<img class=\"index-logo\" alt=\"ARK Logo\" src=\"images/arkLogo.jpg\"> ";
	echo "<div class=\"index-welcome\"> Welcome " . $userName . "!</div>";

	$length = count($usersAnimals);
	for ($i=0; $i < $length; $i++)
	{
		echo "<div class=\"animal-card\">";

			echo "<div class=\"animal-card-header\">". $usersAnimals[$i]['species'] . "</div>";
			echo "<div class=\"animal-card-content\">";
				echo "<ul>";
					echo "<li> Name: " . $usersAnimals[$i]['name'] . " </li>";
					echo "<li> Sex: " . $usersAnimals[$i]['sex'] . " </li>";
					if($usersAnimals[$i]['weight'] != ''){
						echo "<li> Weight: " . $usersAnimals[$i]['weight'] . " </li>";
					}
					if($usersAnimals[$i]['color'] != ''){
						echo "<li> Color: " . $usersAnimals[$i]['color'] . " </li>";
					}
					if($usersAnimals[$i]['birthdate'] != ''){
						echo "<li> Birth-date: " . $usersAnimals[$i]['birthdate'] . " </li>";
					}
				echo "</ul>";

				echo "<button class=\"animal-card-button button\" type=\"button\" onclick=\"update(" . $usersAnimals[$i]['id'] . ")\">Update</button>";
				echo "<button class=\"animal-card-button button\" type=\"button\" onclick=\"remove(" . $usersAnimals[$i]['id'] . ")\">Delete</button>";
			echo "</div>";
		echo "</div>";
	}

	//unset() destroys the specified variables.
	resetLoop();

	echo "<div class=\"index-add-container\">";
		echo "<button class=\"add-button button\" type=\"button\" onclick=\"add('" . $userName . "')\">Add Animal</button>";
	echo "</div>";
	echo "</div>";

	function resetLoop()
	{
		unset($i);
		unset($length);
	}
?>


<?php include("./php/bottom.php"); ?>
