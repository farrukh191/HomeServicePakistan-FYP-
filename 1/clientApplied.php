<?php  
    session_start();
    include('error.php');
    include('db.php');
     $cemail=$_SESSION['cemail'];
     $cpass=$_SESSION['cpassword']; 
     $cid=$_SESSION['CcustomerId']; 
    if (!$cpass) {
    header('location:login.php?Access Denied..');
}
if (isset($_GET['jobid'])) {
     $jobid1 = $_GET['jobid'];

    $_SESSION['customerjobid']=$jobid1;
}

?>






<!DOCTYPE html>
<html>
<head>
    <link href='jobapplied/style.css' rel='stylesheet' type='text/css'>
    <link href='jobapplied/style1.css' rel='stylesheet' type='text/css'>
<script src="jobapplied/jquery.min.js"></script>
<script>
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    var keywordcity = $('#keywordcity').val();
    var sortBy = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: 'jobapplied/getData.php',
        data:'page='+page_num+'&keywords='+keywords+'&keywordcity='+keywordcity+'&sortBy='+sortBy,
        beforeSend: function () {
            $('.loading-overlay').show();
        },
        success: function (html) {
            $('#posts_content').html(html);
            $('.loading-overlay').fadeOut("slow");
        }
    });
}
</script>



<style type="text/css">
    





</style>


</head>
<body>

    


    
<?php   include('customerAssets/navbar.php'); ?>

<!-- <div style="margin-top: -10%;">
    <?php  // include('customerAssets/header.php') ?>
</div> -->

<!-- <div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"> section title -->
        <!--    <h4 class="white">see your jobs</h4>
        </div> --><!-- section title end -->
<!--================================PAGE TITLE==========================================-->
        








 <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- Team -->




























        <section class="aside-layout-section padding-top-70 padding-bottom-40"  >
            <div class="container" style=" margin-top: -10%;"><!-- section container -->
                <!-- content area column -->
                        <div class="blog-section padding-bottom-40">
                            <div class="blog-section ">




                            <div class="sidebar-widget shadow-1" style="margin-top: -5%;">
                                <div class="sidebar-widget-content search-bar  clearfix" >
                                    <div class="sidebar-search-wrap">
                                        <h5>Search Here</h5>
                                        <form action="#" >
                                             <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                            <input type="text" id="keywords" class="sidebar-search-input" placeholder="Type keywords to filter posts" name="search" onkeyup="searchFilter()" style=" width: 100%; height: 50px; border:1px solid #ebebeb;" />
                                            </div>
                                             <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                            <input type="text" id="keywordcity" class="sidebar-search-input" placeholder="Search by city" name="search" onkeyup="searchFilter()"  style="border:1px solid #ebebeb; width: 100%; height: 50px;" />
                                            </div>

                                             <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                <select id="sortBy" onchange="searchFilter()" style="border-color: #ebebeb; width: 90%; height: 50px;" >
        <option value="">Sort By</option>
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
</div>
                                        </form>
                                    </div>
                                </div>
                            </div>



 <div id="posts_content">


    <?php
    //Include pagination class file
    include('jobapplied/Pagination.php');
    
    //Include database configuration file
    include('jobapplied/dbConfig.php');
    
    $limit = 6;

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as Apply_id FROM jobapplied INNER JOIN provider_signup ON jobapplied.provider_id = provider_signup.provider_id WHERE customer_id='$cid' AND job_id='$jobid1'");
    $resultNum =  mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['Apply_id'];
    
    //initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query =mysqli_query($db,"SELECT * FROM jobapplied INNER JOIN provider_signup ON jobapplied.provider_id = provider_signup.provider_id where customer_id ='$cid' and job_id='$jobid1' ORDER BY Apply_id DESC LIMIT $limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row =mysqli_fetch_assoc($query)){ 
                $postID = $row['Apply_id'];
        ?>
                <div class="col-xs-12 col-sm-6 col-md-4" style="">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover'); " >
                    <div class="mainflip" style=" ">
                        <div class="frontside">
                            <div class="card" style="border: 1px solid #d6e0de; background-color: white; padding-top: 5%;">
                                <div class="card-body text-center" >
                                    <img class="img-fluid" src="Assets1/provider/<?php echo $row['p_pics']; ?>" style="width: 120px; border-radius: 60px; height: 120px; object-fit: cover; background-repeat: no-repeat; text-align: center; margin: 0 auto;" />
                                    
                                    
                                    <h4 class="card-title"><?php echo $row["p_first"]; ?> <?php echo $row["p_last"]; ?></h4>
                                    <p class="card-text">
                                       <h6 style="padding-bottom: 5%;">    <?php echo $row['p_profession']; ?> </h6><br>
                                    </p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside"  style="width: 100%;">
                            <div class="card">
                                <div class="card-body text-center mt-4" >
                                    <h4 class="card-title"><?php echo $row["p_first"]; ?> <?php echo $row["p_last"]; ?></h4>
                                    <div style="position: absolute; top: 25%; width: 100%;">
                        
                                    <p class="card-text" >
                                        
                                          <?php   $row["customer_id"]; ?> 
                                          <?php  $row["job_id"]; ?> 
                                          <?php 
                                          $proid = $row["provider_id"]; 
                                          
                                          ?> 
                                    <h6 style="padding-bottom: 5%;">    <?php echo $row['p_profession']; ?> </h6><br>
                                     <h6 style="padding-bottom: 5%;">  <?php echo $row["p_city"]; ?> </h6>
                                    </p>

                                </div>
                                    <ul class="list-inline" style="left: 11%; position: absolute; width: 80%; top: 70%; ">
                                       
                                       
                                        <li class="list-inline-item" style="float: left;">
                                            <a class="social-icon text-xs-center"  href="chat/chatbox1.php">
                                                <button class="btn btn-primary">Chat</button> 
                                            </a>
                                        </li>
                                        <li class="list-inline-item" style="float: left;">
                                           
                                               
                                                <!-- <a href="jjid=<?php echo $row["provider_id"]; ?> " id="<?php echo $proid; ?>" style="color: white!important; font-size: 14px;" class="btn btn-danger" data-toggle="modal" data-target=" #logoutpop1">Report</a> -->
                                           
                        <?php  

$hideq="select * from reporting where provider_id='$proid' and customer_id='$cid' and job_id='$jobid1'";
$hidepro=mysqli_query($con,$hideq);
$hidecount=mysqli_num_rows($hidepro);
$hidecount;
if ($hidecount > 0) {
    ?>
    <p style="color: red; position: absolute; left: 90px;">Reported</p>
    <?php
}
else{
   ?>

<input style="width:30%; position: absolute; left: 90px; " id="<?php echo $proid; ?>" value="report" data-toggle="modal" data-target=" #logoutpop1" class="btn btn-danger">

   <?php
}
                        ?>

<script type="text/javascript">
var reply_click = function()
{
    //alert(this.id);
    document.getElementById("demo").value = this.id;
    
}

document.getElementById('<?php echo $proid; ?>').onclick = reply_click;
</script>                 </li>
                                        <li class="list-inline-item" style="float: right;">

                                            <?php  


                                            $sle="SELECT * FROM jobconfirmed  where job_id='$jobid1' && cust_id='$cid' && prov_id='$proid' && confirmed='confirmed'";
                                            $slequery=mysqli_query($con,$sle);
                                            $countt=mysqli_num_rows($slequery);
                                            if ($countt > 0) {
                                                ?>
                                                
                                                <p class="social-icon text-xs-center text-success font-weight-bold">Confirmed..</p>


                                                <?php
                                            }
                                            else{
                                                ?>
                                                <a class="social-icon text-xs-center"  href="jobconfirm.php?prid=<?php echo $row["provider_id"]; ?>">
                                                <button class="btn btn-primary">Confirm</button> 


                                            </a>
                                                <?php
                                            }

                                            ?>

                                            
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <?php } ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
    <?php } ?>
    </div>
                                
                            </div>
                            
















                            




                        





                            
                            
                            
                        
                    <!-- content area end -->
                            
                </div>
            </div><!-- section container end -->
        </section>
    



<?php include('footer.php'); ?>


  <div class="modal fade bs-example-modal-sm" id="logoutpop1" style="position: absolute; left: -15%;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


            <div class="listing-modal-1 modal-dialog">
                <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">×</button> 
                    <h4 class="modal-title">Notification</h4>  

                    <!-- ye id=demo ko kuch bhi krna h bht hi mushkil se howa h  --->
                    
                                                                            
                </div>

 <?php  

if (isset($_POST['reportsub'])) {
    
    $msg=$_POST['meg'];
    $pid=$_POST['fetch'];
    $radio=$_POST['sel1'];
    $pid;
    $cid;
     $test;
    $jobid1;
    $Date=date("d-m-y");


$rsele="select * from reporting where customer_id='$cid' and provider_id='$pid' and job_id='$jobid1' ";
$rq=mysqli_query($con,$rsele);
$count=mysqli_num_rows($rq);
 $count;
if ($count > 0) {
   
   echo '<p style="width: 100%; border: 1px solid yellow; background-color: yellow;">You already reported !</p>';

}
else{
    if ($radio == "") {
        
        echo '<p style="width: 100%; border: 1px solid yellow; background-color: yellow;">please select anyone !</p>';
    }
    else{
        
   $rquery="insert into reporting(customer_id,provider_id,job_id,report,message,dat)values('$cid','$pid','$jobid1','$radio','$msg','$Date')";
    $rprocssing=mysqli_query($con,$rquery);
    if ($rprocssing) {
       
        echo '<p style="width: 100%; border: 1px solid yellow; background-color: yellow;">success !</p>';

    }
    else{
       echo '<p style="width: 100%; border: 1px solid yellow; background-color: yellow;">Fail !</p>';

    }
    }
    

}


 


}
?>

               <div class="modal-body" >
                <form method="POST">




                    
                   
                     <div class="form-radio-group">   

<input type="number" id="demo" name="fetch" hidden>


                     
                                  <div class="form-radio-item">
                                            <input type="radio" name="sel1" value="Spam or misleading"  >
                                            <label for="cash">Spam or misleading</label>
                                            <span class="check"></span>
                                        </div><br>
                                        <div class="form-radio-item">
                                            <input type="radio" name="sel1" value="Harmful or dangerous act" >
                                            <label for="cheque">Harmful or dangerous act</label>
                                            <span class="check"></span>
                                        </div><br>
                                       <div class="form-radio-item">
                                            <input type="radio" name="sel1" value="Hateful or abusive person"  >
                                            <label for="cash">Hateful or abusive person</label>
                                            <span class="check"></span>
                                        </div><br>
                                        <div class="form-radio-item">
                                            <input type="radio" name="sel1" value="Violent or repulsive person">
                                            <label for="cheque">Violent or repulsive person</label>
                                            <span class="check"></span>
                                        </div><br><br>
                                    </div>
                    <label>
                        Leave Message
                    </label>
                    <br >
                    <input name="meg" style="width: 100%; text-align: left; padding: 0; height: 70px;">
                            
                    


                  
                <div class="modal-footer">
                    <input type="submit" name="reportsub" class="btn btn-default" value="Report">
                                                   
                </div>



                </form>
                </div> 

                
            </div>                                                                       
        </div>       <!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>





              







</body>
</html>

