<?php  
    session_start();

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
         $whereSQL = "WHERE provider_signup.p_profession LIKE '%".$keywords."%' && provider_signup.p_city LIKE '%".$keywordcity."%'";
    }
    else{
         $whereSQL = " ";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY reporting.provider_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY reporting.provider_id DESC ";
    }

    //get number of rows

    $queryNum = mysqli_query($db,"SELECT * FROM reporting INNER JOIN provider_signup ON provider_signup.provider_id=reporting.provider_id $whereSQL GROUP BY reporting.provider_id HAVING COUNT(*) >= 1 $orderSQL");
      $resultNum = mysqli_num_rows($queryNum);
    //$resultNum = mysqli_fetch_assoc($queryNum);
   // $rowCount = $resultNum['reporting_id'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' =>  $resultNum,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    
    $query = mysqli_query($db,"SELECT * FROM reporting INNER JOIN provider_signup ON provider_signup.provider_id=reporting.provider_id $whereSQL GROUP BY reporting.provider_id HAVING COUNT(*) >= 1 $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['reporting_id'];
                $th = $row['provider_id'];    
                $sel=mysqli_query($db,"select * from reporting where provider_id='$th'");
                $complain =mysqli_num_rows($sel); 
        ?>
            <div>

<a href="ReportMsg.php?id=<?php echo $th; ?>" >

                            <div class="entry-wrap shadow-1" style=" border-left: 4px solid #7ad03a; height: auto;"><!-- blog entry -->
                                
                         <div class="entry-content">
                                    <div class="entry-title">
                                        <h4><?php echo $row["p_profession"]; ?></h4>
                                    </div>
                                    <div class="entry-metas">
                                        <ul>
                                            <li><i class="fa fa-user green-1"></i><?php echo $row["p_jobCat"]; ?><a href="#"> </a></li>
                                            <li><i class="fa fa-clock-o blue-1"></i><a href="#"> <?php echo $date = date("l j  F Y",strtotime($row['Date'])); ?> </a></li>
                                           <?php  

$check="select * from provider_signup where provider_id='$th' ";
$checkquery=mysqli_query($db,$check);
$checkfetch=mysqli_fetch_assoc($checkquery);
$checkblock = $checkfetch['block'];
if ($checkblock == "" OR $checkblock == "Active") {
  ?>
  <a href="insert.php?id=<?php echo $th; ?>" class="btn btn-primary" style=" font-size: 12px; margin-top: -8%; margin-left: 39%; float: right; ">suspend</a>

   <?php
  
}
else{
     ?>
      <a href="insert1.php?id1=<?php echo $th; ?>" class="btn btn-danger" style=" font-size: 12px; margin-top: -8%; margin-left: 39%; float: right; ">suspended</a>

   
  <?php
}

?>


                                        </ul>
                                    </div>
                                      <div class="entry-disc">
                                        <?php  

$completejob=mysqli_query($db, "select * from jobconfirmed where prov_id='$th'");
$jobcount=mysqli_num_rows($completejob);
                                        ?>
                                      
                                                <p style="float: left">
                                             <?php echo $row["p_first"]." ".$row["p_last"] ?> <br > 
                                           Address : <?php echo $row["p_city"]." Total Job Completed : ".$jobcount; ?>

                                        </p>



                                        <p style=" float: right;">
                                            <br>
                                           Reported : <?php  echo $complain; ?>
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