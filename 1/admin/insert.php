<?php  
session_start();

include("../db.php");
if (isset($_GET['id'])) {
	echo $id= $_GET['id'];
}

echo $sql="Update provider_signup set block='Inactive' where provider_id='$id'";

if (mysqli_query($con,$sql)) {
	header('location:demo.php');
}
else{
	$output.="error! please try again";
}

echo $output;
?>

