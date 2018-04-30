"use strict";

function update(animalID)
{
	window.location.replace("./editAnimal.php?id=" + animalID);

	/*
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
*/
}

function add(userID)
{
	window.location.replace("./newAnimal.php?id=" + userID);

	/*
	$.ajax({
	type: "GET",
	url: "./php/createAnimal.php",
	data:{
		id: userID
	},
	success: function(data, status)
	{
		window.location.replace("./newAnimal.php?id=" + userID);
	},
	error: function(err) {
		alert(err);
	}
});
*/
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
