<?php
$contac="";  
include('1/db.php');
if (isset($_POST['submit2'])) {
    $name=$_POST['user_name'];
    $number=$_POST['user_number'];
    $messagee=$_POST['user_message'];
    $type='public';
    
    $contactquery="insert into contact(name,phone,message,type)values('$name','$number','$messagee','$type')";
    $contactrun=mysqli_query($con,$contactquery);
    if ($contactrun) {
        $contac="<div class='alert alert-danger text-center'>admin response soon</div>";
    }
    else{
        echo "fail";
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

</head>

<style type="text/css">

nav ul li a{
    font-weight: bold !important;
    font-size: 15px !important;
    font-stretch:ultra-expanded; !important;
}


    
</style>

<body>
    <!-- <div class="preloader"><span class="preloader-gif"></span></div> -->
    <div class="theme-wrap clearfix">
        <!--================================responsive log and menu==========================================-->
        <div class="wsmenucontent overlapblackbg"></div>
        <div class="wsmenuexpandermain slideRight">
            <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
            <a href="../#" class="smallogo"><img src="1/images/logoback1.png" width="120" alt="" /></a>
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
                        <div class="logo pull-left"><a href="../index.html" title="Responsive Slide Menus"><img style="" src="1/images/logo3.png" alt="" /></a></div>
                        <ul class="mobile-sub wsmenu-list pull-right">
                            <li><a href="index.php" class="">Home</a>
                            <li><a href="1/clogin.php">Find Work <span class="arrow"></span></a></li>
                            <li><a href="1/login.php">Post Job <span class="arrow"></span></a></li>
                            <li><a href="1/covid.php" class="">Covid-19 Services</a>

                           <!--  <li><a href="1/signup.php"> About Us <span class="arrow"></span></a>

                            </li> -->
                            <li><a href="" class="register" data-toggle="modal" data-target="#register">Contact Us <span class="arrow"></span></a></li>
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
                        <div class="modal-footer"><a href="../customerlogout.php" class="btn btn-primary" style="margin-left: -7%; border-color: #08c2f3; background-color:#08c2f3;">Logout</a>

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
                                <a href="../#">forgot password?</a>
                            </div>
                            <div class="listing-form-field">
                                <input class="form-field submit bgblue-1" type="submit" value="login" />
                            </div>
                        </form>
                        <div class="bottom-links">
                            <p>not a member?<a href="../#">create account</a></p>
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
                    <h4 class="modal-title" id="myModalLabel2">Leave Message</h4>
                </div>
                <div class="modal-body">
                    <div class=" listing-register-form">
                       <form method="POST">
                            <div class="listing-form-field">
                                <input class="form-field bgwhite" type="text" name="user_name" placeholder="name" />
                            </div>
                            <div class="listing-form-field">
                                <input class="form-field bgwhite" type="number" name="user_number" placeholder="phone number" />
                            </div>
                            <div class="listing-form-field">
                                <textarea class="form-field bgwhite" name="user_message" placeholder="Message" style="height: 100px; width: 100%; border-color: #eee;" > </textarea>
                            </div>
                            
                          
                            <div class="listing-form-field" style="margin-top: 3%;font-size: 18px; font-weight: bold;">
                                <input class="form-field submit bgblue-1" name="submit2" type="submit" value="Send Message" />
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--================================JQuery===========================================-->


</body>

</html>