<?php
if(isset($_POST["login"])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$password=password_hash($pass, PASSWORD_DEFAULT);
	
	$conn = new mysqli('localhost','root','','test');
							if($conn->connect_error){
							echo "$conn->connect_error";
							die("Connection Failed : ". $conn->connect_error);
							} 
							else{
								$ret=mysqli_query($conn, "select * from registration where username='$username'");
								$result=mysqli_fetch_array($ret);
								if($result>0){
									$redirect = "profile.php";
							header("location:$redirect");
							}
							else{
								echo"Entered Username or Password is Incorrect!!!";
							}
}

}

?>