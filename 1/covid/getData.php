<?php
session_start();
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');

    // $lo = $_SESSION['location'];
    // $cat = $_SESSION['categories'];

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">


    <link href='jobConfirmMsg/style.css' rel='stylesheet' type='text/css'>
    <link href='jobConfirmMsg/style1.css' rel='stylesheet' type='text/css'>
    <script src="jobConfirmMsg/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
    function AddReadMore() {
        //This limit you can set after how much characters you want to show Read More.
        var carLmt = 190;
        // Text to show when text is collapsed
        var readMoreTxt = " ... Read More";
        // Text to show when text is expanded
        var readLessTxt = "  Less";


        //Traverse all selectors with this class and manupulate HTML part to show Read More
        $(".addReadMore").each(function() {
            if ($(this).find(".firstSec").length)
                return;

            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }

        });
        //Read More and Read Less Click Event binding
        $(document).on("click", ".readMore,.readLess", function() {
            $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        });
    }
    $(function() {
        //Calling function after Page Load
        AddReadMore();
    });
    </script>
    <style>
    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
        color: black;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
        color: black !important;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
     
        color: black !important;
        margin-left: 2px;
        
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
        color: black !important;
    }
   </style>

</head>
<body>



<?php

    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 5;
    
    //set conditions for search
    $whereSQL = $orderSQL = '';
    $keywords = $_POST['keywords'];
    $keywordcity = $_POST['keywordcity'];
    $sortBy = $_POST['sortBy'];
    if(!empty($keywords) OR !empty($keywordcity)){
      $whereSQL = "WHERE job LIKE '%".$keywords."%' && city LIKE '%".$keywordcity."%'";
    }
    else{
        $whereSQL = " ";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY covid_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY covid_id DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as covid_id FROM covid19 ".$whereSQL.$orderSQL);
    $resultNum =mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['covid_id'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
                                
    //get rows
  
    $query = mysqli_query($db,"SELECT * FROM `covid19` $whereSQL $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                 $postID = $row['covid_id'];
                 $cat;
                 $row['city'];
        ?>
        

<div class="topnav">
  
  <a href="#news" style=" font-weight: bold; width: 790px;height: 56px; text-align: left;"><?php echo $row['job']; ?></a><br>
  <p style="font-weight: bold; color:black;"><?php echo $row['firstname'].' '.$row['lastname']; ?></p>
  <a class="active addReadMore showlesscontent"  style="color: #999; word-wrap: break-word; font-size: 14px; width: 90%; text-align: left;"><?php echo $row['description']; ?></a>
  <a href="#news" style=" width: 600px; font-size: 14px; text-align: left;"><i class="fa fa-map-marker" style="padding-right:3%; color: #08c2f3;"> </i><?php echo $row['address']." ".$row['city']; ?></a>
  <a href="#about" style=" width: 190px; font-size: 14px; text-align: left; display: inline-block; padding-left:0; float: right; "><i class="fa fa-phone" style="padding-right:2%; color: #08c2f3;"> </i><?php echo $row['mobile'];  ?> </a>
</div>
        <?php
    }
    ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
<?php } } ?>


</body>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js1/main.js"></script>


</html>

