<!DOCTYPE html>
<html>
<head>
<title> Doctor's Sign Up Page </title>

 
 <link rel="stylesheet" type="text/css" href="first.css"> 


  <style>
    
      body{
  margin: 0;
  padding: 0;
  background-image: url(login.jpg);
  background-size: cover;
  background-position: center;
  height: 100vh;
  text-align: center;

}

.sign-up-page
{
  margin: auto;
  padding: 10% 0 0;
  width: 250px;
  height: auto;
}

.form{
  position: center;
  z-index: 1;
  max-width: 360px;
  margin: auto;
  padding: 45px;
  text-align: center;
  background: rgba(7,40, 195,0.4);
}

.form input{
  font-family: sans-serif;
  outline: 1;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;

}

.form button{
  font-family: sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;

}

.form button: hover, 
.form button: active
{
background: #43A047
}

.form .message{
  text-align: center;
  margin: 15px;
  color: aliceblue;
  font-size: 12px;
}

.form .message{
  color: #4CAF50;
  text-decoration: none;
}

.form.sign-up-form{
  display: none;
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




<?php
require('datab.php');

// If form submitted, insert values into the database.
          if (isset($_REQUEST['d_name']))
        {
       
	          $d_name = stripslashes($_REQUEST['d_name']);     // removes backslashes
	          $d_rname = mysqli_real_escape_string($con,$d_name);       //escapes special characters in a string

	          $email = stripslashes($_REQUEST['email']);
	          $email = mysqli_real_escape_string($con,$email);

	          $password = stripslashes($_REQUEST['password']);
	          $password = mysqli_real_escape_string($con,$password);

              $age = stripslashes($_REQUEST['age']);
              $age = mysqli_real_escape_string($con,$age);

              $gen = stripslashes($_REQUEST['gender']);
              $gen = mysqli_real_escape_string($con,$gen);

              $bma_id = stripslashes($_REQUEST['bma_id']);
              $bma_id = mysqli_real_escape_string($con,$bma_id);


              $speciality = stripslashes($_REQUEST['speciality']);
              $speciality = mysqli_real_escape_string($con,$speciality);

              $blood_group = stripslashes($_REQUEST['blood_group']);
              $blood_group = mysqli_real_escape_string($con,$blood_group);

              $address  = stripslashes($_REQUEST['address']);
              $address  = mysqli_real_escape_string($con,$address);


              $contact_number = stripslashes($_REQUEST['contact_number']);
              $contact_number = mysqli_real_escape_string($con,$contact_number);

              $photo = stripslashes($_REQUEST['photo']);
              $photo = mysqli_real_escape_string($con,$photo);

	            $reg_date = date("Y-m-d H:i:s");


     $sign_doc_query = "INSERT into `sign_doctor`(d_name, password, email, age, gender, bma_id, speciality, blood_group,address , contact_number, photo , reg_date)

     VALUES ('$d_name', '".md5($password)."', '$email', '$age','$gen' ,'$bma_id' ,'$speciality', '$blood_group','$address','$contact_number','{$photo}' ,'$reg_date' )";

              $result = mysqli_query($con,$sign_doc_query);

              if($result)
            {
               echo "<div class='form'>
                        <h3> Doctor,You Signed Up Successfully.</h3>
                             <br/>Click here to <a href='login.php'>Login</a></div>";
             }
               } 
                  else
                {
?>


	<h1 style="text-align:center;color:#7FFF00;">Hey Doctor!<br> Sign Up Here</h1>

<div class="Sign-up-page">

<div class ="form"> 
<form class="register-form">

<tr>
<td>Doctor Name</td>
<input type="text" name= "d_name" placeholder = "Doctor Name" required="" /> </td> 
</tr>

<tr>
<td>E-mail</td> 
<input type="text" name= "email" placeholder = "Email" required="" /> 
</tr>

<tr>
<td> Password</td> 
<input type="password" name= "password" placeholder = "Password" required="" /> 

<td>Retype Password</td>
<input type="password" name= "password" placeholder = "Retype password" required="" />
</tr>

<tr>
<td>DOB</td>
<input type="date" name= "age" placeholder = "age" required="" />  
</tr>

<tr>
<input type="radio" name= "gender" value="m"> Male </input>
<input type="radio" name= "gender" value="f">Female</input>
</tr> 
<br>

<tr>
<td>BMA ID</td> 
<input type="text" name= "bma_id" placeholder = "BMA ID " required="" />

<tr>
<td>Speciality</td>
<input type="text" name= "speciality" placeholder = "Speciality" required="" />

<tr>
<td>Blood Group</td>
<input type="text" name= "blood_group" placeholder = "Blood Group" required="" />

<tr> 
<td>Chember</td>
<input type="text" name= "address" placeholder = "Address" required="" />
</tr>

<tr>
<td>Contact number</td>
<input type="phone" name= "contact_number" placeholder="Contact Number" required=""></input>
</tr>


<tr>
<td>Choose photo</td>
<input type="file" name= "photo" required=""></input>
</tr>

<button> Sign Up </button>

<p class="message" style="color: White"> Already a registered member? <a href="login.php" style="color: white"> Log in</p>
<p class="message" style="color: White"> Not A Doctor? <a href="p_signup.php" style="color: white"> Sign Up As A Patient</p>

</form>
</div>

<?php } ?>


</body>
</html>