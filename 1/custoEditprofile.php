<?php session_start(); ?>
<?php 

include('db.php');
$alert ='';
   $pis =$_SESSION['picture']; 
     $cemail=$_SESSION['cemail']; 
     $cpass=$_SESSION['cpassword']; 
     $cid=$_SESSION['CcustomerId']; 
   $fname= $_SESSION['cfirst']; 
   $lname= $_SESSION['clast']; 
    if (!$cpass) {
  header('location:login.php?Access Denied..');
}


if (isset($_POST['chgpass'])) {
	if ($cpass == $_POST['opassword']) {
		if ($_POST['npassword'] == $_POST['cpassword'] and $_POST['npassword'] !=="" and $_POST['cpassword'] !=="") {
			$npas=$_POST['cpassword'];
			 $update = "UPDATE `customer_signup` SET password='$npas',cpassword='$npas' WHERE customer_id='$cid'";
				$upquery = mysqli_query($con,$update);

				if ($upquery) {
					 ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     



          <script>
          $(document).ready(function(){
          $("#myModal1").modal('show');
        });
      </script>
  <?php
}
				
				
		}
		else{
			$alert = "Password and confirm password is not match";
		}
	}
	else{
		$alert = "not match";
	}
}

?>

<?php  



$upsele="SELECT * FROM customer_signup  WHERE customer_id='$cid'";
$upquery=mysqli_query($con,$upsele);
$upfet=mysqli_fetch_assoc($upquery);

$upfet['file'];
if (isset($_POST['updatesubmit'])) {

	$upfirst=$_POST['first_name'];
	$uplast=$_POST['last_name'];
	
	$upaddress=$_POST['address'];
	
	$upcity=$_POST['City'];
	
	$upid=$_POST['IdNumber'];
	


	 $update="UPDATE customer_signup SET first_name='$upfirst', last_name='$uplast', address='$upaddress',city='$upcity', phone='$upid' WHERE customer_id='$cid'";
$updatequery=mysqli_query($con,$update);

if (!$updatequery) {
	$alert = "data is not update";
}
else{
	 ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     



          <script>
          $(document).ready(function(){
          $("#myModal1").modal('show');
        });
      </script>
  <?php
}


	
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>media profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Main css -->
 
 <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
        <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">
    
    <style type="text/css">
    	body{margin-top:20px;
background:#eee;
}
.container .row{

	margin-top: -8%;
}
.suces{
	background: green;
	color: white;
	text-align: center;
}


.panel-icon {
  padding-left: 5px;
}


.media {
  color: #999999 !important;
  font-weight: 600 !important;
  margin-top: 15px !important;
}
.media:first-child {
  margin-top: 0 !important;
}
.media-right,
.media > .pull-right {
  padding-left: 10px !important;
}
.media-left,
.media > .pull-left {
  padding-right: 10px !important;
}
.media-left,
.media-right,
.media-body {
  display: table-cell !important;
  vertical-align: top !important;
}
.media-middle {
  vertical-align: middle !important;
}
.media-bottom {
  vertical-align: bottom !important;
}
.media-heading {
  color: #555555 !important;
  margin-top: 0 !important;
  margin-bottom: 5px !important;
}
.media-list {
  padding-left: 0 !important;
  list-style: none !important;
}

/*===============================================
  Tabs
================================================= */
/* Tabs Wrapper */
.tab-block {
  position: relative !important;
}
/* Tabs Content */
.tab-block .tab-content {
  overflow: auto !important;
  position: relative !important;
  z-index: 10 !important;
  min-height: 125px !important;
  padding: 16px 12px !important;
  border: 1px solid #e2e2e2 !important;
  background-color: #FFF !important;
}
/*===============================================
  Tab Navigation
================================================= */

.text-muted{
	text-align: left;
	line-height: 20px !important;

}

.panel-body span{
	margin: 10px;
}
	
section{
	width: 90%;
	margin: 0 auto;
	font-family: cursive;
	font-weight: bold;
}

section .sec_left{
	float: left;
	width: 330px;
	
	background: white;
	box-shadow: 3px 4px 9px #C9C5C8, -4px 4px 9px #C9C5C8;

}


section .sec_right{
	float: right;
	width: 72%;

	height: 500px;
	margin-right: 1%;
	
}

.dash{
	
	text-align: center;
	border-bottom: 1.4px solid #420685;
	padding: 15px 0px 15px 0px;
	color:#420685;
	font-size: 18px;
	text-transform: capitalize;
	font-family: cursive;
	font-weight: bold;
}
.sec_left div p {

	width: 90%;
	margin: 12px auto;
	padding-top: 5px;
}

.sec_left div p a{
	text-decoration: none;
	color:#420685;


}

.sec_ll{
	float: left;
	
	width: 25%;
	height: 440px;
}


label{
    font-size: 12px !important;
    font-weight: bold !important;
}
input[value] { /* WebKit browsers */
    color: grey;
    font-size: 14px;
}
    </style>






 <link rel="shortcut icon" href="images/favicon.ico">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />







</head>
<body>

<div id="myModal1" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i>
        </div>        
        <h4 class="modal-title w-100">Successfully updated!</h4>  
      </div>
     
      <div class="">
        
        <a class="btn btn-success btn-block"  href="customerlogout.php" style="text-decoration: none; color: white;">Go Login page</a>
      </div>
    </div>
  </div>
</div>    








<?php include('customerAssets/navbar.php'); ?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section id="content" class="container">
    <!-- Begin .page-heading -->
   

    <div class="row">
        <div class="col-md-4">
          <section>
	

<aside class="sec_left">
	
		<h3 class="dash">
			Setting
		</h3>
		<div style="font-size: 10px !important; cursor: pointer; text-align: left;">
        <p class="tablinks  text-uppercase  " onclick="openCity(event, 'chg-img')" id="defaultOpen" style="font-weight: bold; text-align: left;padding-top: 2%; color: black; ">Change profile Image</p>
			<p class="tablinks  text-uppercase  " onclick="openCity(event, 'sign-up')" id="defaultOpen" style="font-weight: bold;text-align: left; color: black; padding-top: 2%; ">Update Password</p>
				<p class="tablinks  text-uppercase  " onclick="openCity(event, 'sign-inn')" id="defaultOpen" style="font-weight: bold; text-align: left;padding-top: 2%; color: black; ">Edit Profile</p>
			

		</div>
	
</aside>


</section>


        </div>
        <div class="col-md-8" style="margin-bottom: 6%;">
<p style="background-color: steelblue; color: white; font-weight: bold;"><?php echo $alert; ?></p>
          <div class="tab-block" >
           
            <div class="tab-content p30" >
              <div id="tab1" class="tab-pane active">






<!----  description detail  ---->

               <?php //include('customerjobshow.php'); ?>
                             
  <div class="main">


        <div class="container" style="width: 100%; margin-top: 3%;">



            <div class="signup-content">

                <div class="signup-form">
<!-- 


                    <div class="tab" style="float: left; cursor:pointer; margin-top: -65px; width: 100%;">
                        <h4 class="text-left " style=" padding-bottom:10px;">My Proposals</h4>
                        <div class="tab-inner act" style="float: left;  ">

                            <p class="tablinks  text-uppercase  " onclick="openCity(event, 'sign-up')" id="defaultOpen" style="color: black; ">Confirmed Jobs</p>
                        </div>
                        <div class="tab-inner act" style="float: left; padding-left: 15px;  ">
                         <p class="tablinks text-uppercase  " onclick="openCity(event, 'sign-inn')" style="color: black; ">Applied Job</p>
                        </div>
                    </div>
 -->

<form class="form-detail" enctype="multipart/form-data" method="post">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
          <div class="tabcontent" id="chg-img" style="width: 27%; margin: 0 auto; ">

<?php
if (isset($_POST['submit2'])) {

  //  $image=$_POST['file'];


$uploadfile=$_FILES["file"]["name"];
    $uploadfile_temp=$_FILES["file"]["tmp_name"];
    
    $move=move_uploaded_file($uploadfile_temp, "C:/xampp/htdocs/farrukh/farrukh/FYP_PROJECT/1/Assets1/customer/$uploadfile/");


    $insert="UPDATE customer_signup SET file='$uploadfile' WHERE customer_id='$cid'";
    $run=mysqli_query($con,$insert);

    
  }



?>

<input type="file" name="file" id="profile-img" style=" width: 270px;"><br>
  
  

<div class="static-header-content">
          
          <img src="Assets1/customer/<?php echo $upfet['file']; ?>" id="profile-img-tag" style="width: 200px; height: 200px; margin:-140px auto; border-radius: 100px; border:2px solid white; object-fit: cover; ">
          <!-- <div class="search-form-wrap2" style="width: 170px; height: 170px; margin:0 auto; border-radius: 100px; background-image: url('Assets1/customer/<?php echo $pis; ?>'); border:2px solid white; background-size: cover;">

          </div> -->

        </div>



        <h4 class="white"> <span class="blue-1"><input type="submit" name="submit2"  class="submit" style="margin: 210px 0px 0px 10px;"></span></h4>

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








          </div>

</form>







<form class="form-detail" enctype="multipart/form-data" method="post">

					<div class="tabcontent" id="sign-up">
<h5 style="text-align: center;">Update Password</h5>
						
                        <div style="width: 400px; margin:10% auto;">
                            <div class="form-group">
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required">Old Password</label>
                                    <input type="text" name="opassword" id="phone_number" />
                                </div>
                            </div>

                            <div class="form-group">
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required">New Password</label>
                                    <input type="text" name="npassword" id="phone_number" />
                                </div>
                            </div>

                            <div class="form-group">
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required">Confirm Password</label>
                                    <input type="text" name="cpassword" id="phone_number" />
                                </div>
                            </div>
                           
                        
                        
                            <input type="submit" value="Update" class="submit" id="submit" name="chgpass" />
                           
                       

                        
                    
					</div>
					
				</div>
				</form>
                    








                    <!--------------------------- start here the login form ------------------->



                   <form class="form-detail"  method="POST" enctype="multipart/form-data" style="margin-top: 8%; padding: 10px; ">


          <div class="tabcontent" id="sign-inn">
   
<h5 style="text-align: center; margin: -10% 0% 10% 0% !important;">Update your profile</h5>


                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" value='<?php echo $upfet['first_name']; ?>' name="first_name" id="first_name"  />
                                </div>
                                <div class="form-input">
                                    <label for="last_name"  class="required">Last name</label>
                                    <input type="text" value='<?php echo $upfet['last_name']; ?>' name="last_name" id="last_name"  />
                                </div>
                  
                                

                                 

                                <div class="form-input" style="">
                                    <label for="Professional" class="required">Address</label>
                                    <!-- <input type="text" name="Professional" id="company"  /> -->
                                    <input type="text" name="address" value='<?php echo $upfet['address']; ?>'   />
                                      
                                  
                                </div>

                                



              


              
                            </div>






                            <div class="form-group">

                               



                                <div class="form-input">
                                    <label for="blank_name">City</label>
                                    <input type="text" value='<?php echo $upfet['city']; ?>' name="City" id="blank_name"  />

                                </div>
                               

                                

                                
                                <div class="form-input">
                                    <label for="Id Number"  class="required">Phone #</label>
                                    <input type="text" value='<?php echo $upfet['phone']; ?>' name="IdNumber" id="Id Number"   />
                                </div>
                                

                                



      
                               





                            </div>
                        </div>
                        
                        <div class="form-submit" style="margin-top: -2%; margin-right: -3%;">
                            <input type="submit" value="Update" class="submit" id="submit" name="updatesubmit" />
                            <!-- <input type="submit" value="Reset" class="submit" id="reset" name="reset" /> -->
                        </div>

          </div>
        </form>

        

            </div>
        </div>

    </div>




<!-- 
<div style="text-align: center; background-color: dodgerblue; width: 100%; color: white; padding: 2px; font-weight: bold;">
  <?php echo $msg; ?>
</div> -->
              
              </div>
             
            </div>
          </div>
        </div>
      </div>
  </section>



<script type="text/javascript">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js1/main.js"></script>




<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>