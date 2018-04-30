<?php
	echo "<button type=\"button\" onclick=\"update(" . $usersAnimals[$i]['id'] . ")\">Update</button>";
    echo '<script>
        "use strict";

        function update(animalID)
        {
            $.ajax({
            type: "POST",
            url: "http://localhost/editAnimal.php",
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
    </script>';
?>
