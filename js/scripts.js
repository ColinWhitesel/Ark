"use strict";

function update(animalID)
{
	$.ajax({
	type: "GET",
	url: "./php/editAnimal.php",
	data:{
		id: animalID
	},
	success: function(data, status)
	{
		window.location.replace("./editAnimal.php?id=" + animalID);
	},
	error: function(err) {
		alert(err);
	}
});
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
