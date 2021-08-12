<?php  
session_start();
include('db.php');

if (isset($_GET['prid'])) {
	echo $prid = $_GET['prid']; echo "<br>";
}
echo $cid=$_SESSION['CcustomerId']; echo "<br>";
echo $jobid=$_SESSION['customerjobid'];


echo $insert="insert into jobconfirmed(job_id,cust_id,prov_id,confirmed)values('$jobid','$cid','$prid','confirmed')";
$insertquery=mysqli_query($con,$insert);
if ($insertquery) {
	header('location:clientApplied.php?jobid='.$jobid);
	
}
else{
	echo "data is not passing";
}
?>