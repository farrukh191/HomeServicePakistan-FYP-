<?php
session_start();
 include('../db.php'); 

  $_SESSION['emai'];
    $_SESSION['pass'];

if (!$_SESSION['pass'] && !$_SESSION['emai']) {
        header('location:index.php?Access Denied..');
    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>



  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



    <!-- Main css -->
 
 <!--================================FAVICON================================-->
	
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
    
    <!--================================ Main STYLE SHEETs====================================-->
	 
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/color/color.css">
	<link rel="stylesheet" type="text/css" href="../assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="../assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="../css/responsive.css"> 
	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="../assets/revolution_slider/css/revslider.css" media="screen" />
	
<style type="text/css">


.sec_r{
	width: 100%;
	height: 418px;

	float: right;
	
}

.sec_r .admin{
	text-align: center;
	border-bottom: 1px solid #420685;
	padding: 15px 0px 15px 0px;
	font-weight: bold;
	text-transform: capitalize;

}

h3{
	font-weight: bold;
	font-size: 20px;
}

.secl{
	margin: 0 auto;
}
form{
	position: absolute;
	left: 45%;
}

.sec_r .secl input{
	width: 350px;
}

.sec_r .secl select{
	width: 30%;
}
.sec_r .secl form input[type=submit]{
	color: white;
	background: #420685;
	width: 45%;
	height: 50px;
}

.error{
	background: red;
	color:white;
	text-align: center;
}
.suces{
	background: green;
	color: white;
	text-align: center;
}

.bgwhite {
    background: honeydew;
}


</style>



</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right leftbg" id="sidebar-wrapper" >
      <div class="sidebar-heading" style=""><img src="../Assets1/provider/hero.jfif" alt="gogo" style="height: 100px; width: 100px; margin: 5px auto; border-radius: 50px; object-fit: cover; "><p>Farrukh Feroz</p></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-g list-group-item-action bg-light" onclick="openCity(event, 'chg-img')" id="defaultOpen">Dashboard</a>
        <a href="#" class="list-g list-group-item-action bg-light" onclick="openCity(event, 'chg-img0')" id="defaultOpen">Reports</a>
        <a href="publiccontact.php" class="list-g list-group-item-action bg-light" onclick="openCity(event, 'chg-img1')" id="defaultOpen">Contact</a>
      <!--  <a href="logout.php" class="list-g list-group-item-action bg-light" onclick="openCity(event, 'chg-img2')" id="defaultOpen">Logout</a>
         -->
          <a href="logout.php" class="list-g list-group-item-action bg-light"  id="defaultOpen">Logout</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
<!-- <p id="menu-toggle" style="cursor: pointer; ">Toggle menu <span style="font-size: 30px;">&#9756;</span> </p> -->

  <!-- Page Content -->
    <div>

 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" >
        <div style=" "><p id="menu-toggle" style="cursor: pointer;"> <i class='fas fa-angle-double-left'></i> Toggle menu </p></div>

       
        
      </nav>


 
      <div class="container-fluid tabcontent"  id="chg-img" >
        <h3 class="mt-4">Dashboard</h3>
        <section id="contact-form" class="margin-top-70 margin-bottom-40">
			<div class="container">
				<div class="row info-box-wrap clearfix">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfixx">
							<div class="info-icon">
								<i class="fa fa-suitcase bgblue-1 white"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>Total Jobs Posted</h6>
								</div>
								<div class="info-disc">

									<?php  
										$users=mysqli_query($con,"select * from jobposting");
									    $cout=mysqli_num_rows($users);
									?>
									<p><?php echo $cout; ?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfixx">
							<div class="info-icon">
								<i class="fa fa-wrench bggreen-1 white"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>Total Service provider</h6>
								</div>
								<div class="info-disc">
									<?php  
										$users=mysqli_query($con,"select * from provider_signup");
									    $cout=mysqli_num_rows($users);
									?>
									<p><?php echo $cout; ?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfixx">
							<div class="info-icon">
								<i class="fa fa-suitcase bgyallow-1 white"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>Total Jobs Provider</h6>
								</div>
								<div class="info-disc">
									<?php  
										$users=mysqli_query($con,"select * from customer_signup");
									    $cout=mysqli_num_rows($users);
									?>
									<p><?php echo $cout; ?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfixx">
							<div class="info-icon">
								<i style=" font-size: 62px; color: red;" class="fas fa-virus"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>Total Covid-19 Services</h6>
								</div>
								<div class="info-disc">
									<?php  
										$users=mysqli_query($con,"select * from covid19");
									    $cout=mysqli_num_rows($users);
									?>
									<p><?php echo $cout; ?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
				</div><!-- .row .info-box-wrap end -->
				
				
			</div><!-- container end -->
		</section>
        
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
      




 <div class="container-fluid tabcontent"  id="chg-img0" >
        <h3 class="mt-4">Reports</h3>
        <?php include('report.php'); ?>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
      


 <div class="container-fluid tabcontent"  id="chg-img1" >
        <h3 class="mt-4">Contact</h3>
        <?php //include('publiccontact.php'); ?>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>



 <div class="container-fluid tabcontent"  id="chg-img2" >
        <h3 class="mt-4">Edit Profile</h3>
        <section class="sec_r">
	



<div class="secl">

<div class="container">
  
<form  method="POST">
    
    <div class="form-group">
    	<label>old password</label>
      	<input type="text" class="form-control" name="oldp" >
      
    </div>

    <div class="form-group">
    	<label>new password</label>
      	<input type="text" class="form-control" name="newp" >
      
    </div>

    <div class="form-group">
    	<label>confirm password</label>
      	<input type="text" class="form-control" name="conp">
      
    </div>
    

    <input type="submit" name="chg" class="form-control" value="change password" >
 </form>
</div>

<br>



	
</div>



<!---make  a table for contain class information-->




</section>

        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
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
    </div>






    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>




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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/nouislider/nouislider.min.js"></script>
    <script src="../vendor/wnumb/wNumb.js"></script>
    <script src="../vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../js1/main.js"></script>




<script src="../http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>


</body>

</html>
