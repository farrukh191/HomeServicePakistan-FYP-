<?php session_start(); ?>
<?php  

include('db.php');

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootdey.com/template_demo/peopleday/messages-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 12:30:35 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.html">
    <link rel="icon" type="image/png" href="../assets/img/favicon.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>People-Day</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="fonts1/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="assets/assets/css/messages.css" rel="stylesheet" />

    <style type="text/css">
    	.boldleft{
    		text-align: left !important;
    		font-weight: bold;
    		/*color: #428dbc;*/
    	}

    	.boldleft1{
    		text-align: left !important;
    		font-weight: bold;
    	}

    	.leftxt{
    		text-align: left !important;
    	}
    	.clearfix p{
    		text-align: left;
    	}
    	.header .pull{
    		margin-top: -3% !important;
    		font-size: 10px;
    	}
    	.page-heading {
  position: relative !important;
  padding: 30px 40px !important;
  margin: -45px -20px 25px !important;
  border-bottom: 1px solid #d9d9d9 !important;

 /* background-color: #f2f2f2 !important;
  background-color: #1b334b !important;*/
  background-image: url('images/slider/slide-2.jpg');
}


.chng{
	width: 90%; 
	margin:-4% auto !important; 
	height: 220px;
}

@media (max-width: 800px) {
  .chng{
    width: 100%;
  }
}
    </style>


</head>


<body class="profile-page">

	<?php include('Navbar.php'); ?>

    <!-- Navbar -->
    
    <!-- End Navbar -->

 <?php include('providerheader.php'); ?>







    <main class="container-section" style="width: 90%; margin:5% auto !important; ">
        <article> 
            <div class="wrapper">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

              
					      
    <!-- Begin .page-heading -->
   
               
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 bg-white" style="margin-left:0;">
                            <div class="border-bottom padding-sm members-title">
                                Member
                            </div>
                            
                            <!-- =============================================================== -->
                            <!-- member list -->
                            <ul class="friend-list" style="margin-left:5px;">
                                <li class="active bounceInDown">
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-1.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">John Doe</p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Hello, Are you there?</div>
                                        <small class="time text-muted">Just now</small>
                                        <small class="chat-alert badge badge-danger">1</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-2.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Jane Doe </p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">5 mins ago</small>
                                        <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
                                    </a>
                                </li> 
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-3.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Kate</p>
                                        </div>
                                        <div class=" leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">Yesterday</small>
                                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                    </a>
                                </li>  
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-5.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Kate</p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">Yesterday</small>
                                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                    </a>
                                </li>     
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-6.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Kate</p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">Yesterday</small>
                                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                    </a>
                                </li>        
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-8.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Kate</p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">Yesterday</small>
                                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                    </a>
                                </li>          
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-9.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Kate</p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">Yesterday</small>
                                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="img/Friends/guy-1.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft">Jane doe</p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Lorem ipsum dolor sit amet.</div>
                                        <small class="time text-muted">5 mins ago</small>
                                    <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
                                    </a>
                                </li>                 
                            </ul>
                        </div>
                        
                        <!--=========================================================-->
                        <!-- selected chat -->
                        <div class="col-md-8 bg-white " style="margin-left:0px; width: 100%; box-sizing: border-box;">
                            <div class="chat-message">
                                <ul class="chat" >
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="img/Friends/guy-1.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">John Doe</p>
                                                <p class="pull-right pull text-muted" ><i class="fa fa-clock-o"></i> 12 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">Sarah</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                                            </p>
                                        </div>
                                    </li>
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="img/Friends/guy-1.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">John Doe</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">Sarah</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                                            </p>
                                        </div>
                                    </li>                    
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="img/Friends/guy-1.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">John Doe</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">Sarah</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">Sarah</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</p>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                                            </p>
                                        </div>
                                    </li>                    
                                </ul>
                            </div>
                            <div class="chat-box bg-white">
                                <div class="input-group" style="width: 104.5%; margin-left: -2%;">
                                    <input class="form-control border no-shadow no-rounded" style="height: 45px;" placeholder="Type your message here">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-send">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div><!-- /input-group --> 
                            </div>            
                        </div>        
                    </div>
                </div>
            </div>
        </article>
    </main>



   <?php include('footer.php'); ?>


</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js" type="text/javascript"></script>

<!-- Mirrored from www.bootdey.com/template_demo/peopleday/messages-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 12:30:35 GMT -->
</html>