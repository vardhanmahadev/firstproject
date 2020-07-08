<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Teacher's Register/Log-in</title>


    <link rel="stylesheet" href="css/registercss.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>
<div id="wrapper">

<div id="main menu" style="background-color: #276597; height: 28px; padding: 1px;">
<ul class="menu" id="menu">
<li class="has_child">
<a href ="#">Institute</a>
<ul style="display:none;">
<li><a class="menuitem" href="#">Chairman</a></li>
<li><a class="menuitem" href="#">Secretary</a></li>
<li><a class="menuitem" href="#">Director</a></li>
<li><a class="menuitem" href="#">Principal</a></li>
<li><a class="menuitem" href="#">Administration</a></li>
<li><a class="menuitem" href="#">Facilities</a></li>
</ul>
</li>
<li class="has_child">
<a href="#">Academics</a>
<ul style="display:none;">
<li><a class="menuitem" href="#">Programmes</a></li>
<li><a class="menuitem" href="#">Offered Courses</a></li>
<li><a class="menuitem" href="#">Academic Curriculum</a></li>
<li><a class="menuitem" href="#">Calender</a></li>
<li><a class="menuitem" href="#">Admissions</a></li>
<li><a class="menuitem" href="#">Academic Facilities</a></li>
<li><a class="menuitem" href="#">Central Library</a></li>
<li><a class="menuitem" href="#">Conferences/Seminars</a></li>
</ul>
</li>
<li class="has_child">
<a href="#">Examinations</a>
<ul style="display:none;">
<li><a class="menuitem" href="#">Examination Branch</a></li>
<li><a class="menuitem" href="#">Student Verification</a></li>
<li><a class="menuitem" href="#">Exam Results</a></li>
<li><a class="menuitem" href="#">Exam Notice Board</a></li>
<li><a class="menuitem" href="#">Exam Time-Tables</a></li>
</ul>
</li>
<li class="has_child">
<a href="#">Departments</a>
<ul style="display:none;">
<li><a class="menuitem" href="#">CIVIL</a></li>
<li><a class="menuitem" href="#">MECHANICAL</a></li>
<li><a class="menuitem" href="#">EEE</a></li>
<li><a class="menuitem" href="#">ECE</a></li>
<li><a class="menuitem" href="#">CSE</a></li>
<li><a class="menuitem" href="#">HS</a></li>
<li><a class="menuitem" href="#">MCA</a></li>
<li><a class="menuitem" href="#">MBA</a></li>
</ul>
</li>
<li class="has_child">
<a href="#">Gallery</a>
<ul style="display:none;">
<li><a class="menuitem" href="#">Photo Gallery</a></li>
</ul>
</li>
<li class="has_child">
<a href="#">Developments</a>
<ul style="display:none;">
<li><a class="menuitem" href="#">Resource Development Cell</a></li>
<li><a class="menuitem" href="#">Virtual Labs</a></li>
</ul>
</li>
<li class="has_child">
<a href="#">Placements</a></li>
<li class="has_child">
<a href="loginpage.php">Login/Register</a>
</li>
</ul>
</div>
</div>
<br>
<br>
<div class="register-body">
  <div class="register-card">
    <h1>Register/Log-In</h1><br>
  <form name = "form1" action="database.php" method = "post" enctype = "multipart/form-data" onSubmit="return ValidateForm(this)">

				<div class= "form_group">
				<label>First Name:</label>    
                    <input type = "text" name = "firstname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lastname" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>User Name:</label>    
                    <input type = "email" name = "username" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "password" value = "" required/>    
                </div>
				<div class = "form_group">    
                    <label>Confirm Password:</label>    
                    <input type = "password" name = "confirmpassword" value = "" required/>    
                </div>
	<input type="submit" name="signup" class="signup" value="signup">
  </form>

  <div class="register-help">
    <a href="loginpage.php"><b>Log-In</b></a> • <a href="#"><b>Forgot Password</b></a>
  </div>
</div>
</div>

<script language="javaScript" type="text/javascript">
          
            // Function to check Whether both passwords 
            // is same or not. 
     function ValidateForm(f)
{				firstname= form1.firstname.value;
				lastname= form1.lastname.value;
				username= form1.username.value;
				password1 = form1.password.value; 
                password2 = form1.confirmpassword.value;
				var pass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  
				// If First Name not entered
				if (firstname == '') 
                    alert ("Please enter Firstname");
					
				// if Last Name not entered
				else if (lastname == '') 
                    alert ("Please enter Last Name");				
					
				// If Username not entered
				else if (username == '') 
                    alert ("Please enter Username");
				
                // If password not entered 
                else if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1.value.match(pass)) {
					if(password1 == password2){
                    return true; 
					}
					else {
					alert (" Your passwords didn't match and check whether entered password contains atleast on uppercase character, one lower case character, one special character and length range from 6 to 20 charcters"; 
					}
                }
       }

 </script>

</body>

</html>