<?php 
session_start();
include('db.php'); 
?>


<?php 
$message = '';
if (isset($_POST['signin'])) {
	$password=$_POST['pass'];
	$email=$_POST['emailid'];

    $match="select * from customer_signup where email='$email' and password='$password' ";
	$matchquery=mysqli_query($con,$match);

	$fetc=mysqli_fetch_assoc($matchquery);
	
	


	$count=mysqli_num_rows($matchquery);
	
	if ($count > 0) {
		$ban=$fetc['block'];
		//header('location:login.php');
	
$message="";
	
	 $message="";
	
	  $_SESSION['picture']=$fetc['file'];
     $_SESSION['cemail']=$fetc['email'];
     $_SESSION['cpassword']=$fetc['password'];
     $_SESSION['CcustomerId']=$fetc['customer_id'];
      $_SESSION['cfirst']=$fetc['first_name'];
     $_SESSION['clast']=$fetc['last_name'];
?>
	 	<script type="text/javascript">
	  				window.open('customerdashboard.php','_self');
	  	</script>
	 	<?php
	

	}
	
	else{
		?>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        	<script>
					$(document).ready(function(){
					$("#myModal").modal('show');
				});
			</script>
	<?php
	}
} 
?>
<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->

    <link rel="stylesheet" href="css/style2.css">




			<style type="text/css">
	.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: dodgerblue;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: dodgerblue;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: dodgerblue;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}

	.main{
width: 100% !important;
margin-top: -6% !important;
margin-bottom: 4%;
		}
.register{
  line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 900;
  color: #fff;
  font-family: 'Poppins';
  font-size: 26px;
  text-transform: uppercase;
  margin-bottom: 10px; 
}

.while{
 line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 700;
  color: #fff;
  font-family: 'Poppins';
  font-size: 12px;
  text-transform: uppercase;
  margin-bottom: 10px;
}
label.required {
    position: relative !important;
}
label, .lo {
    font-weight: bold !important;
    text-transform: uppercase !important;
    margin-bottom: 7px !important;
    font-size: 14px !important;
}
label, input {
    display: block !important;
    width: 100% !important;
}
form-submit {
  text-align: right; }

.submit {
  width: 150px !important;
  height: 50px !important;
  display: inline-block !important;
  font-family: 'Poppins' !important;
  font-weight: bold !important;
  font-size: 14px !important;
  padding: 10px !important;
  border: none !important;
  cursor: pointer !important;
  text-transform: uppercase !important;
  border-radius: 5px !important;
  -moz-border-radius: 5px !important;
  -webkit-border-radius: 5px !important;
  -o-border-radius: 5px !important;
  -ms-border-radius: 5px !important; 
}

#reset {
  background: #fff;
  color: #999;
  border: 2px solid #ebebeb; }
  #reset:hover {
    border: 2px solid #329e5e;
    background: #329e5e;
    color: #fff; }

#submit {
  background: #329e5e;
  color: #fff;
  margin-right: 25px; }
  #submit:hover {
    background-color: #267747; }
    .form-input, .form-select {
  margin-bottom: 23px !important; 

}

 .form-input, .form-select {
  margin-bottom: 23px !important; 
}
.select-list {
  position: relative !important;
  display: inline-block !important;
  width: 100% !important;
 height: 45px;
 border-color: #ebebeb !important;
  margin-bottom: 47px !important; 
}

select{
	
	height: 50px !important;
	width: 100% !important;
	border-radius: 5px;
}

</style>

</head>
<body>
	
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box" style="background-color: red;">
					<i class="material-icons">close</i>
				</div>				
				<h4 class="modal-title w-100">Wrong Credential!</h4>	
			</div>
			
			
		</div>
	</div>
</div> 


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>





























	
    

    <?php include("homeAssets/navbar1.php"); ?>











    <div class="main">
				
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/2.jpg" alt="" style="height: 600px;">
                    <div class="signup-img-content" >
                        <h2 class="register">Register now </h2>
                        <p class="while">while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">










<!--------------------------- start here the login form ------------------->



<span class="text-danger"><?php echo $message; ?></span>

                    <form class="form-detail" enctype="multipart/form-data" method="post">
					<div class="tabcontent" id="sign-up">

						<h3 style="text-align: center; color: #204d74">Customer Login Form</h3>
						
						
                        <div style="width: 400px; margin:10% auto;">
                            <div class="form-group">
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required">Email Address</label>
                                    <input type="text" name="emailid" id="phone_number" />
                                </div>
                            </div>

                            <div class="form-group">
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required" >Password</label>
                                    <input type="Password" name="pass" id="myInput" />
                                </div>
                            </div>
                           <div>
                            	 
                                <p style="width: 5%; text-align: left;"><input style="margin:0% 0% 5% -20%;"  type="checkbox" onclick="myFunction()"> </p>
                                	<span style="position: relative; left: 20px; top: -18px; ">Show Password</span>
                            </div>
                        
                        
                            <input type="submit" value="Login" class="submit" id="submit" name="signin" />
                           
                       <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


                        
                    
					</div>
					<p style="display: flex; flex-direction: row; padding-left: 25%;">if your are not member this website please <a href="contact.php" style="padding: 0px 3px 0px 3px; color: dodgerblue; font-weight: bold;"> register </a> yourself.</p>
				</div>
				</form>
                </div>
            </div>
        </div>

    </div>





<?php include("footer.php"); ?>
    





