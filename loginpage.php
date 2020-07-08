<html>

<head>



  <title>Log-in</title>


    <link rel="stylesheet" href="css/logincss.css" media="screen" type="text/css" />
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

<div class="login-body">
<br>
<br><br><br>
  <div class="login-card">
    <h1>Log-in</h1><br>
<form name = "form2" action="logindb.php" method = "post" enctype = "multipart/form-data" onSubmit="return ValidateForm(this) ">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login" value="login">
  </form>

  <div class="login-help">
    <a href="index.php"><b>Register</b></a> • <a href="#"><b>Forgot Password</b></a>
  </div>
</div>
</div>
<script language="javaScript" type="text/javascript">
          
            // Function to check Whether both passwords 
            // is same or not. 
     function ValidateForm(f)
{				
				username= form2.username.value;
				password = form2.password.value; 
                	
				// If Username not entered
				if (username == '') 
                    alert ("Please enter Username");
				
                // If password not entered 
                else if (password == '') 
                    alert ("Please enter Password"); 
                
                }
       

 </script>


</body>

</html>