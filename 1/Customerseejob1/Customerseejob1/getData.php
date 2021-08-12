<?php  
    session_start();
  
     $cemail=$_SESSION['cemail'];
     $cpass=$_SESSION['cpassword'];
     $cid=$_SESSION['CcustomerId'];
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
    $limit = 5;
    
    //set conditions for search
    $whereSQL = $orderSQL = '';
    $keywords = $_POST['keywords'];
   $keywordcity = $_POST['keywordcity'];
    $sortBy = $_POST['sortBy'];
    if(!empty($keywords) OR !empty($keywordcity)){
         $whereSQL = "WHERE customer_id ='$cid' && jobtitle LIKE '%".$keywords."%' && address LIKE '%".$keywordcity."%'";
    }
    else{
         $whereSQL = "WHERE customer_id ='$cid'";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY jobid ".$sortBy;
    }else{
        $orderSQL = " ORDER BY jobid DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as jobid FROM jobposting ".$whereSQL.$orderSQL);
    $resultNum =mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['jobid'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query = mysqli_query($db,"SELECT * FROM jobposting $whereSQL $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['jobid'];
        ?>
            <div>

<a href="clientApplied.php?jobid=<?php echo $row["jobid"]; ?>">

                            <div class="entry-wrap shadow-1" style=" border-left: 4px solid #7ad03a; height: auto;"><!-- blog entry -->
                                
                                <div class="entry-content">
                                    <div class="entry-title">
                                        <h4><?php echo $row["jobtitle"]; ?></h4>
                                    </div>
                                    <div class="entry-metas">
                                        <ul>
                                            <li><i class="fa fa-user green-1"></i><?php echo $row["jobtype"]; ?><a href="#"> </a></li>
                                            <li><i class="fa fa-clock-o blue-1"></i><a href="#"> <?php echo $date = date("l j  F Y",strtotime($row['jobdate'])); ?></a></li>
                                            <li style="float: right; font-size: 20px; color: yellow;"><a href="clientApplied.php?jobid=<?php echo $row["jobid"]; ?>"><i style=" color: dodgerblue;" class="fa fa-paper-plane "></i></a></li>
                                        </ul>
                                    </div>
                                   <div class="entry-disc">
                                        <?php  
                                          $cd= $row["customer_id"]; 
                                           $jd = $row["jobid"]; 

                                    $sele=mysqli_query($db,"SELECT count(*) as provider_id FROM `jobapplied` WHERE job_id='$jd' and customer_id='$cd' ");
                                             $selefet=mysqli_fetch_assoc($sele);
                                            


                                        ?>
                                        
                                                                                
                                        <p>
                                             <?php echo $row["description"]; ?> 
                                             </p><br>
                                                <p style="float: left">
                                             <?php echo "Estimated Time : ". $row["estimatedtime"] ?> <br>
                                            <?php echo "Address : ". $row["address"]; ?> 

                                        </p>


                                        <p style=" float: right;">
                                             <?php echo $selefet['provider_id']." People Applied"; ?>   
                                        </p>
                                    </div>
                                    <div class="entry-readmore" >
                                        
                                    </div>
                                </div>
                            </div><!-- blog entry end -->
                        </a>
</div>






        <?php } ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
<?php } } ?>