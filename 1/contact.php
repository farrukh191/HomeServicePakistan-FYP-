<?php 
session_start();
include('db.php'); 


	if (isset($_POST['Ccsubmit']) and isset($_FILES['imgfile'])) {

		$first_name=$_POST['fname'];
		$last_name=$_POST['lname'];
		$email=$_POST['email'];
		$province=$_POST['province'];
		
		$nic=$_POST['Nic'];
		$city=$_POST['city'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		
		$createpass=$_POST['password'];
		$confirmpass=$_POST['confirmpassword'];
		
		$gender=$_POST['gender'];

		$uploadfile=$_FILES["imgfile"]["name"];
		$uploadfile_temp=$_FILES["imgfile"]["tmp_name"];
		
		$move=move_uploaded_file($uploadfile_temp, "C:/xampp/htdocs/farrukh/farrukh/FYP_PROJECT/1/Assets1/customer/$uploadfile/");


       $Date=date("d-m-y");



 $se="select * from customer_signup where cpassword='$confirmpass'";
$slequery=mysqli_query($con,$se);
$secount=mysqli_num_rows($slequery);
if ($secount > 0) {
	 $alert = "data is already submitted";
}
else{
	if ($createpass == $confirmpass and !$createpass !== "" and $confirmpass !== "" ) 
    {

if ($uploadfile == "") {
	$alert = "Image is mendatory please select";
}
else{


 $query = "INSERT INTO customer_signup(first_name, last_name, email, Province, address, nic, city, password, cpassword, phone, gender, file,Daate) VALUES ('$first_name','$last_name','$email','$province','$address','$nic','$city','$createpass','$confirmpass','$phone','$gender','$uploadfile','$Date')";

  // $query="insert into provider_signup(p_first,Date)values('$first_name','$Date')";
     
 		$move=mysqli_query($con,$query);
 
        if ($move) {
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
        else{
        	$alert = "data is not passing";
        }

      } 

	}

else{
	$alert = "password is not match";
}
}


	


}

?>

<script type="text/javascript">
	window.alert("<?php echo $alert ?>");
</script>



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
</style>

</head>
<body>

<?php include("homeAssets/navbar1.php"); ?>


<!--================================CONTACT===========================================-->



<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Successfully login!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your Registration has been confirmed. Now you can login.</p>
			</div>
			<div class="modal-footer">
				
				<a class="btn btn-success btn-block"  href="login.php" style="text-decoration: none; color: white;">Go Login page</a>
			</div>
		</div>
	</div>
</div>    



		<section id="contact-form"  style="margin: -8% 0% 0% 0%;">


			<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">Customer Account Detail</h4>
			</div><!-- section title end -->
			<div class="container">

				<!-- .row .info-box-wrap end -->


				
				<form class="contact-form-wrap margin-top-30" method="POST" enctype="multipart/form-data"><!--.contact-form-wrap -->
					<div id="contact_form" class="row contact-form"><!-- .row .contact-form -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="First Name" Required name="fname" >
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="Last Name" Required name="lname" >
						</div><!-- form-field  end-->




					

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="email" placeholder="Email Address" Required name="email" >

						</div><!-- form-field  end-->
						
					<!-- .row .contact-form -->
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="width: 50%; margin-bottom: 3%; ">
                                            
                                            <div class="form-button" style="width: 100%;">
                                                <select class="nice-select" Required name="province" style="width: 100%; height: 60px; color:#777; background: #fff;
    border: 1px solid #e3eff2; font-family: 'Montserrat'; padding-left: 30px;">
                                                    <option data-display="Gender">Province<ption>
                                                    <option value="SINDH">SINDH</option>
                                                    <option value="PUNJAB">PUNJAB</option>
                                                    <option value="BALOCHISTAN">BALOCHISTAN</option>
                                                    <option value="KHYBER PAKHTUNKHWA">KHYBER PAKHTUNKHWA</option>
                                                    <option value="FATA">FATA</option>
                                                    <option value="GILGIT BALTISTAN">GILGIT BALTISTAN</option>
                                                </select>
                                            </div>
                                        </div>












						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="Nic" Required name="Nic"  maxlength="13" pattern="[0-9]{13}" >
							 <span style="font-size: 12px;">Fill without dash 4240103789897</span>
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="City" Required name="city" >
						</div>
						<!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="Phone Number" Required name="phone" maxlength="11" pattern="[0-9]{11}" >
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="Address" Required name="address" >
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" Required name="password" >
							 <span style="margin-top: -5%; font-size: 12px;">Hints <b style="font-weight:bold;">AbcsdjB1223 </b>8 or more characters</span>
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" Required name="confirmpassword" >
						</div>
						

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							
                                        <div class="input-field" style="width: 100%; margin-bottom: 3%; background-color: gray;">
                                            
                                            <div class="form-button" style="width: 100%;">
                                                <select class="nice-select" name="gender" style="width: 100%; height: 60px; color:#777; background: #fff;
    border: 1px solid #e3eff2; font-family: 'Montserrat'; padding-left: 30px;">
                                                    <option data-display="Gender">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    


						</div>


						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="file" placeholder="IMAGE UPLOAD" name="imgfile" >
						</div>


						<!-- form-field  end-->
						<!-- form-field  end-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!-- form-btn -->
							<input class="contact-btn bgblue-1" type="submit" value="Register" name="Ccsubmit" >
						</div><!-- form-btn  end-->
						<div id="contact_results"></div>
					</div>
				</form>
			</div><!-- container end -->
		</section>
		







<?php include('footer.php'); ?>

</body>
</html>