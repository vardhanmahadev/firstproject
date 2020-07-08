<html>

<head>



  <title>Log-in</title>


    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	 <link rel="stylesheet" href="css/chpasscss.css" media="screen" type="text/css" />
</head>

<body>
<div id="wrapper">

<div id="main menu" style="background-color: #276597; height: 28px; padding: 1px;">
<ul class="menu" id="menu">
<li class="has_child">
<a href="mainweb.php">Home</a></li>
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
<a href="logout.php">Logout</a></li>

</ul>

</div>
</div>

<div class="chpass-body">
<br>
<br>
<br>
<br>
  <div class="chpass-card">
    <h1>Change Password</h1><br>
   <form name = "form3" action="pcdb.php" method = "post" enctype = "multipart/form-data" onSubmit="return ValidateForm(this)">
    <input type ="password" name="currentpassword" placeholder="Current Password">
	<input type ="password" name="password" placeholder="Password">
    <input type="password" name="confirmpassword" placeholder="Confirm Password">
    <input type="submit" name="submit" class="submit" value="Change Password">
  </form>

  </div>
</div>
<script language="javaScript" type="text/javascript">
          
            // Function to check Whether both passwords 
            // is same or not. 
     function ValidateForm(f)
{				password0 = form3.currentpassword.value;
				password1 = form3.password.value; 
                password2 = form3.confirmpassword.value;
				var pass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  
				// If password not entered 
                else if (password0 == '') 
                    alert ("Please enter Current Password"); 
				
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