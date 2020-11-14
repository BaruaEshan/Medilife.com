<?php

        session_start();

        if(!isset($_SESSION["d_name"]))
      {
                  header("Location: login.php");
                  exit();
      }


   
       session_start();

        if(!isset($_SESSION["p_name"]))
      {
                  header("Location: login.php");
                  exit();
      }



?>