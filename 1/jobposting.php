<?php session_start(); ?>
<?php include('db.php'); ?>

<?php  
	 $cemail=$_SESSION['cemail'];
     $cpass=$_SESSION['cpassword'];
     $cid=$_SESSION['CcustomerId'];
?>



<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<?php include('customerAssets/navbar.php'); ?>

<div style="margin-top: -10%;">
	<?php include('customerAssets/header.php') ?>
</div>

<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">see your jobs</h4>
		</div><!-- section title end -->
<!--================================PAGE TITLE==========================================-->
		

<?php  
		
	if (isset($_POST['submit'])) {
		$jobtitle=$_POST['jobtitle'];
		$jobtype=$_POST['jobtype'];
		$address=$_POST['address'];
		$price=$_POST['price'];
		$jobcategory=$_POST['jobCategory'];
		$estimatedtime=$_POST['estimatedtime'];
		$experience=$_POST['experience'];
		
		$description=$_POST['description'];
		$uploadfile=$_FILES["jobfile"]["name"];
		$uploadfile_temp=$_FILES["jobfile"]["tmp_name"];
		
		$move=move_uploaded_file($uploadfile_temp, "C:/xampp/htdocs/farrukh/farrukh/FYP_PROJECT/1/Assets1/jobpostimg/$uploadfile/");

		if ($jobtitle !=="" and $price !=="" and $experience !=="") {

			echo $insert="insert into jobposting(customer_id,jobtitle,jobtype,address,price,jobcategory,estimatedtime,experience,jobfile,description)values('$cid','$jobtitle','$jobtype','$address','$price','$jobcategory','$estimatedtime','$experience','$uploadfile','$description')";

				$jobqueryrun=mysqli_query($con,$insert);

				if ($jobqueryrun) {
				
				
					?>
					<script type="text/javascript">
						window.open('customerdashboard.php','_self');
	 				</script>
					<?php
					exit();
				}
				else{
					header('location:jobposting.php','_self');
					exit();	
				}
			
		}





}

	

?>





<section class="our-services" style="width: 70%;  margin: 0 auto; margin-top: 3%;">
			<div class="container" style=" width: 100%;">



				<form class="contact-form-wrap margin-top-30" method="POST" enctype="multipart/form-data"><!--.contact-form-wrap -->
					<div id="contact_form" class="row contact-form"><!-- .row .contact-form -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="JOB TITLE" name="jobtitle" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="JOB TYPE" name="jobtype" required="required">
						</div><!-- form-field  end-->
						<!-- form-field  end-->
						
					<!-- .row .contact-form -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="ADDRESS" name="address" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="PRICE" name="price" required="required">
						</div><!-- form-field  end-->

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
								
								
                            	<select class="form-select select-list " style="color: #777; background: #fff; border: 1px solid #e3eff2; width: 100%; height: 66px;font-family: 'Montserrat'; text-transform: uppercase; padding: 20px 38px;" name="jobCategory"  aria-label=".form-select-lg example">
                            		 <option selected>JOB CATEGORY</option>
											  <option value="maid">maid</option>
											  <option value="Medical">Medical</option>
											  <option value="Home Renovation">Home Renovation</option>
											  <option value="Cooking">Cooking</option>
											  <option value="Water Supply">Water Supply</option>
											  <option value="Labour">Labour</option>
											  <option value="Beautician">Beautician</option>
											  <option value="Consultancy">Consultancy</option>
											  <option value="Mechanic">Mechanic</option>
								  

								</select>
							</div>


						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="ESTIMATE TIME" name="estimatedtime" required="required">
						</div>
						<!-- form-field  end-->
						
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							
                                        <div class="input-field" style="width: 100%; margin-bottom: 3%; background-color: gray;">
                                            
                                            <div class="form-button" style="width: 100%;">
                                                <select class="nice-select" name="experience" style="width: 100%; height: 66px; color:#777; background: #fff;
    border: 1px solid #e3eff2; font-family: 'Montserrat'; padding-left: 30px;">
                                                    
                            		 <option selected>EXPERIENCE</option>
											  <option value="0 - 1 yrs">0 - 1 yrs</option>
											  <option value="1 - 2 yrs">1 - 2 yrs</option>
											  <option value="2 - 5 yrs">2 - 5 yrs</option>
											  <option value="5 - 10 yrs">5 - 10 yrs</option>
											  <option value="10 - 20 yrs">10 - 20 yrs</option>
											  <option value="20 - 30 yrs">20 - 30 yrs</option>
											  <option value="Above 30 yrs">Above 30 yrs</option>
								  
								
                                                </select>
                                            </div>
                                        </div>
                                    


						</div>


						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="file" placeholder="IMAGE UPLOAD" name="jobfile" >
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<textarea class="input-field" type="text" placeholder="DESCRIPTION" name="description"></textarea>
						</div>


						<!-- form-field  end-->
						<!-- form-field  end-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!-- form-btn -->
							<input class="contact-btn bgblue-1" type="submit" name="submit" value="POST JOB" >
						</div><!-- form-btn  end-->
						<div id="contact_results"></div>
					</div>
				</form>
			</div>
		</section>
		






		



<?php include('footer.php'); ?>

</body>
</html>

