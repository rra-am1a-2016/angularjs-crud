<?php
   var_dump($_POST);
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
                                   'Fred', 
                                   'van', 
                                   'Harmelen', 
                                   'yellow')";

   $result = mysqli_query($conn, $query);

   echo "succes";
?>