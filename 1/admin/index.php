<?php  
session_start();
Include('../db.php');

if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $pass=$_POST['pass2'];
    
    $sele="select * from admin where email='$email' and cpass='$pass' ";

    $query=mysqli_query($con,$sele);
    $count=mysqli_num_rows($query);

   echo $count;
    if ($count > 0) {
        $fet=mysqli_fetch_assoc($query);
        $emai=$fet['email'];
        $cpas=$fet['cpass'];
        echo $_SESSION['emai']= $emai;
        echo $_SESSION['pass']= $cpas;
       // echo "success";
        header('location:demo.php');
    }
    else{
        echo "fail";
    }
}

?>




<html lang="en">
<head>
    <title>Change image on select new image from file input</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>



<style type="text/css">
    
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}



</style>


</head>
<body>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="container">

<hr />




<div class="card bg-light " style="height: 480px;">
<article class="card-body mx-auto " style="width: 35%; margin-top: 5%;">
   
    <h4 class="card-title mt-3 text-center">Admin Panel</h4>
    <p class="text-center">Get started with your account</p>
  
    <p class="divider-text">
        <span class="bg-light" style="font-size: 20px;">&Omega; &#9775; &#9850; &#9851; &#9757; </span>
    </p>





<h4 class="card-title mt-3 text-center text-capitalize"></h4>




<form method="post"  enctype="multipart/form-data" >




    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" >
    </div> <!-- form-group// -->


   

 <div class="form-group input-group" >
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Repeat password" type="password" name="pass2" >
    </div>









    
    
    <input type="submit" name="submit" value="Login"  class="btn btn-primary btn-block" >
    
</form>












<!------------------------logi form start--------------------------->


<!------------------------login form end--------------------------->






</article>
</div>
</div> 




<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>


</body>
</html>

