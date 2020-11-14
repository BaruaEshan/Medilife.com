<!DOCTYPE html>
<html>

<head>

   <title> Doctor's Profile </title>
   <link rel="stylesheet" type="text/css" href="first.css"> 

  <style>
    
    body{
      margin: 0;
     padding: 10px;
     background-image: url(doclist.jpg);
     background-size: cover;
     background-position: center;
     height: 200vh;
    text-align: right;
    padding-top: 3px;

}
  

  h1{        
             text-align: left;
             margin-top: 10px;
             margin-left: 440px;

             color :green;
             padding-left: 210px;
             padding-top: 5px;
             padding-bottom: 5px;
	         text-shadow: 2px 1px black ;
	         background-color:#FA8072 ;       
	         width : 30%;
	         opacity:0.7;

  }

  table {
                     
                     font-family: arial, sans-serif;
                     border-collapse:collapse;
                     width: 96% ;
                     color:black ;
                     padding-bottom: 5px;
                     border:10px;
                     background-color: 	#8FBC8F;
                     padding-top: 10px;

            
                   }

             th {
                      border: 5px solid #E7EFF0;
                      text-align:left;
                      padding: 8px;
	                  color: black;

					  
                    }

           tr:nth-child(even) {
                               background-color:#32CD32 ;
                               opacity: 0.80;
                              
                             }

           tr:nth-child(odd) {
                               background-color:#D6D7D7 ;
	                           opacity: 0.80;
							   
                             }
  

  </style>

</head>

   <body>

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

        <li id="firstlist"> Doctor's List </li>
         <a href="">
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
  <h1>Doctor's List</h1>



<div class="Sign-up-page">

<div class ="form"> 
<form class="register-form">

</form>
</div>




<?php
    

        require('datab.php');

        $doc_p_qry = "SELECT * FROM sign_doctor " ;

        $res = mysqli_query($con,$doc_p_qry) ;


          echo"<table align=left>
    
                   <th>NAME</th>
                   <th>EMAIL</th>          
                   <th>BMA ID</th>
                   <th>SPECIALITY</th>
   
                          </table>";

             echo"<table align=left><tr></tr>";

     while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
  {
    
       echo "<th>".$row['d_name']."</th>";  // Name
  
       echo "<th>".$row['email']."</th>";  // Email
  
       echo "<th>".$row['bma_id']."</th>";  // Gender
    
       echo "<th>".$row['speciality']."</th>";  // Speciality
    
             echo"</tr>";                                                           
      }

            echo"</table>";

     mysqli_free_result($res);
     mysqli_close($con);


?>


</body>
</html>