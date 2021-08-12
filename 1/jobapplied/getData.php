<?php  
    session_start();
  
    $cemail=$_SESSION['cemail'];
    $cpass=$_SESSION['cpassword'];
    $cid=$_SESSION['CcustomerId'];
    $jobid1 = $_SESSION['customerjobid'];
    if (!$cpass) {
    header('location:login.php?Access Denied..');
}

?>

<?php
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');
    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 6;
    
    //set conditions for search
    $whereSQL = $orderSQL = '';
    $keywords = $_POST['keywords'];
   $keywordcity = $_POST['keywordcity'];
    $sortBy = $_POST['sortBy'];
    if(!empty($keywords) OR !empty($keywordcity)){
         $whereSQL = "WHERE jobapplied.customer_id ='$cid' && jobapplied.job_id='$jobid1' && provider_signup.p_profession LIKE '%".$keywords."%' && provider_signup.p_city LIKE '%".$keywordcity."%'";
    }
    else{
        $whereSQL = "WHERE jobapplied.customer_id ='$cid' && jobapplied.job_id='$jobid1'";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY Apply_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY Apply_id DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as Apply_id FROM jobapplied INNER JOIN provider_signup ON jobapplied.provider_id = provider_signup.provider_id ".$whereSQL.$orderSQL);
    $resultNum =mysqli_fetch_assoc($queryNum);

    $rowCount = $resultNum['Apply_id'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query = mysqli_query($db,"SELECT * FROM jobapplied INNER JOIN provider_signup ON jobapplied.provider_id = provider_signup.provider_id  $whereSQL $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $providerID = $row['provider_id'];
    ?>
            <div class="col-xs-12 col-sm-6 col-md-4" >
               
                <div class="image-flip" ontouchstart="this.classList.toggle('hover'); " >
                    <div class="mainflip" >
                        <div class="frontside" style="border: 1px solid #d6e0de; height: 305px; background-color: white;  padding-top: 12px; ">
                            <div class="card" >
                                <div class="card-body text-center" >
                                    <img class="img-fluid" src="Assets1/provider/<?php echo $row['p_pics']; ?>" style="width: 120px; border-radius: 60px; height: 120px; object-fit: cover; background-repeat: no-repeat; text-align: center; margin: 0 auto;" />
                                
                                    <h4 class="card-title"><?php echo $row['p_first']; ?> <?php echo $row['p_last']; ?></h4>
                                    <p class="card-text">
                                           <h6 style="padding-bottom: 5%;">    <?php echo $row['p_profession']; ?> </h6><br>
                                    </p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside"  style="width: 100%; height: 305px;">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?php echo $row['p_first']; ?> <?php echo $row['p_last']; ?></h4>
                                    <div style="position: absolute; top: 25%; width: 100%;">
                                    <p class="card-text">
                                        <?php  $row["customer_id"]; ?> 
                                          <?php $row["job_id"]; ?> 
                                          <?php $proid = $row["provider_id"]; ?> 
                                    <h6 style="padding-bottom: 5%;">    <?php echo $row['p_profession']; ?> </h6><br>
                                     <h6 style="padding-bottom: 5%;">  <?php echo $row["p_city"]; ?> </h6>
                                    </p>
                                </div>
                                    <ul class="list-inline" style="left: 11%; position: absolute; width: 80%; top: 70%; ">
                                        <li class="list-inline-item"  style="float: left;">
                                            <a class="social-icon text-xs-center"  href="chat/chatbox1.php">
                                                <button class="btn btn-primary">Chat</button> 
                                            </a>
                                        </li>


 <li class="list-inline-item" style="float: left;">
                                           
                                               
                                                <!-- <a href="jjid=<?php echo $row["provider_id"]; ?> " id="<?php echo $proid; ?>" style="color: white!important; font-size: 14px;" class="btn btn-danger" data-toggle="modal" data-target=" #logoutpop1">Report</a> -->
                                           
                        <?php  

$hideq="select * from reporting where provider_id='$proid' and customer_id='$cid' and job_id='$jobid1'";
$hidepro=mysqli_query($db,$hideq);
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


                                        <li class="list-inline-item"  style="float: right;">
                                            <?php  


                                            $sle="SELECT * FROM jobconfirmed  where job_id='$jobid1' && cust_id='$cid' && prov_id='$proid' && confirmed='confirmed'";
                                            $slequery=mysqli_query($db,$sle);
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
<?php } } ?>