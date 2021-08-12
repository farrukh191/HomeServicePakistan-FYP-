<?php  
session_start();
include('db.php');

	 $_SESSION['email'];
     $pas=$_SESSION['password'];
if (!$pas) {
	header('location:ClientLogin.php?Access Denied..');
}


?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<a href="providerLogout.php">logout</a>
</body>
</html>