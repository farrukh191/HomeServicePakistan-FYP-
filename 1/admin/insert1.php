<?php  
session_start();

include("../db.php");
if (isset($_GET['id1'])) {
	echo $id= $_GET['id1'];
}

echo $sql="Update provider_signup set block='Active' where provider_id='$id'";

if (mysqli_query($con,$sql)) {
	header('location:demo.php');
}
else{
	$output.="error! please try again";
}

echo $output;
?>

