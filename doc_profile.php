<!DOCTYPE html>
<html>

<head>

   <title> Doctor's Profile </title>
   <link rel="stylesheet" type="text/css" href="first.css"> 

  <style>
    
    body{
   margin: 0;
   padding: 0;
   background-image: url(doc_profile.jpg);
   background-size: cover;
   background-position: center;
   height: 200vh;
   text-align: right;
   padding-top: 5px;

}
  
input{     
            
             
            text-align: left;
            padding:10px;
            margin: 15px;
            margin-right: 1263px;
            margin-top: 1px;
            font-size: 15px;
            

       }


  h1{        
             text-align: left;
             margin-top: 5px;
             margin-left: 710px;

             color :green;
             padding-left: 230px;
             padding-top: 5px;
             padding-bottom: 5px;
	         text-shadow: 2px 1px black ;
	         background-color:#e6ffff ;       
	         width : 33%;
	         opacity:0.7;

  }

  table {
                       
                     font-family: arial, sans-serif;
                     border-collapse:collapse;
                     width:20%;
                     color:black ;
                     padding-bottom: 5px;
                     border:10px;
                     background-color: 	#8FBC8F;
                     padding-top: 10px;
            
                   }

                   td, th{
                      border: 3px solid #E7EFF0;
                      text-align: left;
                      padding: 10px;
                      color: black;
            
                    }
  

   h2{        
             text-align: left;
             margin-top: 10px;
             margin-right: 400px;

             color:black;
             padding-left: 50px;
             padding-top: 5px;
             padding-bottom: 5px;
	         text-shadow: 2px 1px white ;
	         background-color:#ff00ff ;       
	         width : 20%;
	         opacity:0.7;


  }
 select{  

            text-align: left;
            padding:15px;
            margin: 5px;
            margin-right: 1300px;
            margin-top: 0;



  }
 
 h3{

             text-align: left;
             margin-top: 5px;
             margin-right: 550px;
             color:#7CFC00;
             padding-left: 25px;
             padding-top: 5px;
             padding-bottom: 5px;
	         text-shadow: 1px 1px white ;
	         font-size: 25px;   
	         width : 25%;
	         opacity:0.9;

   

 }


h4{


             text-align: left;
             margin-top: 5px;
             margin-right: 500px;
             color:#FFA500;
             padding-left: 25px;
             padding-top: 5px;
             padding-bottom: 2px;
	         text-shadow: 1px 1px white ;
	         font-size: 25px;   
	         width : 25%;
	         opacity:0.9;
   

 
}





  </style>

</head>

   <body>
    <img src="doc_profile.php"/>

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
  <h1>Doctor's Profile</h1>



<div class="Sign-up-page">

<div class ="form"> 
<form class="register-form">

<h2>Search Your Patient </h2>


<h3>Choose Patient's Category


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


</form>
</div>



<?php
    


      require('datab.php');

        $doc_p_qry = "SELECT * FROM sign_doctor " ;

        $res = mysqli_query($con,$doc_p_qry) ;


    echo"    <table align=right><tr>
    <th>ID NO</th></tr>

    <tr><th>NAME</th></tr>
    <tr><th>EMAIL</th></tr>           

  
    <tr><th>DOB</th></tr> 
    <tr><th>GENDER</th></tr>
    <tr><th>BLOOD GROUP</th></tr>
    
    <tr><th>CONTACT NUMBER</th></tr>

    
    <tr><th>BMA ID</th></tr>
    <tr><th>SPECIALITY</th></tr>
    
    
    <tr><th>PHOTO</th></tr>
    <tr><th>JOINED</th></tr>
    
    </tr>
  </table>";

echo"<table align=right><tr>";
     while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
  {
   
    echo "<tr>";
       echo "<td>" . $row['did'] . "</td>";    // ID 

    echo "</tr>";
   

    echo "<tr>";
       echo "<td>" . $row['d_name'] . "</td>";  // Name
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
       echo "<td>" . $row['bma_id'] . "</td>";  // Gender
    echo "</tr>";

    
     echo "<tr>";
       echo "<td>" . $row['speciality'] . "</td>";  // Gender
    echo "</tr>";

    

    echo "<tr>";
       echo "<td>" . $row['photo'] . "</td>";  // Gender
    echo "</tr>";


     echo "<tr>";
       echo "<td>" . $row['reg_date'] . "</td>";  // Gender
    echo "</tr>";


   

     /* echo "<tr><th></th></tr>" ;
                 echo $row["did"] ;
      echo " " ;
                  echo $row["d_name"];   


      echo " " ;
      echo $row["email"];   */



                                                                        
      }
echo"</table>";

     mysqli_free_result($res);
     mysqli_close($con);


?>



</body>
</html>