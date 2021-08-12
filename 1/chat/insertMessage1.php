<?php  
session_start();

include("db.php");
$job_id=$_POST['job_id'];
$fromUser=$_POST['fromUser'];
$toUser=$_POST['toUser'];
$message=$_POST['message'];

$output="";

echo $sql="insert into message (jobid,Fromuser,Touser,message)values('$job_id','$fromUser','$toUser','$message')";

if (mysqli_query($con,$sql)) {
	$output.="";
}
else{
	$output.="error! please try again";
}

echo $output;
?>

