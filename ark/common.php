<?php
  function queryDatabase($sql){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
	$dbname = "ark";
	//$SQL ="SELECT name, alias, origin, gender, alignment FROM supers ORDER BY name";

    // Create the connection variable
    $conn = null;

    // Prepare variable that will be returned.
    $sqlResults = [];

    // Attempt to create a PDO to interact with the DBMS
    try{
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //$conn -> exec();

      $stmt = $conn -> prepare($sql);
      $stmt -> execute();

      $sqlResults = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    catch (PDOException $e){
      // If PDO fails, throw error.
      echo $sql . "<br />" . $e -> getMessage();
    }

    // Clear the connection, using "null"
    $conn = null;

    return $sqlResults;
  }
?>