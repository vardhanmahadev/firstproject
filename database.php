<?php
session_start();
if(isset($_POST['signup'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$password=password_hash($pass, PASSWORD_DEFAULT);
	$cpass = $_POST['confirmpassword'];
	$confirmpassword=password_hash($cpass, PASSWORD_DEFAULT);
	
	
	// Database validation
	if(preg_match("/^[ a-zA-Z ]*$/",$firstname)){
		if(preg_match("/^[ a-zA-Z ]*$/",$lastname)){
			$username = filter_var($username, FILTER_VALIDATE_EMAIL); 
				if($username==true){
					if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$pass)){
						if($pass==$cpass){
						// Database connection
							$conn = new mysqli('localhost','root','','test');
							if($conn->connect_error){
							echo "$conn->connect_error";
							die("Connection Failed : ". $conn->connect_error);
							} 
							else{
								$ret=mysqli_query($conn, "select * from registration where username='$username'");
								$result=mysqli_fetch_array($ret);
								if($result>0){
									echo " username already exists. try with another username";
							}
							else{
							mysqli_query($conn,"INSERT INTO `registration` (`ID`, `firstname`, `lastname`, `username`, `password`, `confirmpassword`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$confirmpassword');");
							session_start();
							$redirect = "profile.php";
							header("location:$redirect");
							if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['username'] = $_POST['username'];
        
        if($_SESSION['name']) {
            header('location:pcdb.php');
        }
    }
							exit();
							}
							}
					}
							else{	
								echo "your passwords don't match";
							}
					}
					else{
						echo " your password must contain atleast one capital letter, one small letter, one special character and lenght range from 6 to 20 characters";
					}
		
					}	
						else{							
							exit("email is not valid");
						}					
		}
			else{
				exit(" Last Name not valid");
		}
	}
		else{
			exit(" First Name not valid");
	}
	
}
?>