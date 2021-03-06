"use strict";

function update(animalID)
{
	window.location.replace("./editAnimalForm.php?id=" + animalID);
}

function add(userID)
{
	window.location.replace("./addAnimalForm.php?id=" + userID);
}

function remove(animalID)
{
	var data = {};
	data.id = animalID;

	$.ajax({
		type: "POST",
		url: "./php/deleteAnimal.php",
		data: data,
		success: function(data, status)
		{
			console.log(animalID);
			location.reload();
		},
		error: function(err) {
			alert(err);
		}
	});
}

function returnHome() {
	window.location.replace("./index.php");
}
