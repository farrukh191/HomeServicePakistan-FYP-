<?php
//insert.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeserviceprovider";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["hidden_status"]))
{
	$status=$_POST['hidden_status'];
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET user='".$status."' where id='4'";

if ($conn->query($sql) === TRUE) {
    echo 'done';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
}
?>
