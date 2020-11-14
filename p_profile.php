<!DOCTYPE html>
<html>

<head>

   <title> Patient's Profile </title>
   <link rel="stylesheet" type="text/css" href="first.css"> 

  <style>
    
  body{
  margin: 0;
  padding: 0;
  background-image: url(p_profile.jpg);
  background-size: cover;
  background-position: center;
  height: 200vh;
  text-align: right;
  padding-top: 5px;

}

  table {
                       
                     font-family: arial, sans-serif;
                     border-collapse:collapse;
                     width:20%;
                     color:black ;
                     padding-bottom: 5px;
                     border:10px;
                     background-color:  #8FBC8F;
                     padding-top: 10px;
            
                   }

                   td, th{
                      border: 3px solid #E7EFF0;
                      text-align: left;
                      padding: 10px;
                      color: black;
            
                    }

 input{     
            
             
            text-align: right;
            padding:10px;
            margin: 15px;
            margin-right: 1250px;
            margin-top: 1px;
            font-size: 15px;
            

       }


 select{  

            text-align: right;
            padding:15px;
            margin: 5px;
            margin-right: 1300px;
            margin-top: 0;



  }
  h1{        
             text-align: left;
             margin-top: 5px;
             margin-left: 10px;

             color :green;
             padding-left: 230px;
             padding-top: 5px;
             padding-bottom: 5px;
           text-shadow: 2px 1px black ;
           background-color:#e6ffff ;       
           width : 33%;
           opacity:0.7;

  }

  
 
 h3{

             text-align:right;
              margin-top: 5px;
              margin-right: 1000px;
              color:white;
              padding-left: 1100px;
             padding-top: 5px;
             padding-bottom: 5px;
           text-shadow: 1px 1px white ;
           font-size: 25px;   
           width : 25%;
           opacity:0.9;

   

 }


h4{


             text-align:right;
             margin-top: 5px;
             margin-right:1110px;
             color:red;
             padding-left: 1110px;
             padding-top: 5px;
             padding-bottom: 2px;
             text-shadow: 1px 1px white ;
             font-size: 30px;   
             width : 25%;
             opacity:0.9;
   

 
}


  </style>

</head>

   <body>

  <div class="menu">

     <div class="leftmenu">
        
        <a >
           <h4> MediLife.Com </h4>
        </a>

      </div>


    <div class= "rightmenu">
      <ul>
        
      
        
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


       <a href="first.html"> 
          <li> Logout </li> 
        </a>



      </ul>
    </div>


  </div>
  <h1>Patient Profile</h1>



<h3>Choose Doctor's Category :


 <select name="specialist">
     <option value="medicine">Medicine</option>
     <option value="surgeon">Surgeon</option>
     <option value="dental">Dental</option>
     <option value="gynaecology">Gynaecology</option>
   </select>
  <br>

</h3>

<h4>Choose Apointment Date 

   <input type="date" name="appoint">
  </select>
   <input type="submit" value="Complete">

 </h4>



<?php

       require('datab.php');

          $p_qry = "SELECT * FROM sign_patient " ;

          $result = mysqli_query($conn,$p_qry) ;


     echo"<table align=left><tr>
         <th>ID NO :</th></tr>

    <tr><th>NAME :</th></tr>
    <tr><th>EMAIL :</th></tr>           

  
    <tr><th>DOB :</th></tr> 
    <tr><th>GENDER :</th></tr>
    <tr><th>BLOOD GROUP :</th></tr>
    
    <tr><th>CONTACT NUMBER :</th></tr>

    
    <tr><th>PHOTO :</th></tr>
    <tr><th>JOINED :</th></tr>
    
    </tr>
  </table>";

  echo"<table align=left><tr>";

     while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
   
    echo "<tr>";
       echo "<td>" . $row['p_id'] . "</td>";    // ID 

    echo "</tr>";
   

    echo "<tr>";
       echo "<td>" . $row['p_name'] . "</td>";  // Name
    echo "</tr>";
   


     echo "<tr>";
       echo "<td>" . $row['email'] . "</td>";  // Email
    echo "</tr>";



    echo "<tr>";
       echo "<td>" . $row['age'] . "</td>";  // Age
    echo "</tr>";



   echo "<tr>";
       echo "<td>" . $row['gender'] . "</td>";  // Gender
    echo "</tr>";

   echo "<tr>";
       echo "<td>" . $row['blood_group'] . "</td>";  // BG
    echo "</tr>";


    echo "<tr>";
       echo "<td>" . $row['contact_number'] . "</td>";  // Contact
    echo "</tr>";
    

    echo "<tr>";
       echo "<td>" . $row['photo'] . "</td>";  // Gender
    echo "</tr>";


     echo "<tr>";
       echo "<td>" . $row['reg_date'] . "</td>";  // Gender
    echo "</tr>";



                                                                        
      }
echo"</table>";

     mysqli_free_result($result);
     mysqli_close($conn);


?>




<div class="Sign-up-page">

<div class ="form"> 
<form class="register-form">





</form>
</div>




</body>
</html>