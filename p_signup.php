<!DOCTYPE html>
<html>

<head>

   <title> Patient's Sign Up Page </title>
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

          if (isset($_REQUEST['p_name']))
        {
       
	          $p_name = stripslashes($_REQUEST['p_name']);     // removes backslashes
	          $p_name = mysqli_real_escape_string($conn,$p_name);       //escapes special characters in a string

	          $password = stripslashes($_REQUEST['password']);
	          $password = mysqli_real_escape_string($conn,$password);

	          $email = stripslashes($_REQUEST['email']);
	          $email = mysqli_real_escape_string($conn,$email);

	          $age = stripslashes($_REQUEST['age']);
              $age = mysqli_real_escape_string($conn,$age);

              $gender = stripslashes($_REQUEST['gender']);
              $gender = mysqli_real_escape_string($conn,$gender);

              $blood_group = stripslashes($_REQUEST['blood_group']);
              $blood_group = mysqli_real_escape_string($conn,$blood_group);

              $address  = stripslashes($_REQUEST['address']);
              $address  = mysqli_real_escape_string($conn,$address);


               $contact_number = stripslashes($_REQUEST['contact_number']);
              $contact_number = mysqli_real_escape_string($conn,$contact_number);

              $photo = stripslashes($_REQUEST['photo']);
              $photo = mysqli_real_escape_string($conn,$photo);

	            $reg_date = date("Y-m-d H:i:s");


      $sign_p_qry = "INSERT into `sign_patient`(p_name,password,email,age,gender,blood_group,address,contact_number,photo,reg_date)

VALUES ('$p_name','".md5($password)."','$email','$age','$gender','$blood_group','$address','$contact_number','{$photo}','$reg_date')";


              $resu = mysqli_query($conn,$sign_p_qry);

              if($resu)
            {
               echo "<div class='form'>
               
                        <h3> Patient,You Signed Up Successfully.</h3>
                             <br/>Click here to <a href='login.php'>Login</a></div>";
             }
               } 
                  else
                {
?>

	<h1 style="text-align: center;color:red;">Hey Patient!<br> Sign Up Here</h1>

<div class="Sign-up-page">

<div class ="form"> 
<form class="register-form">

<tr>
<td>Patient Name</td>
<input type="text" name= "p_name" placeholder = "Patient Name" required="" /> </td> 
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
<td>Blood Group</td>
<input type="text" name= "blood_group" placeholder = "Blood Group" required="" />

<tr> 
<td>Address</td>
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
<p class="message" style="color: White"> Not A Patient? <a href="docsignup.php" style="color: white"> Sign Up As A Doctor</p>

</form>
</div>

<?php } ?>


</body>
</html>