<?php  


$con=mysqli_connect("localhost","root","","homeserviceprovider");

if (!$con) {
	die("connection failed".mysql_error($con));
}

?>