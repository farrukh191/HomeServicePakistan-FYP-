<?php session_start(); ?>
<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>


  
    <?php include("homeAssets/navbar1.php"); ?>

    <div class="main">

        <!-- Sign up form -->





<?php 

if (isset($_POST['signin'])) {
    $emailid=$_POST['emailid'];
    $password=$_POST['pass'];

    $match="select * from customer_signup where email='$emailid' and password='$password' ";
    $matchquery=mysqli_query($con,$match);

    $fetc=mysqli_fetch_assoc($matchquery);
    
    
     $_SESSION['picture']=$fetc['file'];
     $_SESSION['cemail']=$fetc['email'];
     $_SESSION['cpassword']=$fetc['password'];
     $_SESSION['CcustomerId']=$fetc['customer_id'];
      $_SESSION['cfirst']=$fetc['first_name'];
     $_SESSION['clast']=$fetc['last_name'];

     
    

    echo $count=mysqli_num_rows($matchquery);
    
    if ($count > 0) {
        
        ?>
        <script type="text/javascript">
                    window.open('customerdashboard.php','_self');
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
                    window.open('login.php','_self');
                    //window.alert('data is not match');
        </script>
        <?php
    }
} 
?>




     

        <!-- Sign in  Form -->
        <section class="sign-in" style="margin-top: -20%;">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="customer_signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login Page</h2>
                        <form method="POST" enctype="multipart/form-data" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="emailid" id="your_name" placeholder="Email Id"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">If you have no account</span>
                             <a style="color: dodgerblue;" href="contact.php">create Account</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

<div style="margin-bottom: 0;">
	<?php include('footer.php'); ?>
</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>