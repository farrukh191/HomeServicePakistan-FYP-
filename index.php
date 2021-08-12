<?php session_start(); ?>
<?php include('1/db.php'); ?>
<?php  

if (isset($_POST['submit1'])) {
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$mobile=$_POST['mobile'];
	$covidcity=$_POST['city'];
	$covAdd=$_POST['address'];
	$jobtype=$_POST['jobtype'];
	$desc=$_POST['jobdesc'];
	$today = date("F j, Y, g:i a");

	$sql=mysqli_query($con,"select * from covid19 where mobile ='$mobile'");

	$cou=mysqli_num_rows($sql);
	if ($cou > 0 ) {
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
	elseif ($mobile == "") {
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
			echo $covidquery="insert into covid19(firstname,lastname,mobile,city,address,job,description,date)values('$fname','$lname','$mobile','$covidcity','$covAdd','$jobtype','$desc','$today')";
	$covidrun=mysqli_query($con,$covidquery);

if ($covidrun) {
			echo "sahi h";
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
	
	
	
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="user-scalable = yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Listing - Classified Listing HTML Template">
	<meta name="keywords" content="Listing,HTML,CSS,Classified,blog,business,corporate,clean,responsive">
	<meta name="author" content="Muqadass Aleem, Muammad Asif">


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>












	

<link rel="stylesheet" href="1/css/linearicons.css">
<link rel="stylesheet" href="1/css/font-awesome.min.css">
<link rel="stylesheet" href="1/css/bootstrap.css">
<link rel="stylesheet" href="1/css/magnific-popup.css">
<link rel="stylesheet" href="1/css/nice-select.css">
<link rel="stylesheet" href="1/css/animate.min.css">
<link rel="stylesheet" href="1/css/bootstrap.css">
<link rel="stylesheet" href="1/css/owl.carousel.css">
<link rel="stylesheet" href="1/css/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title>Home Service Solution</title>
	
    <!--================================FAVICON================================-->
	
	<link rel="apple-touch-icon" sizes="57x57" href="1/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="1/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="1/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="1/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="1/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="1/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="1/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="1/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="1/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="1/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="1/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="1/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="1/images/favicon/favicon-16x16.png">
	<link rel="shortcut icon" href="1/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="1/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="manifest" href="1/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<link rel="stylesheet" type="text/css" href="1/bootstrap/css/bootstrap.min.css">
	
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="1/css/style.css">
	<link rel="stylesheet" type="text/css" href="1/css/menu.css">
	<link rel="stylesheet" type="text/css" href="1/css/color/color.css">
	<link rel="stylesheet" type="text/css" href="1/assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="1/assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="1/css/responsive.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="1/css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	<link rel='stylesheet' type='text/css' href='1/https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="1/assets/revolution_slider/css/revslider.css" media="screen" />
	<style type="text/css">
		p,h1,h2,h3,h4,h5,h6,a,div,span{
			font-family: Monospace !important;
	
		}
		.height{
			height: 200px;
		}
		.container li a{
			font-family: Arial, Helvetica, sans-serif !important;
    		text-transform: uppercase;
    		    
    font-size: 15px;
    text-align: left;
    border-right: 0;
    background-color: transparent;
    color: #666;

}

.img11{
	opacity: 0.8;
	background-color: black !important;
	transform: scale(1.05);

}
.img11: hover{
	background-color: yellow !immportant;0

}

::-webkit-input-placeholder { /* WebKit browsers */
    padding-left: -25%;
}

.wid li{
	padding: 2%;
}
.social-section ul{
	margin-top: -6%;
}


	</style>
		
</head>
<body>
	<?php include('1/homeAssets/navbar.php'); ?>
	<!-- <div class="preloader"><span class="preloader-gif"></span></div> -->
	
		<!--================================Revolution SLIDER SECTION==========================================-->




<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
								
				<h4 class="modal-title w-100">Data is already submitted! Try again <a href="index.php" class="btn btn-primary">Ok</a></h4>
				
			</div>
			
			
		</div>
	</div>
</div> 




		<div id="myModal1" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
								
				<h4 class="modal-title w-100">Your job successfully submitted <a href="index.php" class="btn btn-primary">Ok</a></h4>	
					
			</div>
			
			
		</div>
	</div>
</div> 









		
		<section id="slider-revolution" style="margin-top: -10%;">
			<div class="fullwidthbanner-container">
				<div class="revolution-slider tx-center">
					<ul><!-- SLIDE  -->
								
						<!-- Slide1 -->
						<li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
							<img src="1/images/slider/slide-1.jpg" alt="slide">
						<!-- LAYERS -->
							<!-- LAYER 1 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="222" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="300" data-easing="easeInBack" style="z-index: 9;">
								<div class="sub-title-18 cwhite fwn lh1 lp3 tx-left ffm">
										WELCOME TO <span class="yallow-1 sub-title-18 ffm">Home Service Solution</span> 
								</div>
							</div>
							<!-- LAYER 2 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="262" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="700" data-easing="easeInBack" style="z-index: 9;">
								<div class=" title-48 cwhite tx-left fwb lp5 lh1 ffm">
										For <span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">Covid-19</span><span class="title-48 tx-left fwb lp5 lh1 ffm red-1"><i  style="font-size: 70px;" class="fas fa-virus"></i></span> 
								</div>
							</div>
							<!-- LAYER 3 -->
							<!-- <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="322" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1000" data-easing="easeInBack" style="z-index: 9;">
								<div class="title-48 cwhite tx-left fwb lp5 lh1 ffm">
										<span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">html</span> Template
								</div>
							</div> -->
							<!-- LAYER 4 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="382" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1300" data-easing="easeInBack" style="z-index: 9; margin-top: -3%;">
								<div class=" text-14 cwhite tx-left fwn lp1 lh4 ffm" >
									You can post only emergency jobs here that will benefit COVID19 <br> patients and another patient, such as donating blood, giving <br> medicine and providing facilities such as oxygen gas.
								</div>
							</div>
							<!-- LAYER 5 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2200" data-easing="easeInBack" style="z-index: 9;">
								<div class=" tx-left dib lp1">
									
<a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite register" data-toggle = "modal" data-target = "#register1" href="#">POST JOB</a>
								</div>
							</div>
							<!-- LAYER 6 -->

							
							<!-- LAYER 7 -->
							<div class="tp-caption rs-right sfr stl tp-resizeme" data-x="right" data-y="220" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1600" data-easing="easeInBack" style="z-index: 9;">
								<img src="1/images/slider/slide-1-1-1.png" alt="slide">
							</div>
							<!-- LAYER 8 -->
							<div class="tp-caption rs-right sft stt tp-resizeme" data-x="right" data-y="160" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1900" data-easing="easeInOutQuad" style="z-index: 9;">
								<!-- <img src="1/images/slider/slide-1-2.png" alt="slide"> -->
							</div>
							
						</li>
						
						<!-- Slide2 -->
						<li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
							<img src="1/images/slider/slide-2.jpg" alt="slide">
						<!-- LAYERS -->	
							<!-- LAYER 1 -->
							<div class="tp-caption rs-left sfr stl tp-resizeme" data-x="left" data-y="center" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="300" data-easing="easeInBack" style="z-index: 9;">
								<img src="1/images/slider/car.png" alt="slide">
							</div>
							<!-- LAYER 2 -->
							<div class="tp-caption sft stt tp-resizeme" data-x="150" data-y="140" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="700" data-easing="easeInOutQuad" style="z-index: 9;">
								<!-- <img src="1/images/slider/slide-2-2.png" alt="slide"> -->
							</div>
							<!-- LAYER 3 -->
							<div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="222" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1000" data-easing="easeInBack" style="z-index: 9;">
								<div class=" sub-title-18 cwhite fwn lh1 lp3 tx-left ffm">
										WELCOME TO <span class="yallow-1 sub-title-18 ffm">Home Service Solution</span>
								</div>
							</div>
							<!-- LAYER 4 -->
							<div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="262" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1300" data-easing="easeInBack" style="z-index: 9;">
								<div style="font-size: 20px;" class=" title-48 cwhite tx-left fwb lp5 lh1 ffm">
										All <span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1"> kind of solutions at your doorstep</span>
								</div>
							</div>
							<!-- LAYER 5 -->
							<!-- <div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="322" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1600" data-easing="easeInBack" style="z-index: 9;">
								<div class=" title-48 cwhite tx-left fwb lp2 lh1 ffm">
										<span class="title-48 tx-left fwb lp5 lh1 ffm red-1">html</span> Template
								</div>
							</div> -->
							<!-- LAYER 6 -->
							<div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="382" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1900" data-easing="easeInBack" style="z-index: 9; margin-top: -3%;">
								<div class="text-14 cwhite tx-left fwn lp1 lh4 ffm">
									You can post jobs here that will benefit COVID19 patients and  <br> another patient, such as donating blood, giving medicine and <br> providing facilities such as oxygen gas.
								</div>
							</div>
							<!-- LAYER 7 -->
							<div class="tp-caption rs-right sfl str tp-resizeme" data-x="650" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2200" data-easing="easeInBack" style="z-index: 9;">
								<div class="tx-left dib lp1">
																		
<a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite register" data-toggle = "modal" data-target = "#register1" href="#">POST JOB</a>
								</div>
							</div>
							<!-- LAYER 8 -->
							
						</li>
						<!-- Slide3 -->
						<li data-transition="slideright" data-slotamount="10" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
							<img src="1/images/slider/slide-3.jpg" alt="slide">
						<!-- LAYERS -->
							
							<!-- LAYER 1 -->
							<div class="tp-caption rs-right sfr stl tp-resizeme" data-x="right" data-y="center" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="300" data-easing="easeInBack" style="z-index: 9;">
								<img src="1/images/slider/lo3.png" alt="slide">
							</div>
							<!-- LAYER 2 -->
							<div class="tp-caption rs-right sft stt tp-resizeme" data-x="590" data-y="277" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="700" data-easing="easeInOutQuad" style="z-index: 9;">
								<!-- <img src="1/images/slider/slide-3-2.png" alt="slide"> -->
							</div>
							<!-- LAYER 3 -->
							<div class="tp-caption rs-right sfr stl tp-resizeme" data-x="right" data-y="337" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1000" data-easing="easeInBack" style="z-index: 9;">
								<!-- <img src="1/images/slider/slide-3-3.png" alt="slide"> -->
							</div>
							<!-- LAYER 4 -->
							<div class="tp-caption rs-right sft stt tp-resizeme" data-x="580" data-y="107" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="1300" data-easing="easeInOutQuad" style="z-index: 9;">
								<!-- <img src="1/images/slider/slide-3-4.png" alt="slide"> -->
							</div>
							<!-- LAYER 5 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="222" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1600" data-easing="easeInBack" style="z-index: 9;">
								<div class=" sub-title-18 cwhite fwn lh1 lp3 tx-left ffm">
										WELCOME TO <span class="yallow-1 sub-title-18 ffm">Home Service Solution</span> 
								</div>
							</div>
							<!-- LAYER 6 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="262" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="1900" data-easing="easeInBack" style="z-index: 9;">
								<div style="font-size: 20px;" class=" title-48 cwhite tx-left fwb lp5 lh1 ffm">
										You <span style="font-size: 40px;" class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">need it we have it</span>
								</div>
							</div>
							<!-- LAYER 7 -->
							<!-- <div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="322" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2200" data-easing="easeInBack" style="z-index: 9;">
								<div class="title-48 cwhite tx-left fwb lp2 lh1 ffm">
										<span class="title-48 tx-left fwb lp5 lh1 ffm yallow-1">html</span> Template
								</div>
							</div> -->
							<!-- LAYER 8 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="382" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2500" data-easing="easeInBack" style="z-index: 9; margin-top: -3%;">
								<div class="text-14 cwhite tx-left fwn lp1 lh4 ffm">
									You can post jobs here that will benefit COVID19 patients and  <br> another patient, such as donating blood, giving medicine and <br> providing facilities such as oxygen gas.
								</div>
							</div>
							<!-- LAYER 9 -->
							<div class="tp-caption rs-left sfl str tp-resizeme" data-x="0" data-y="452" data-voffset="20" data-speed="1500" data-endspeed="300" data-start="2800" data-easing="easeInBack" style="z-index: 9;">
								<div class="tx-left dib lp1">
																		
<a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite register" data-toggle = "modal" data-target = "#register1" href="#">POST JOB</a>
								</div>
							</div>
							<!-- LAYER 10 -->
							
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<!--================================SEARCH FORM SECTION ==========================================-->

		<?php  

if (isset($_POST['submit'])) {
	//$keyword=$_POST['keyword'];
	$location=$_POST['location'];
	$categories=$_POST['categories'];

	//$_SESSION['keyword']=$keyword;
	$_SESSION['location']=$location;
	$_SESSION['categories']=$categories;
	if ($categories !=="") {
		//header('location:dashboard.php');
		?>
		<script type="text/javascript">
			window.open("1/dashboard.php", "_self");
		</script>
		<?php
		exit();
	}
	else{
		echo "nhi horha h";
	}

}

		?>
		
		
		<section id="search-form" >
			<div class="container" >
				<div class="search-form-wrap" >
					<form class="clearfix"  method="POST" >
						<!-- <div class="input-field-wrap pull-left">
							<input class="search-form-input" name="keyword" placeholder="enter keyword" type="text"/>
						</div> -->
						<div class="select-field-wrap pull-left" >
							<select class="search-form-select" name="location" >
								<option class="options" value="">all locations</option>
								<option class="options" value="Karachi">Karachi</option>
								<option class="options" value="Hyderabad">Hyderabad</option>
								<option class="options" value="Quetta">Quetta</option>
								<option class="options" value="Lahore ">Lahore</option>
								
							</select>
						</div>
						<div class="select-field-wrap pull-left" >
							<select class="search-form-select" name="categories" >
								<option class="options" value="">all categories</option>
								<option class="options" value="Maid">Maid</option>
								<option class="options" value="Home Renovation">Home Renovation</option>
								<option class="options" value="Medical">Medical</option>
								<option class="options" value="Cooking ">Cooking</option>
								<option class="options" value="Water supply">Water supply</option>
								<option class="options" value="Labour">Labour</option>
								<option class="options" value="Beautician ">Beautician</option>
								<option class="options" value="Consultancy">Consultancy</option>
								<option class="options" value="Mechanic">Mechanic</option>
							</select>
						</div>
						<div class="submit-field-wrap pull-left">
							<input class="search-form-submit bgyallow-1 white" name="submit" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</section>
		
		<!--================================FEATURE LISTING SECTION==========================================-->
		
		<section class="feature-section padding-top-20 padding-bottom-70">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>featured item</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
			</div><!-- section container end -->





			<div class="container-fluid"><!-- section container -->
				<div class="feature-wrap">
					<ul class="feature-slider clearfix">
						<li class="item height "><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/maid.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Maid</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bgyallow-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height  "><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/Medical.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Medical</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bgblue-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/Exterior-siding.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bggreen-1" href="#"><i class="fa fa-paper-plane white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Home Renovation</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bggreen-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/cook.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Cooking</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bgorange-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/Fresh-Water.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bggreen-2" href="#"><i class="fa fa-home white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Water Supply</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bggreen-2"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/Face_treatment.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Beautician</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bgyallow-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/Plumbing-mechanic.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bgblue-1" href="#"><i class="fa fa-heart white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Labour</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bgblue-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/consult.png" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bggreen-1" href="#"><i class="fa fa-paper-plane white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Consultancy</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bggreen-1"></div>
						</li><!-- /.ITEM -->
						<li class="item height"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img class="height" src="1/Assets1/provider/Motorcycle-mechanic.jpg" alt="feature item"/>
									<div class="feature-overlay">
										
									</div>
								</div>
								<div class="feature-content clearfix">
									<div class="feature-meta-cat">
										<a class="bgorange-1" href="#"><i class="fa fa-female white"></i></a>
									</div>
									<div class="feature-title">
										<h6><a href="1/single-listing.html">Mechanics</a></h6>
									</div>
									<div class="feature-location pull-left"><!-- location-->
										<a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
									</div><!-- location end-->
									<div class="star-rating pull-right"><!-- rating-->
										<div class="score-callback" data-score="5"></div>
									</div><!-- rating end-->
								</div>
							</div>
							<div class="listing-border-bottom bgorange-1"></div>
						</li><!-- /.ITEM -->
					</ul>
				</div>
			</div>
		</section>
		
		<!--================================LISTING SECTION ==========================================-->
		
		<!--================================LOCATION SECTION==========================================-->
		
		<section class="location-section padding-top-70 padding-bottom-40 bgwhite">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>EXPLORE THE LOCATIONS</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="location-wrapper style1">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
							<div class="location-entry">
								<div class="figure">
									<img class="img11" src="1/images/location/min1.jpg" alt="location"/>
									<div class="location-content-1 clearfix">
										<div class="location-icon">
											<i class="fa fa-map-marker bgblue-1 white"></i>
										</div>
										<div class="location-title-disc">
											<h5> PUNJAB</h5>
											<a class="number-adds" href="#">5 jobs available</a>
										</div>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
						<div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
							<div class="location-entry">
								<div class="figure">
									<img class="img11"  src="1/images/location/z.jpg" alt="location"/>
									<div class="location-content-1 clearfix">
										<div class="location-icon">
											<i class="fa fa-map-marker bgblue-1 white"></i>
										</div>
										<div class="location-title-disc">
											<h5>BALOCHISTAN</h5>
											<a class="number-adds" href="#">5 jobs available</a>
										</div>
									</div>
								</div>
							</div>
							<div class="location-entry">
								<div class="figure">
									<img class="img11"  src="1/images/location/m.jpg" alt="location"/>
									<div class="location-content-1 clearfix">
										<div class="location-icon">
											<i class="fa fa-map-marker bgblue-1 white"></i>
										</div>
										<div class="location-title-disc">
											<h5>SINDH</h5>
											<a class="number-adds" href="#">5 jobs available</a>
										</div>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
						<div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
							<div class="location-entry">
								<div class="figure">
									<img class="img11"  src="1/images/location/lo.jpg" alt="location"/>
									<div class="location-content-1 clearfix">
										<div class="location-icon">
											<i class="fa fa-map-marker bgblue-1 white"></i>
										</div>
										<div class="location-title-disc">
											<h5>KHYBER PAKHTUNKHAWA</h5>
											<a class="number-adds" href="#">5 jobs available</a>
										</div>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		<!--================================FUNFACTS COUNTER SECTION==========================================-->
		<section class=" section-gap" style="color: black; background-image: url('1/assets/assets/img/header.jpg'); background-size: cover;">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="menu-content col-lg-9" style="margin-left: 11%;">
<div class="title text-center">
<h2 class="mb-10 text-white">Covid19 Emergency </h2>
<p style="color: white;">Patients who are having difficulty during code 19, such as not being able to buy medicine due to a store closure and not being able to communicate with each other due to an illness, can use this platform to meet people according to their needs. Can talk</p>
<a class="primary-btn register" data-toggle = "modal" data-target = "#register1" href="#">COVID-19 Post Job</a>
<a class="primary-btn" href="1/covid.php">See Services</a>
</div>
</div>
</div>
</div>
</section>

		<!--================================CATEGOTY SECTION==========================================-->
		
		<section class="categories-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>Classified Category</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="row category-section-wrap cat-style-1">
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Beautician <i class="fa fa-maxcdn blue-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Cooking <i class="fas fa-cookie-bite brown-1" ></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Medical <i class="fas fa-briefcase-medical yallow-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Maid <i class="fas fa-broom purpal-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Home Renovation <i class="fa fa-home green-2"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Water supply <i class="fas fa-water blue-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Mechanics <i class="fas fa-cogs green-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Consultancy <i class="fas fa-chalkboard-teacher yallow-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Labour<i class="fas fa-male orange-1"></i></h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									<!-- <li><a href="#">activities <span>(4)</span></a></li>
									<li><a href="#">Fitness <span>(2)</span></a></li>
									<li><a href="#">Gym <span>(3)</span></a></li>
									<li><a href="#">Hospitals & Clinics <span>(0)</span></a></li>
									<li><a href="#">Parlours <span>(1)</span></a></li>
									<li><a href="#">Others<span>(3)</span></a></li>
									<li><a class="view-all" href="#">view all</a></li> -->
								</ul>
							</div>
						</div>
					</div><!-- category column end -->
				</div>
			</div><!-- section container end -->
		</section>
		

		<!--================================ FOOTER AREA ==========================================-->
		
		<footer class="footer style-1 padding-top-60 bg222">
			<div class="container">
				<div class="footer-main padding-bottom-10">
					<div class="row">
						<div class="col-md-5 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>LATEST NEWS</h5>
							</div>
							<div class="footer-logo">
								<a href="#"><img src="1/images/logoback1.png" alt="footer logo"></a>
							</div>
							<div class="footer-intro">
								<p>Lorem ipsum dolor sit amet sectetuer
									esl adipiscing elit sed diam nonummy
									nibhi euismod tincidunt ut laoreet
									dolore amet magna.
								</p>
								<section class="social-section  style-2">
								<div class="col-md-12 col-sm-8 col-xs-12 social-links">
						<ul class="pull-left clearfix">
							<li class="item">
								<a class="" href="#"><i class="fa fa-twitter-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-linkedin-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-facebook-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class=" " href="#"><i class="fa fa-skype"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-pinterest-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-apple"></i></a>
							</li><!-- .ITEM -->
						</ul>
					</div>
				</section>
								
							</div>
						</div>
						
						<div class=" margin-bottom-30 col-md-3 " >
							<div class="footer-widget-title">
								<h5>Quik Links</h5>
							</div>
							<div class="footer-flikr-widget" >
								<ul class="wid" >
									<li><a href="#">Home</a></li>
									<li><a href="#">Find Work</a></li>
									<li><a href="#">Post Job</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Covis19 Services</a></li>
									<li><a href="#">Covid19 Post Job</a></li>
								</ul>
							</div>
						</div>
						<div class=" margin-bottom-30 col-md-3 " >
							<div class="footer-widget-title">
								<h5>Popular category</h5>
							</div>
							<div class="footer-flikr-widget" >
								<ul class="wid" >
									<li><a href="#">Covid19 Services</a></li>
									<li><a href="#">Medical</a></li>
									<li><a href="#">Home Renovation</a></li>
									<li><a href="#">Cooking</a></li>
									<li><a href="#">Water Supply</a></li>
									<li><a href="#">Consultancy</a></li>
									<li><a href="#">Labour</a></li>
									<li><a href="#">Mechanics</a></li>
									<li><a href="#">Maid</a></li>
									<li><a href="#">Beautician</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .container end -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row clearfix">
						
						<div class="col-md-12 col-sm-12 col-xs-12 pull-left margin-bottom-20">
							<div class="footer-copyright text-center">
								<p style="text-align: center;">&copy; 2021 All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!--================================MODAL WINDOWS FOR REGISTER AND LOGIN FORMS ===========================================-->
	<!-- Modal login form -->
	<div class = "modal fade" id = "login" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
	   <div class = "listing-modal-1 modal-dialog">
		  <div class = "modal-content">
			 <div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
				<h4 class = "modal-title" id = "myModalLabel"> LOGIN</h4>
			 </div>
			 <div class = "modal-body">
				<div class=" listing-login-form">
					<form action="#">
						<div class="listing-form-field">
							<i class="fa fa-user blue-1"></i>
							<input class="form-field bgwhite" type="text" name="user_name" placeholder="username" />
						</div>
						<div class="listing-form-field">
							<i class="fa fa-lock blue-1"></i>
							<input class="form-field bgwhite" type="password" name="user_pass" placeholder="password"  />
						</div>
						<div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
							<input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label>
							<label class="checkbox-lable">Remember me</label>
							<a href="#">forgot password?</a>
						</div>
						<div class="listing-form-field">
							<input class="form-field submit bgblue-1" type="submit"  value="login" />
						</div>
					</form>
					<div class="bottom-links">
						<p>not a member?<a href="#">create account</a></p>
					</div>
				</div>
			 </div>
		  </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Modal registration form -->
	<div class = "modal fade" id = "register1" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
	   <div class = "listing-modal-1 modal-dialog">
		  <div class = "modal-content">
			 <div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
				<h4 class = "modal-title" id = "myModalLabel2">Covid-19 job post</h4>
			 </div>





			 <div class = "modal-body">
				<div class=" listing-register-form">
					<form method="POST">
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="text" name="first_name" required placeholder="First name"  />
						</div>
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="text" name="last_name" required placeholder="Last name"  />
						</div>
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="text" name="mobile" required placeholder="Mobile Number" />
						</div>
					
						<select class="form-field bgwhite" type="text" placeholder="select your beverage" name="city" required style=" margin-bottom: 2%; width: 100%; height: 45px; border-color: #eee; color: gray;" >
							<option value="">City</option>
							<option value="Karachi">Karachi</option>
							<option value="Hyderabad">Hyderabad</option>
							<option value="Lahore">Lahore</option>
							<option value="Peshawer">Peshawer</option>
							<option value="other">other</option>

						</select>

						<div class="listing-form-field">
							<input class="form-field bgwhite" type="text" required name="address" placeholder="Address"  />
						</div>
						<div class="listing-form-field">
						<select class="form-field bgwhite" type="text" name="jobtype" style=" margin-bottom: 2%; width: 100%; height: 45px; border-color: #eee; color: gray;" >
							<option value="">Which type of job you post</option>
							<option value="Blood donation">Blood donation</option>
							<option value="Mask supply">Mask supply</option>
							<option value="All type of Medicine supply">All type of Medicine supply</option>
							<option value="oxygen Gas supply">oxygen Gas supply</option>
							<option value="other">other</option>

						</select>
					</div>
						
						<div class="listing-form-field">
							<textarea style="border-color: #eee; color: gray; width: 100%; height: 100px; word-wrap: break-word;" class="form-field bgwhite" type="text" name="jobdesc" placeholder="Description" ></textarea>
						</div>
					<!-- 	<div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
							<input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label>
							<label class="checkbox-lable">i agree with</label>
							<a href="#">terms & conditions</a>
						</div> -->
						<div class="listing-form-field" style="margin-top:3%;">
							<input class="form-field submit bgblue-1" type="submit" name="submit1"  value="post job" />
						</div>
					</form>
					
				</div>
			 </div>
		  </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!--================================JQuery===========================================-->
        
	<script type="text/javascript" src="1/js/jquery-1.11.3.min.js"></script>
	<script src="1/js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="1/js/jquery.easing.min.js"></script>
	<script src="1/js/modernizr.custom.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
        
	<script src="1/bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="1/js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="1/assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="1/assets/revolution_slider/js/revolution-slider.js"></script>
	
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="1/js/owl.carousel.js"></script>
    <script src="1/js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="1/js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="1/js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="1/js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="1/js/jquery.raty-fa.js"></script>
	<script src="1/js/rate.js"></script>
	
	<!--================================ testimonial ===========================================-->
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			
			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>	
	<script type="text/javascript" src="1/assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="1/assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="1/assets/testimonial/js/gallery.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="1/js/custom.js"></script>
    
</body>
</html>