"use strict";

function update(animalID)
{
	$.ajax({
	type: "POST",
	url: "http://localhost/ark/.php",//forums page
	data:{
		id: animalID
	},
	success: function(data, status)
	{
		location.reload();
	},
	error: function(err) {
		alert(err);
	}
});
}

function remove(animalID)
{
	console.log(animalID);
	
	var data = {
		id: animalID
	};
	
	$.ajax({
	type: "POST",
	url: "./deleteAnimal.php",
	data: data,
	success: function(data, status)
	{
		location.reload();
	},
	error: function(err) {
		alert(err);
	}
});
}