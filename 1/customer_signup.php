<?php include('db.php'); ?>

<?php  
echo "string";

	if (isset($_POST['customer_submit']) and isset($_FILES['imgfile'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$country=$_POST['country'];
		$city=$_POST['city'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$phone=$_POST['phone'];
		$date=$_POST['date'];
		$gender=$_POST['gender'];
		$uploadfile=$_FILES["imgfile"]["name"];
		$uploadfile_temp=$_FILES["imgfile"]["tmp_name"];
		
		$move=move_uploaded_file($uploadfile_temp, "C:/xampp/htdocs/farrukh/farrukh/FYP_PROJECT/Assets1/customer/$uploadfile/");

		if ($password == $cpassword and !$password !== "" and $cpassword !== "" ) {
			$insert="insert into customer_signup(first_name,last_name,email,address,country,city,password,cpassword,phone,gender,file,date)values('$fname','$lname','$email','$address','$country','$city','$password','$cpassword','$phone','$gender','$uploadfile','$date')";
				$runquery=mysqli_query($con,$insert);
				if ($runquery) {
					header('location:login.php');
        			exit();
				}
				else{
					header('location:customer_signup.php');
        			exit();
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
	
	<title>Listing - Classified Listing HTML Template</title>
	
    <!--================================FAVICON================================-->
	
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
		
</head>
<body>
	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
		</div>
		<!--================================HEADER==========================================-->
		<div class="header">
			<div class="top-toolbar"><!--header toolbar-->
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12 pull-left">
							<div class="social-content">
								<ul class="social-links">
									<li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a class="youtube" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
									<li><button class = "login" data-toggle = "modal" data-target = "#login">login</button></li>
									<li><button class = "register" data-toggle = "modal" data-target = "#register">register</button></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
							<div class="top-contact-info">
								<ul>
									<li class="toolbar-email"><i class="fa fa-envelope-o"></i> Support@designsvilla.com</li>
									<li class="toolbar-contact"><i class="fa fa-phone"></i> +92 123 456 7890</li>
									<li><a class="toolbar-new-listing" href="#"><i class="fa fa-plus-circle"></i> Add Listing</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--header toolbar end-->
			<div class="nav-wrapper"><!--main navigation-->
				<div class="container">
					<!--Main Menu HTML Code-->
					<nav class="wsmenu slideLeft clearfix">
						<div class="logo pull-left"><a href="index.html" title="Responsive Slide Menus"><img src="images/logo.png" alt="" /></a></div>
						<ul class="mobile-sub wsmenu-list pull-right">
							<li><a href="index.html" class="">Home</a>
								<ul class="wsmenu-submenu">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
									<li><a href="index-3.html">Home 3</a></li>
									<li><a href="index-4.html">Home 4</a></li>
									<li><a href="index-5.html">Home 5</a></li>
									<li><a href="index-6.html">Home 6</a></li>
									<li><a href="index-7.html">Home 7</a></li>
									<li><a href="index-8.html">Home 8</a></li>
								</ul>
							</li>
							<li><a href="pricing.html" class="">Pricing</a>
								<ul class="wsmenu-submenu">
									<li><a href="pricing.html">Pricing 1</a></li>
									<li><a href="pricing-2.html" class="">Pricing 2</a></li>
								</ul>
							</li>
							<li><a href="category.html">categories <span class="arrow"></span></a></li>
							<li><a href="listing-archive.html">listings <span class="arrow"></span></a></li>
							<li><a href="#">Shortcodes <span class="arrow"></span></a>
								<div class="megamenu clearfix">
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-rs-slider1.html">Revolution Slider</a></li>
										<li><a href="sc-rs-slider2.html">Post Slider</a></li>
										<li><a href="sc-map.html">Geo Location Map</a></li>
										<li><a href="sc-services.html">Services</a></li>
										<li><a href="sc-locations.html">Locations</a></li>
									</ul>
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-category.html">Categories</a></li>
										<li><a href="sc-listing.html">Listings</a></li>
										<li><a href="sc-feature-carousel.html">Feature Listing</a></li>
										<li><a href="sc-testimonial.html">Testimonial</a></li>
									</ul>
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-funfacts.html">FunFacts Counter</a></li>
										<li><a href="sc-pricing.html">Pricing Tables</a></li>
										<li><a href="sc-blog.html">Blog Style</a></li>
										<li><a href="sc-callout.html">Callout</a></li>
									</ul>
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-sidebar.html">SideBars</a></li>
										<li><a href="sc-social.html">Social Styles</a></li>
										<li><a href="sc-partner.html">Partners</a></li>
										<li><a href="sc-search-form.html">Search Form</a></li>
									</ul>
								</div>
							  </li>
							<li><a href="#">pages <span class="arrow"></span></a>
								<ul class="wsmenu-submenu">
									<li><a href="about.html">Features <span class="arrow"></span></a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="single.html">Blog Single</a></li>
									<li><a href="single-listing.html">listing Single</a></li>
									<li><a href="401.html">Error 401</a></li>
									<li><a href="403.html">Error 403</a></li>
									<li><a href="404.html">Error 404</a></li>
									
								</ul>
							</li>
						  <li><a href="contact.html">Customer Account Detail<span class="arrow"></span></a></li>
						</ul>
					</nav>
				</div>
			</div><!--main navigation end-->
		</div><!-- header end -->
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">Customer Create Account</h4>
		</div><!-- section title end -->
		<!--================================MAP SECTION==========================================-->
	
		
		<!--================================CONTACT===========================================-->
		<section id="contact-form" class="margin-top-50 margin-bottom-40">
			<div class="container">
				<!-- .row .info-box-wrap end -->
				
				<form class="contact-form-wrap margin-top-30" method="POST" enctype="multipart/form-data"><!--.contact-form-wrap -->
					<div id="contact_form" class="row contact-form"><!-- .row .contact-form -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="FIRST NAME" name="fname" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="LAST NAME" name="lname" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="email" placeholder="EMAIL ADDRESS" name="email" required="required">
						</div><!-- form-field  end-->
						
					<!-- .row .contact-form -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="ADDRESS" name="address" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="COUNTRY" name="country" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="CITY" name="city" required="required">
						</div>
						<!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="PASSWORD" name="password" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="CONFIRM PASSWORD" name="cpassword" required="required">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="text" placeholder="PHONE NUMBER" name="phone" required="required">
						</div><!-- form-field  end-->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							<input class="input-field" type="date" placeholder="" style="height: 64px;" name="date" required="required">
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
							
                                        <div class="input-field" style="width: 100%; margin-bottom: 3%; background-color: gray;">
                                            
                                            <div class="form-button" style="width: 100%;">
                                                <select class="nice-select" name="gender" style="width: 100%; height: 64px; color:#777; background: #fff;
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
							<input class="contact-btn bgblue-1" type="submit" value="SUBMIT MESSAGE" name="customer_submit" >
						</div><!-- form-btn  end-->
						<div id="contact_results"></div>
					</div>
				</form><!--.contact-form-wrap end -->
				
				<!--<div class="contact-form-wrap margin-top-30">
					<form class="row contact-form mailchimp">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input class="input-field" type="text" placeholder="FIRST NAME" name="fname">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input class="input-field" type="text" placeholder="LAST NAME" name="lname">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input class="input-field" type="text" placeholder="EMAIL ADDRESS" name="email">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<input class="input-field" type="text" placeholder="WEBSITE" name="website">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<textarea class="input-field" type="text" placeholder="MESSAGE" name="message"></textarea>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
							<input class="contact-btn bgblue-1" type="text" value="SUBMIT MESSAGE">
						</div>
					</form>
				</div>-->
			</div><!-- container end -->
		</section>
		
		<!--================================SOCIAL  SECTION==========================================-->
		
		
		<!--================================ FOOTER AREA ==========================================-->
		
		<footer class="footer style-1 padding-top-60 bg222">
			<div class="container">
				<div class="footer-main padding-bottom-10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>LATEST NEWS</h5>
							</div>
							<div class="footer-logo">
								<a href="#"><img src="images/footer-logo.png" alt="footer logo"></a>
							</div>
							<div class="footer-intro">
								<p>Lorem ipsum dolor sit amet sectetuer
									esl adipiscing elit sed diam nonummy
									nibhi euismod tincidunt ut laoreet
									dolore amet magna.
								</p>
								<a href="about.html">read more</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>recent posts</h5>
							</div>
							<div class="footer-recent-post-widget">
								<div class="footer-recent-post clearfix">
									<div class="footer-recent-post-figure">
										<img src="images/news/thumb/100/01.jpg" alt="recent post"/>
									</div>
									<div class="footer-recent-post-content">
										<div class="footer-recent-post-title">
											<a href="#">Hello Classified Listing</a>
										</div>
										<div class="footer-recent-post-disc">
											<p>Welcome to listing</p>
										</div>
										<div class="footer-recent-post-caption">
											<p class="date">07 Sep, 2015</p>
										</div>
									</div>
								</div>
								<div class="footer-recent-post clearfix">
									<div class="footer-recent-post-figure">
										<img src="images/news/thumb/100/01.jpg" alt="recent post"/>
									</div>
									<div class="footer-recent-post-content">
										<div class="footer-recent-post-title">
											<a href="#">Hello Classified Listing</a>
										</div>
										<div class="footer-recent-post-disc">
											<p>Welcome to listing</p>
										</div>
										<div class="footer-recent-post-caption">
											<p class="date">07 Sep, 2015</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>Flikr Photos</h5>
							</div>
							<div class="footer-flikr-widget">
								<ul class="flikr-list clearfix">
									<li><a href="#"><img src="images/news/flikr/01.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="images/news/flikr/02.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="images/news/flikr/03.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="images/news/flikr/04.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="images/news/flikr/05.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="images/news/flikr/06.jpg" alt="flikr photo"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .container end -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-8 col-sm-12 col-xs-12 pull-right margin-bottom-20">
							<nav class="footer-menu wsmenu clearfix">
								<ul class="wsmenu-list pull-right">
								  <li><a href="#" class="">Home</a></li>
								  <li><a href="#">features <span class="arrow"></span></a></li>
								  <li><a href="#">categories <span class="arrow"></span></a></li>
								  <li><a href="#">listings <span class="arrow"></span></a></li>
								  <li><a href="#">pages <span class="arrow"></span></a></li>
								  <li><a href="#">Contact Us <span class="arrow"></span></a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 pull-left margin-bottom-20">
							<div class="footer-copyright">
								<p>&copy; 2016 All Rights Reserved @ <a href="http://designsvilla.com" target="_blank">Designsvilla</a></p>
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
	<div class = "modal fade" id = "register" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
	   <div class = "listing-modal-1 modal-dialog">
		  <div class = "modal-content">
			 <div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
				<h4 class = "modal-title" id = "myModalLabel2">registration</h4>
			 </div>
			 <div class = "modal-body">
				<div class=" listing-register-form">
					<form action="#">
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="text" name="user_name" placeholder="name"  />
						</div>
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="email" name="user_email" placeholder="email" />
						</div>
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="password" name="user_password" placeholder="password"  />
						</div>
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="confirm password" />
						</div>
						<div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
							<input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label>
							<label class="checkbox-lable">i agree with</label>
							<a href="#">terms & conditions</a>
						</div>
						<div class="listing-form-field">
							<input class="form-field submit bgblue-1" type="submit"  value="create account" />
						</div>
					</form>
					<div class="bottom-links">
						<p>login with social network</p>
						<div class="listing-form-social">
							<ul>
								<li><a class=" bgblue-4 white" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class=" bgblue-1 white" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class=" bgred-2 white" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			 </div>
		  </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!--================================JQuery===========================================-->
        
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
        
	<script src="bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>
	
	<!--================================MAP===========================================-->
		
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM"></script>
	<script type="text/javascript" src="js/map.js"></script>
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="js/owl.carousel.js"></script>
    <script src="js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="js/jquery.raty-fa.js"></script>
	<script src="js/rate.js"></script>
	
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
	<script type="text/javascript" src="assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/gallery.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>