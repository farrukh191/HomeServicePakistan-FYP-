<?php
//insert.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeserviceprovider";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT * FROM users  where id='4'";
$check=mysqli_query($conn,$sql);

while ($fet=mysqli_fetch_assoc($check)) {
	echo $fet['user']; echo "<br>";
}
?>