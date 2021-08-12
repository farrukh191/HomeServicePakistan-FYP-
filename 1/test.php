<?PHP
    include('db.php');


    $seel="SELECT * FROM reporting GROUP BY provider_id HAVING COUNT(*) >= 1";
    $quwery=mysqli_query($con,$seel);
    echo mysqli_num_rows($quwery); echo "<br>";
    while ($fet=mysqli_fetch_assoc($quwery)) {
echo  $th = $fet['provider_id']; echo "<br>";    
$sel=mysqli_query($con,"select * from reporting where provider_id='$th'");
echo mysqli_num_rows($sel); echo "<br>";

      
    }
?>

