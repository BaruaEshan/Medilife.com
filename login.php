<!DOCTYPE html>
<html>
<head>

<style>
     
                input{
                      text-align: left;
	                  color:black;
	                  background-color:white ;
                      border: 4px solid #66c2ff;
	                  width : 22%;
	                  opacity: 0.9;

	                 }

               
              h3{

              	 color:red;
              }

             
        </style>
		
    </head>


<title> Login Page </title>
<link rel="stylesheet" type="text/css" href="Lstyle.css">
<link rel="stylesheet" type="text/css" href="first.css">
</head>

<body>

<?php
        require('datab.php');
           session_start();
                                // If form submitted, insert values into the database.
           if (isset($_POST['d_name']))
          {
	                     $username = stripslashes($_REQUEST['d_name']);  // removes backslashes
	                     $username = mysqli_real_escape_string($con,$d_name);  //escapes special characters in a string

	                     $password = stripslashes($_REQUEST['password']);
	                     $password = mysqli_real_escape_string($con,$password);   //Checking is user existing in the database or not
	                                   
               $qr = "SELECT d_name,password FROM `sign_doctor` WHERE d_name='$d_name'and password='".md5($password)."'";

	                        $result = mysqli_query($con,$qr) ;
	                      //  $rows = mysqli_num_rows($result);
	                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                             if($rows==2)
                            {
	                             $_SESSION['d_name'] = $d_name;
                                                                         // Redirect user to index.php
	                              header("Location:index.php");
                             }

                               else
                             {
	                            echo "
                                        <h3>Doctor Username/Password is Incorrect.</h3>
                                            <br/>Click Here to <a href='login.php'>Login</a></div>";
	                         }

               }



              if (isset($_POST['p_name']))
          {
	                     $username = stripslashes($_REQUEST['p_name']);  // removes backslashes
	                     $username = mysqli_real_escape_string($conn,$p_name);  //escapes special characters in a string

	                     $password = stripslashes($_REQUEST['password']);
	                     $password = mysqli_real_escape_string($conn,$password);   //Checking is user existing in the database or not
	                                   
               $qry = "SELECT * FROM `sign_patient` WHERE p_name='$p_name'and password='".md5($password)."'";

	                        $resu = mysqli_query($conn,$qry) or die(mysql_error());
	                        $rows = mysqli_num_rows($resu);

                             if($rows==2)
                            {
	                             $_SESSION['p_name'] = $p_name;
                                                                         // Redirect user to index.php
	                             header("Location:index.php");
                             }

                               else
                             {
	                            echo "<div class='form'>
                                        <h3>Patient Username/Password is Incorrect.</h3>
                                            <br/>Click Here to <a href='login.php'>Login</a></div>";
	                         }

               }
             




       else
      {
?>

    <div class="menu">


     <div class="leftmenu">
        
        <a href="first.html">
           <h4> MediLife.Com </h4>
        </a>

      </div>


    <div class= "rightmenu">
      <ul>
        
        <a href="first.html">
          <li> Home </li>
        </a>

        
        <a href="doclist.php">
          <li> Doctor's List </li>
        </a>
        
        <a href="medizone.html">
          <li> MediZone </li>
        </a>

        <a href="ambulance.html">
          <li> Call An Ambulance </li>
        </a>

        <a href="bloodbank.html">
          <li> Blood Bank </li>
        </a>
         
         
         <a href="contactus.html">
          <li> Contact / Ask Question </li>
        </a>


        <a href="aboutus.html">
          <li> About Us </li>
        </a>
        

      </ul>
    </div>



  </div>

	
	<h1 style="text-align: center;color : #ffb3ec ">Log In Here</h1>
    
<div class="Login-page">

<form class = "login-form">

<input type="text" name= "d_name" placeholder = "User Name" />

<input type="password" name= "password" placeholder= "Password"/>
<button> Log In</br> </button>
    <p class="message"> Not Registered? <a href="#" style="color: white"></p>
 	<p class="message"><a href="docsignup.php" style="color: #00e600"> Sign Up as a Doctor </p>
 	<p class="message"><a href="p_signup.php" style="color: #ff9999"> Sign Up as a Patient </p>
</form>
</div>


<?php } ?>
</body>
</html>