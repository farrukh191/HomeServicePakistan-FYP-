<?php  
session_start();
include('db.php');


echo $cemail=$_SESSION['cemail'];
    echo $cpass=$_SESSION['cpassword']; echo "<br>";
    echo $cid=$_SESSION['CcustomerId']; echo "<br>";
   


    echo $jobid1=$_SESSION['customerjobid']; echo "<br>";




        echo $users=mysqli_query($con,"select * from customer_signup where customer_id='".$cid."'")
        or die("Failed to query database".mysqli_error());
        $user=mysqli_fetch_assoc($users);


?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootdey.com/template_demo/peopleday/messages-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 12:30:35 GMT -->
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <link href="../assets/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="../assets/assets/css/messages.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
  background-image: url('../images/slider/slide-2.jpg');
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
@media (max-width: 800px) {
  .stati{
  	margin-top: -15%;
  }
}

    </style>


</head>


<body class="profile-page">


    <!-- Navbar -->
    
    <!-- End Navbar -->









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
            <h3>                    
            <p>Hi <?php echo $user['first_name'];  ?></p>
            <input type="text" name="fromUser" id="fromUser" value="<?php echo $user['customer_id'] ?>" hidden />
            <input type="text" name="job_id" id="job_id" value="<?php echo $jobid1 ?>" hidden />
            <p>send message to :</p></h3>

                                Member Hi <?php echo $user['first_name'];  ?>
                                <p>send message to :</p></h3>
                            </div>
                            
                            <!-- =============================================================== -->
                            <!-- member list -->


<?php  
                $msgs=mysqli_query($con,"select * from jobapplied inner join provider_signup on jobapplied.provider_id=provider_signup.provider_id where jobapplied.customer_id='$cid' and jobapplied.job_id='$jobid1' ")
                    or die("Failed to query database".mysql_error());
                    while ($msg=mysqli_fetch_assoc($msgs)) {
                        echo '
                            <li><a href="?toUser='.$msg['provider_id'].'">'.$msg['p_first'].' '.$msg['p_last'].'</a></li>
                        ';
                        ?>
                        <ul class="friend-list" style="margin-left:5px;">
                                <li class="active bounceInDown">
                                    <a href="#" class="clearfix">
                                        <img src="../img/Friends/guy-1.jpg" alt="" class="img-circle">
                                        <div class="friend-name">   
                                            <p class="boldleft"><a href="?toUser=<?php echo $msg['provider_id'] ?>"><?php echo $msg['p_first'].' '.$msg['p_last'] ?></a></p>
                                        </div>
                                        <div class="leftxt last-message text-muted">Hello, Are you there?</div>
                                        <small class="time text-muted">Just now</small>
                                        <small class="chat-alert badge badge-danger">1</small>
                                    </a>
                                </li>
                                                
                            </ul>
                        <?php
                    }
                    
                ?>





                            
                        </div>
                        


                        <!--=========================================================-->
                        <!-- selected chat -->
                        <div class="col-md-8 bg-white " style="margin-left:0px; width: 100%; box-sizing: border-box;">



<h4>
 <?php  

                                            if (isset($_GET['toUser'])) {
                                                $userName=mysqli_query($con,"select * from provider_signup inner join jobapplied on jobapplied.provider_id=provider_signup.provider_id where jobapplied.customer_id='$cid' and jobapplied.job_id='$jobid1' and provider_signup.provider_id='".$_GET['toUser']."'")
                                                or die("Failed to the database".mysql_error());
                                                $uName=mysqli_fetch_assoc($userName);
                                                echo '<input type="text" value='.$_GET['toUser'].' id="toUser" name="toUser"  hidden  />';
                                                echo $uName['p_first'].' '.$uName['p_last'];
                                            
                                            }
                                            else{
                                                $userName=mysqli_query($con,"select * from provider_signup inner join jobapplied on jobapplied.provider_id=provider_signup.provider_id where jobapplied.customer_id='$cid' and jobapplied.job_id='$jobid1'")
                                                or die("Failed to the database".mysql_error());
                                                $uName=mysqli_fetch_assoc($userName);
                                                $_SESSION['toUser'] = $uName['provider_id'];
                                                echo '<input type="text" value='.$_SESSION['toUser'].' id="toUser" name="toUser"  hidden  />';
                                                echo $uName['p_first'].' '.$uName['p_last'];
                                            }
                                    ?>

</h4>



                            <div class="chat-message" id="msgBody">
                                <ul class="chat" >



<?php  

                        if (isset($_GET['toUser'])) {
                             $sel="select * from message where (Fromuser ='".$cid."' AND Touser='".$_GET['toUser']."') OR (Fromuser ='".$_GET['toUser']."' AND Touser='".$cid."')";
                            $chats=mysqli_query($con,$sel)
                        
                            or die("Failed to the database".mysql_error());

                            while ($chat=mysqli_fetch_assoc($chats)) {
                                

                                if ($chat['Fromuser'] == $cid) {
                                   
                                            ?>
                                        
                                    <li class="right clearfix" style="width: 60%; box-sizing: border-box; margin-left: 40%;">
                                        <span class="chat-img pull-right">
                                            <img src="../img/Friends/guy-3.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">You</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</p>
                                            </div>
                                            <p>
                                                <?php echo $chat['message']; ?> 
                                            </p>
                                        </div>
                                    </li>
                                            <?php
                                        }


                                    else{
                                           
                                            ?>
                                               <li class="left clearfix"  style="width: 60%; ">
                                        <span class="chat-img pull-left">
                                            <img src="../img/Friends/guy-1.jpg" alt="User Avatar">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <p class="primary-font boldleft1">John Doe</p>
                                                <p class="pull-right pull text-muted" ><i class="fa fa-clock-o"></i> 12 mins ago</p>
                                            </div>
                                            <p>
                                                <?php echo $chat['message']; ?>
                                            </p>
                                        </div>
                                    </li>
                                            <?php
                                    }




                            }
                            
                        }

                    ?>







                                    
                                    
                                            
                                </ul>
                            </div>
                            <div class="chat-box bg-white">
                                <div class="input-group" style="width: 104.5%; margin-left: -2%;">
                                    <input class="form-control border no-shadow no-rounded"  id="message" style="height: 45px;" placeholder="Type your message here">
                                    <span class="input-group-btn">
                                        <button type="button" id="send"  class="btn btn-primary btn-send">
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



   


</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>

<!-- Mirrored from www.bootdey.com/template_demo/peopleday/messages-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 12:30:35 GMT -->









<script type="text/javascript">
    
$(document).ready(function(){

    $("#send").on("click",function(){

        $.ajax({
            url:"insertMessage1.php",
            method:"POST",
            data:{
                job_id: $("#job_id").val(),
                fromUser: $("#fromUser").val(),
                toUser: $("#toUser").val(),
                message: $("#message").val()

            },

            dateType:"text",
                success:function(data)
                {
                    $("#message").val("");
                    // alert(data);
                    // alert($("#message").val(""));
                }


        });

    });

    setInterval(function(){
        $.ajax({
            url:"realTimeChat.php",
            method:"POST",
            data:{
                fromUser: $("#fromUser").val(),
                toUser: $("#toUser").val()
            },
            dateType:"text",
                success:function(data)
                {
                    $("#msgBody").html(data);
                }
        });
    },700);
    
});


</script>





</html>