<?php  
    //session_start();
    include('../db.php');
     $_SESSION['emai'];
    $_SESSION['pass'];

if (!$_SESSION['pass'] && !$_SESSION['emai']) {
        header('location:index.php?Access Denied..');
    }

   

?>

<!DOCTYPE html>
<html>
<head>
    <link href='Customerseejob1/Customerseejob1/style.css' rel='stylesheet' type='text/css'>
<script src="Customerseejob1/Customerseejob1/jquery.min.js"></script>
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

 <style type="text/css">
.sidebar-search-btn {
    background: url(../images/search-icon.png) no-repeat;
    border: none !important;
}
#srch, #sort{
    width: 240px;
   border: 1px solid white;
}
    </style>

</head>
<body>
<!-- section title end -->
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
    $queryNum = mysqli_query($db,"SELECT * FROM reporting INNER JOIN provider_signup ON provider_signup.provider_id=reporting.provider_id GROUP BY reporting.provider_id HAVING COUNT(*) >= 1");
   $rowCount = mysqli_num_rows($queryNum);
    
    //initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query =mysqli_query($db,"SELECT * FROM reporting INNER JOIN provider_signup ON provider_signup.provider_id=reporting.provider_id GROUP BY reporting.provider_id HAVING COUNT(*) >= 1 ORDER BY reporting.provider_id DESC LIMIT $limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row =mysqli_fetch_assoc($query)){ 
                $th = $row['provider_id']; 
                $sel=mysqli_query($con,"select * from reporting where provider_id='$th'");
                 $complain =mysqli_num_rows($sel);
        ?>
                 <div  >

<a href="ReportMsg.php?id=<?php echo $th; ?>">

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
$checkquery=mysqli_query($con,$check);
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

$completejob=mysqli_query($con, "select * from jobconfirmed where prov_id='$th'");
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
                                        
                                            <div id="srch">
                                            <input type="text" id="keywords" class="sidebar-search-input" placeholder="Search by title" style="color:#333;  height: 50px; margin-bottom: 3px; border: 1px solid #fff;" name="search" onkeyup="searchFilter()" />
                                            <input class="sidebar-search-btn" value="" type="submit" style="padding-top: -10px;" />
                                            </div>
                                            <div id="srch">
                                            <input type="text" id="keywordcity" class="sidebar-search-input" placeholder="Search by area" name="search" style="color:#333; height: 50px; border: 1px solid #fff;" onkeyup="searchFilter()" />
                                            <input class="sidebar-search-btn" value="" type="submit" />

                                            </div>
                                                <select id="sortBy" onchange="searchFilter()" style="width: 100%; height: 50px;">
        <option value="">Sort By</option>
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
                                        
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>     
                </div>
            </div><!-- section container end -->
        </section>
    



<?php //include('footer.php'); ?>

</body>




</html>

