<?php
session_start();
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');

    $lo = $_SESSION['location'];
    $cat = $_SESSION['categories'];

}

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
      $whereSQL = "WHERE (p_jobCat='$cat' && p_city='$lo') && (p_profession LIKE '%".$keywords."%' || p_first LIKE '%".$keywords."%') && p_address LIKE '%".$keywordcity."%'";
    }
    else{
        $whereSQL = "WHERE p_jobCat='$cat' && p_city='$lo' ";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY provider_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY provider_id DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as provider_id FROM provider_signup ".$whereSQL.$orderSQL);
    $resultNum =mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['provider_id'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
                                
    //get rows
  
    $query = mysqli_query($db,"SELECT * FROM `provider_signup` $whereSQL $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                 $postID = $row['provider_id'];
                 $cat;
                 $row['p_city'];

                   $COUNT= mysqli_query($db,"SELECT * from jobconfirmed WHERE prov_id='$postID' ");
                   $cou=mysqli_num_rows($COUNT);
        ?>
        

<div class="topnav">
  <a class="active" href="#home"  ><img  src="Assets1/provider/<?php echo $row['p_pics']; ?>"  style=" margin-top: -25%; width: 70px; height: 70px; border: 1px solid grey; border-radius: 40px; object-fit: cover;" ></a>
  <a href="#news" style=" font-weight: bold; width: 790px;height: 56px; margin-top: -1%; text-align: left;"><span><?php echo $row['p_first']." ".$row['p_last'];  ?><br></span><?php echo $row['p_profession']; ?></a>
  <a class="active addReadMore showlesscontent"  style="color: #999; word-wrap: break-word; font-size: 14px; width: 90%; text-align: justify;"><?php echo $row['p_description']; ?></a>
  <a href="#news" style=" width: 500px; text-align: left; ;"><i class="fa fa-map-marker" style="padding-right:3%; color: #08c2f3;"> </i><?php echo $row['p_address']; ?></a>

  <a href="#about" style="; width: 190px; text-align: left; display: inline-block; padding-left:0; float: right; ">Job Completed: <?php echo $cou; ?> </a>
</div>

        <?php
    }
    ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
<?php }  ?>


</body>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js1/main.js"></script>


</html>

