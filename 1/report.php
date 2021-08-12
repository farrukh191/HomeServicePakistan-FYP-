<?php  
    session_start();
    include('db.php');
    $cemail=$_SESSION['cemail'];
    $cpass=$_SESSION['cpassword'];
    $cid=$_SESSION['CcustomerId'];

    if (!$cpass) {
    header('location:login.php?Access Denied..');
}

?>

<!DOCTYPE html>
<html>
<head>
    <link href='Customerseejob1/Customerseejob1/style.css' rel='stylesheet' type='text/css'>
<script src="Customerseejob1/Customerseejob1/jquery.min.js"></script>
<script>
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    var keywordcity = $('#keywordcity').val();
    var sortBy = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: 'Customerseejob1/Customerseejob1/getData.php',
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
</head>
<body>
    
<?php   include('customerAssets/navbar.php'); ?>

<div style="margin-top: -10%;">
    <?php  include('customerAssets/header.php') ?>
</div>

<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
            <h4 class="white">see your jobs</h4>
        </div><!-- section title end -->
<!--================================PAGE TITLE==========================================-->
        






        <section class="aside-layout-section padding-top-70 padding-bottom-40" >
            <div class="container"><!-- section container -->
                <div class="row" ><!-- row -->
                    <div class="col-md-9 col-sm-8 col-xs-12 main-wrap" ><!-- content area column -->
                        <div class="blog-section padding-bottom-40">
                            <div class="blog-section ">



                                <div class="post-search-panel">
    <!-- <input type="text" id="keywords" placeholder="Type keywords to filter posts" onkeyup="searchFilter()"/> 
    <input type="text" id="keywordcity" placeholder="Type keywords to filter posts" onkeyup="searchFilter()"/> -->
<!--     <select id="sortBy" onchange="searchFilter()">
        <option value="">Sort By</option>
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select> -->
</div>







 <div id="posts_content">


    <?php
    //Include pagination class file
    include('Customerseejob1/Customerseejob1/Pagination.php');
    
    //Include database configuration file
    include('Customerseejob1/Customerseejob1/dbConfig.php');
    
    $limit = 5;
    
    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as jobid FROM jobposting where customer_id ='$cid'");
    $resultNum =  mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['jobid'];
    
    //initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query =mysqli_query($db,"SELECT * FROM jobposting where customer_id ='$cid' ORDER BY jobid DESC LIMIT $limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row =mysqli_fetch_assoc($query)){ 
                $postID = $row['jobid'];
        ?>
                 <div  >

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
    <?php } ?>
    </div>
                                
                            </div>
                            
















                            




                            





                            
                            
                            
                        </div>
                    </div><!-- content area end -->
                    <div class="col-md-3 col-sm-4 col-xs-12"><!-- sidebar column -->
                        <div class="sidebar sidebar-wrap">
                            <div class="sidebar-widget shadow-1">
                                <div class="sidebar-widget-content search-bar  clearfix" >
                                    <div class="sidebar-search-wrap">
                                        <h5>Search Here</h5>
                                        <form action="#" >
                                            <input type="text" id="keywords" class="sidebar-search-input" placeholder="Search by title" style="color:#333;  height: 50px; margin-bottom: 3px;" name="search" onkeyup="searchFilter()" />
                                            <input class="sidebar-search-btn" value="" type="submit" style="padding-top: -10px;" />
                                            <input type="text" id="keywordcity" class="sidebar-search-input" placeholder="Search by area" name="search" style="color:#333;  height: 50px;" onkeyup="searchFilter()" />
                                            <input class="sidebar-search-btn" value="" type="submit" />


                                                <select id="sortBy" onchange="searchFilter()" style="width: 100%; height: 50px;">
        <option value="">Sort By</option>
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget shadow-1">
                                <div class="sidebar-widget-title">
                                    <h5><span class="bgyallow-1"></span>Latest posts</h5>
                                </div>
                                <div class="sidebar-widget-content recent-post clearfix">

                                    <?php  

$query1 =mysqli_query($db,"SELECT * FROM jobposting where customer_id ='$cid'  ORDER BY jobid DESC LIMIT 3");
    
    if(mysqli_num_rows($query1) > 0){ 
        
            while($row1 =mysqli_fetch_assoc($query1)){ 
              $postID1 = $row1['jobid']; 
               ?>
               <div class="recent-post-entry clearfix">
                                        <div class="recent-entry-figure">
                                            <img style="width: 100%; height: 60px;" src="Assets1/jobpostimg/<?php echo $row1["jobfile"]; ?>" alt="recent post"/>
                                        </div>
                                        <div class="recent-entry-content">
                                            <p class="recent-entry-title"><a href="#"><?php echo $row1["jobtitle"]; ?></a></p>
                                            <p class="recent-entry-disc"><?php echo $row1["jobcategory"]; ?></p>
                                            <p class="recent-entry-meta date"><?php echo $date = date("l j  F Y",strtotime($row1['jobdate'])); ?></p>
                                        </div>
                                    </div>
               <?php
        }

}


?>
                                    
                                </div>
                            </div>
                            
                            <div class="sidebar-widget shadow-1">
                                <div class="sidebar-widget-title">
                                    <h5><span class="bgblue-1"></span>ADVERTISING</h5>
                                </div>
                                <div class="sidebar-widget-content advertise  clearfix">
                                    <div class="sidebar-image-ads">
                                        <a href="#"><img src="images/location/01.jpg" alt="custom-image"></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>      
                </div>
            </div><!-- section container end -->
        </section>
    



<?php include('footer.php'); ?>

</body>
</html>

