<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
        $con = mysqli_connect("localhost","root","","medi_life");   // Doctor Database

        if (mysqli_connect_errno())
       {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }

      
        $conn = mysqli_connect("localhost","root","","medi_life");   // Patient Database

        if (mysqli_connect_errno())
       {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
      


  
?>