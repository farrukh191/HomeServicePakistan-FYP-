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
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
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

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <!--================================SLIDER REVOLUTION =========================================-->

    <link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />

    <style type="text/css">
        nav ul li a{
            font-weight: bold;
        }
    </style>

</head>

<body>
    <!-- <div class="preloader"><span class="preloader-gif"></span></div> -->
    <div class="theme-wrap clearfix">
        <!--================================responsive log and menu==========================================-->
        <div class="wsmenucontent overlapblackbg"></div>
        <div class="wsmenuexpandermain slideRight">
            <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
            <a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
        </div>
        <!--================================HEADER==========================================-->
        <div class="header">
            <div class="top-toolbar">
                <!--header toolbar-->

            </div>
            <!--header toolbar end-->
            <div class="nav-wrapper">
                <!--main navigation-->
                <div class="container">
                    <!--Main Menu HTML Code-->
                    <nav class="wsmenu slideLeft clearfix">
                        <div class="logo pull-left"><a href="index.html" title="Responsive Slide Menus"><img src="images/logo2.png" alt="" /></a></div>
                        <ul class="mobile-sub wsmenu-list pull-right">
                            <li><a href="customerdashboard.php" class="">Dashboard</a></li>
                            <li><a href="jobposting.php" class="">Post Jobs</a>
                            
                            </li>
                            <li><a href="customerSeejobs.php" class="">Your Jobs proposal</a></li>


                            <li><a href="#"> <span class="arrow"></span>profile</a>
                                <ul class="wsmenu-submenu">
                                    <li><a href="custoEditprofile.php">Edit profile <span class="arrow"></span></a></li>
                                    <li><a href="" data-toggle="modal" data-target=" #logoutpop">Logout</a></li>


                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!--main navigation end-->
        </div><!-- header end -->

        <div class="sc-page padding-top-70 padding-bottom-70">
            <!--sc-page-->


        </div>
        <!--/sc-page-->
        <!--================================ FOOTER AREA ==========================================-->







        <?php // include('footer.php'); 
        ?>
        <!---- when press logout button this modal popup  --->

        <div class="modal fade bs-example-modal-sm" id="logoutpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="listing-modal-1 modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="width: 100%; height:120px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"> LOGOUT <i class="fa fa-lock"></i></h4>

                        <div class="modal-body" style="font-size: 15px; padding:30px 0px 10px 0px;"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
                        <div class="modal-footer"><a href="customerlogout.php" class="btn btn-primary" style="margin-left: -7%; border-color: #08c2f3; background-color:#08c2f3;">Logout</a>

                            <button class="btn btn-default" data-dismiss="modal" data-target=".bs-example-modal-sm">Cancel</button>
                        </div>


                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>










    </div>



    <!--================================MODAL WINDOWS FOR REGISTER AND LOGIN FORMS ===========================================-->
    <!-- Modal login form -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="listing-modal-1 modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"> LOGIN</h4>
                </div>
                <div class="modal-body">
                    <div class=" listing-login-form">
                        <form action="#">
                            <div class="listing-form-field">
                                <i class="fa fa-user blue-1"></i>
                                <input class="form-field bgwhite" type="text" name="user_name" placeholder="username" />
                            </div>
                            <div class="listing-form-field">
                                <i class="fa fa-lock blue-1"></i>
                                <input class="form-field bgwhite" type="password" name="user_pass" placeholder="password" />
                            </div>
                            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
                                <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label>
                                <label class="checkbox-lable">Remember me</label>
                                <a href="#">forgot password?</a>
                            </div>
                            <div class="listing-form-field">
                                <input class="form-field submit bgblue-1" type="submit" value="login" />
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
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="listing-modal-1 modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel2">registration</h4>
                </div>
                <div class="modal-body">
                    <div class=" listing-register-form">
                        <form action="#">
                            <div class="listing-form-field">
                                <input class="form-field bgwhite" type="text" name="user_name" placeholder="name" />
                            </div>
                            <div class="listing-form-field">
                                <input class="form-field bgwhite" type="email" name="user_email" placeholder="email" />
                            </div>
                            <div class="listing-form-field">
                                <input class="form-field bgwhite" type="password" name="user_password" placeholder="password" />
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
                                <input class="form-field submit bgblue-1" type="submit" value="create account" />
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

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <!-- map with geo locations -->

    <script type="text/javascript" src="js/jquery.mapit.js"></script>
    <script src="js/initializers.js"></script>

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