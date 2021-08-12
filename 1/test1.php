<?php  
    session_start();
    include('db.php');
    echo $cemail=$_SESSION['cemail'];
    echo $cpass=$_SESSION['cpassword']; echo "<br>";
    echo $cid=$_SESSION['CcustomerId']; echo "<br>";
    if (!$cpass) {
    header('location:login.php?Access Denied..');
}
if (isset($_GET['jobid'])) {
    echo $jobid1 = $_GET['jobid'];

    $_SESSION['customerjobid']=$jobid1;
}

?>






<!DOCTYPE html>
<html>
<head>
    <link href='jobapplied/style.css' rel='stylesheet' type='text/css'>
    <link href='jobapplied/style1.css' rel='stylesheet' type='text/css'>
<script src="jobapplied/jquery.min.js"></script>



<style type="text/css">
    





</style>


</head>
<body>

    


    
<?php   include('customerAssets/navbar.php'); ?>

<!-- <div style="margin-top: -10%;">
    <?php  // include('customerAssets/header.php') ?>
</div> -->

<!-- <div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"> section title -->
        <!--    <h4 class="white">see your jobs</h4>
        </div> --><!-- section title end -->
<!--================================PAGE TITLE==========================================-->
        



<?php include('footer.php'); ?>

</body>
</html>

