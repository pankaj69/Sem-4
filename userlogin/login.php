<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h3><b><i>Login Form </i></b></h3>
	<hr class="mb-3">
<form method="post" >
	<div class="d-flex justify-content-centre">
		<b>Email</b> <input type="Email" name="email" required>
		<br>
		<b>Password</b><input type="Password" name="password" required>
		<br>
		<input type="submit" name="Login" value="Login">
	</div>
</body>
</html>

<?php
session_start();

require_once('config.php');
$username=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM user_info WHERE Email=? AND Password = ? LIMIT 1";
$stmtselect =$db->prepare($sql);
$result=$stmtselect->execute([$username,$password]);

if($result)
{
	$user=$stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0)
	{
		$_SESSION['userlogin'] = $user;
		if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
		}
	}
	else
	{
		echo 'There were no user for that combo ';
	}
}
else
{
	echo 'There were errors connecting the database ';
}

?>