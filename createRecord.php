<?php
   $data = file_get_contents("php://input");
   var_dump($data);
   $data = json_decode($data, true);
   var_dump($data);
   $serverName = "localhost";
   $userName = "root";/* Naam van de user */
   $password = "";/* Naam van het password */
   $databaseName = "angularcrud";/* Naam van de database */

   $conn = mysqli_connect($serverName, $userName, $password, $databaseName) or die("Database is niet werkzaam");

   $query = "INSERT INTO `users` (`id`,
                                  `firstname`,
                                  `infix`,
                                  `lastname`,
                                  `haircolor`)
                     VALUES       (NULL,
                                   '" . $data["firstname"] ."', 
                                   '" . $data["infix"] ."', 
                                   '" . $data["lastname"] ."', 
                                   '" . $data["haircolor"] ."')";

   $result = mysqli_query($conn, $query);

   echo "succes";
?>