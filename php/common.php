<?php
/*
  CS 270 - Group Project
  ARK (Animal Record Keeper)
  Trevor D. Brown, Jamie Thomas, Colin Whitesel, and Brian Bulka

  common.php - common functions for all php pages of the project.
*/

 // PDOCall($database, $SQLStatement) - offers a convenient way for PDO calls to be made to the database
 function PDOCall($database, $SQLStatement){
   // Prepare PDO
   // MySQL Connection Information
   $host = 'localhost';
   $username = 'root';
   $password = '';

   // Create the connection variable
   $connection = null;

   // Use Database SQL
   $UseDatabaseSQL = "USE ark";

   // Prepare variable that will be returned.
   $response_data = [];

   // Attempt to create a PDO to interact with the DBMS
   try{
     $connection = new PDO("mysql:host=$server;", $username, $password);
     $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $connection -> exec($UseDatabaseSQL);

     $query = $connection -> prepare($SQLStatement);
     $query -> execute();

     while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
       foreach ($row as $value){
         array_push($response_data, $value);
       }
     }
   }
   catch (PDOException $e){
     // If PDO fails, throw error.
     echo $sql . "<br />" . $e -> getMessage();
   }

   // Clear the connection, using "null"
   $connection = null;

   return $response_data;
 }

 // SendJSON($data) - provides a convenient way for JSON responses to be sent to the frontend.
 function SendJSON($data){
   // Send the data back to frontend, via JSON.
   header('Content-Type: application/json');
   echo json_encode($data);
 }

?>
