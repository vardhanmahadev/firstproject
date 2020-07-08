<? session_start();

if(isset($_post["submit"])){
	$cupass = $_POST['currentpassword'];
	$currentpassword=password_hash($cupass, PASSWORD_DEFAULT);
	$pass = $_POST['password'];
	$password=password_hash($pass, PASSWORD_DEFAULT);
	$cpass = $_POST['confirmpassword'];
	$confirmpassword=password_hash($cpass, PASSWORD_DEFAULT);
	$conn = mysql_connect("localhost", "root", "","test");
	$ret=mysqli_query($conn, "select * from registration where password='$currentpassword'");
								$result=mysqli_fetch_array($ret);
								if($result>0){
	if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$pass)){
						if($pass==$cpass){
							$db = mysql_connect("localhost", "root", "","test");
	$chan=mysqli_query($conn,"UPDATE registration set password='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["username"] . "'");
	echo "Your Password has been updated successfully.";
}
	}
								}
}

?>