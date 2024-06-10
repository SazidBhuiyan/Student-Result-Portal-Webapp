<?php

// Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "result_portal";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Sorry we failed to connect to the database : ".$database. mysqli_connect_error());
      }
      else{ 
        
        echo"Databasae is connected Successfully";
      }

?>