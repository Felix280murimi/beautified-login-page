<?php

$host="localhost";
$user="root";
$password="";
$db="logindb";

mysql_connect($host,$username,$password);
mysql_select_db($bd);

if (isset($_POST['username'])) {
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select*from login where username ='".$uname."'AND password='".$password."' limit 1";

	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
		echo " You hae Succesfully logged in";
		exit();
	}
	else{
		echo " You have entered in corred password";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in Form Design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginbox">
		<img src="login.png" class="login">
		<h1>Log in</h1>
		<form method="POST" action="#">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password">
			<a href="index2.html"><input type="Submit"  name="Submit"  value="Log in"></a> 
			<a href="changepassword.html">Forgot Your Password?</a> 
			<a href="sign up.html">Don't Have an Account?</a>
			<a href="changepassword2.html">Change Password?</a>
		</form>
	</div>

</body>
</html>