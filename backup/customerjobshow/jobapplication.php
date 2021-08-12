<?php  
session_start();
include('../db.php');

if (isset($_GET['p_id'])) {
	
	echo $pro=$_GET['p_id'];
}

if (isset($_GET['j_id'])) {
	
	echo $job=$_GET['j_id'];
}

if (isset($_GET['c_id'])) {

	echo $cus=$_GET['c_id'];
}

$appliquery="insert into jobapplied(provider_id,customer_id,job_id,conditionApply)values('$pro','$cus','$job','Applied')";
$applicon=mysqli_query($con,$appliquery);
if ($applicon) {
	header('location:../jobshow.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hy job</h1>
<a href="../jobshow.php">back </a>
</body>
</html>