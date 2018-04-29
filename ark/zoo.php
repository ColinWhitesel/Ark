<?php include("top.html"); ?>

<?php
require("common.php");
$sql = "SELECT name From supers ORDER BY name";
$array = queryDatabase($sql)
?>
<script type="text/javascript">var jArray =<?php echo json_encode($array); ?>;</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="javascript/zoo.js" type="text/javascript"></script>

	<div id="infopane">
		<p> Name: <span id="name"> </span></p>
		<p> Alias: <span id="alias"> </span></p>
		<p> Origin: <span id="origin"> </span></p>
		<p> Gender: <span id="gender"> </span></p>
		<p> Alignment: <span id="alignment"> </span></p>
	</div>

	<canvas id="zoopane">

	</canvas>
	

<?php include("bottom.html"); ?>