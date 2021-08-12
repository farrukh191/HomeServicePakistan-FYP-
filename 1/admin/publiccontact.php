<?php  
    //session_start();
    include('../db.php');
include('style.php');   

?>

<!DOCTYPE html>
<html>
<head>
    <link href='publicContact/style.css' rel='stylesheet' type='text/css'>
<script src="publicContact/jquery.min.js"></script>
 
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
        url: 'publicContact/getData1.php',
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
    include('publicContact/Pagination.php');
    
    //Include database configuration file
    include('publicContact/dbConfig.php');
    
    $limit = 5;
    
    //get number of rows
    $queryNum = mysqli_query($db,"SELECT count(*) as contact_id FROM contact");
   $resultNum =  mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['contact_id'];
    
    //initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query =mysqli_query($db,"select * from contact ORDER BY contact_id DESC LIMIT $limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
            <h4 class="mt-4">Contact Page</h4>
        <?php
            while($row =mysqli_fetch_assoc($query)){ 
                $th = $row['contact_id']; 
               
        ?>
                 <div  >

<a href="#">

<div class="entry-wrap shadow-1" style=" border-left: 4px solid #7ad03a; height: auto;"><!-- blog entry -->
                                
                                <div class="entry-content">
                                    <div class="entry-title">
                                        <h4> <i class="fa fa-user green-1"></i> <?php echo $row["name"]; ?></h4>
                                    </div>
                                    <div class="entry-metas">
                                        <ul>
                                            <li><a href="#"> <?php echo $row["type"]; ?> id: <?php echo $row["provider_id"]; ?> </a></li>
                                            <li><i class="fa fa-clock-o blue-1"></i><a href="#"> <?php echo $row["date"]; ?></a></li>







                                           
                                        </ul>
                                    </div>
                                    <div class="entry-disc">
                                      <p style="word-wrap: break-word;">
                                             <?php echo $row["message"]; ?>
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

                                        
                                            <!-- <div id="srch">
                                               

                                            <input type="text" id="keywords" class="sidebar-search-input" placeholder="Search by type" style="color:#333;  height: 50px; margin-bottom: 3px; border: 1px solid #fff;" name="search" onkeyup="searchFilter()" />
                                            <input class="sidebar-search-btn" value="" type="submit" style="padding-top: -10px;" />
                                            </div> -->
                                            <div id="srch">
                                            <input type="date" id="keywordcity" class="sidebar-search-input" placeholder="Search by Date" name="search" style="color:#333; width: 90%; height: 50px; border: 1px solid #fff;" onkeyup="searchFilter()" />
                                        

                                            </div>
<select id="keywords" onchange="searchFilter()" style="width: 100%; margin-bottom: 2%; height: 50px;">
        <option value="">Search By Type</option>
        <option value="Public">Public</option>
        <option value="Provider">Provider</option>
    </select>

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

