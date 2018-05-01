<?php
	$userID = $_GET["id"];
?>
<?php
    require('./php/top.php');
?>
	<div class="wrapper">
        <div class="form-container">
            <div class="form-container-header">Add Animal Information</div>
            <div class="form-container-content">
                <p>Please fill in details of your new animal.</p>
				<form method="post" action="./php/addAnimal.php" id="AddForm">
					<input type="hidden" name="user" value="<?php echo $userID ?>"/>

                    <label>Species</label>
					<input type="text" name="species" class="form-control"/>
                    <label>Name</label>
					<input type="text" name="animalname" class="form-control"/>
                    <label>Sex</label>
					<input type="text" name="gender" class="form-control"/>
                    <label>Color (optional)</label>
					<input type="text" name="color" class="form-control"/>
                    <label>Weight (optional)</label>
					<input type="text" name="weight" class="form-control"/>
                    <label>Birthdate (optional)</label>
					<input type="date" name="birthdate" class="form-control"/>
					<input type="submit" class="button" style="margin-top:10px;" value="Add Animal">
				</form>
			</div>
		</div>
	</div>
<?php
 include("./php/bottom.php");
?>