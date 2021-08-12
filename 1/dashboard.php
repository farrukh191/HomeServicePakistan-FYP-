<?php 
session_start();


	//echo $_SESSION['keyword'];
	 $lo = $_SESSION['location'];
	 $cat = $_SESSION['categories'];



include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
   
        .main {
            width: 100% !important;
            margin-top: -6% !important;

            margin-bottom: 4%;
        }


        .register {
            line-height: 1.2;
            margin: 0;
            padding: 0;
            font-weight: 900;
            color: #fff;
            font-family: 'Poppins';
            font-size: 26px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .while {
            line-height: 1.2;
            margin: 0;
            padding: 0;
            font-weight: 700;
            color: #fff;
            font-family: 'Poppins';
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        label.required {
            position: relative !important;
        }

        label,
        .lo {
            font-weight: bold !important;
            text-transform: uppercase !important;
            margin-bottom: 7px !important;
            font-size: 14px !important;
        }

        label,
        input {
            display: block !important;
            width: 100% !important;
        }

        form-submit {
            text-align: right;
        }

        .submit {
            width: 150px !important;
            height: 50px !important;
            display: inline-block !important;
            font-family: 'Poppins' !important;
            font-weight: bold !important;
            font-size: 14px !important;
            padding: 10px !important;
            border: none !important;
            cursor: pointer !important;
            text-transform: uppercase !important;
            border-radius: 5px !important;
            -moz-border-radius: 5px !important;
            -webkit-border-radius: 5px !important;
            -o-border-radius: 5px !important;
            -ms-border-radius: 5px !important;
        }

        #reset {
            background: #fff;
            color: #999;
            border: 2px solid #ebebeb;
        }

        #reset:hover {
            border: 2px solid #329e5e;
            background: #329e5e;
            color: #fff;
        }

        #submit {
            background: #329e5e;
            color: #fff;
            margin-right: 25px;
        }

        #submit:hover {
            background-color: #267747;
        }

        .form-input,
        .form-select {
            margin-bottom: 23px !important;

        }

        .form-input,
        .form-select {
            margin-bottom: 23px !important;
        }

        .select-list {
            position: relative !important;
            display: inline-block !important;
            width: 100% !important;
            height: 45px;
            border-color: #ebebeb !important;
            margin-bottom: 47px !important;
        }

        select {

            height: 50px !important;
            width: 100% !important;
            border-radius: 5px;
        }

        p:hover {
            color: dodgerblue !important;
            border-left: 3px solid dodgerblue;
            padding-left: 5px;
        }


      
.topnav {
  overflow: hidden;
  margin-bottom: 2% !important;
  border-bottom: 1px solid gray;
  list-style-type: none !important;
 position: relative;
}

.topnav a {
  float: left;
  text-align: left;
  text-align: center;
  color: black;
  font-size: 10px;
  display: inline-block !important;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}




    </style>
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
    <script>
        function searchFilter(page_num) {
            page_num = page_num ? page_num : 0;
            var keywords = $('#keywords').val();
            var keywordcity = $('#keywordcity').val();
            var sortBy = $('#sortBy').val();
            $.ajax({
                type: 'POST',
                url: 'dashboard/getData.php',
                data: 'page=' + page_num + '&keywords=' + keywords + '&keywordcity=' + keywordcity + '&sortBy=' + sortBy,
                beforeSend: function() {
                    $('.loading-overlay').show();
                },
                success: function(html) {
                    $('#posts_content').html(html);
                    $('.loading-overlay').fadeOut("slow");
                }
            });
        }
    </script>


    



</head>

<body>







    <?php include("homeAssets/navbar1.php"); ?>


   



    <div class="main">


        <div class="container" style="width: 75%; margin-top: -8%;">



            <div class="signup-content">

                <div class="signup-form">



                  <!--   <div class="tab" style="float: left; cursor:pointer; margin-top: -65px; width: 100%;">
                        <h4 class="text-left " style=" padding-bottom:10px;">My Proposals</h4>
                        <div class="tab-inner act" style="float: left;  ">

                            <p class="tablinks  text-uppercase  " onclick="openCity(event, 'sign-up')" id="defaultOpen" style="color: black; ">Confirmed Jobs</p>
                        </div>
                        <div class="tab-inner act" style="float: left; padding-left: 15px;  ">
                            <p class="tablinks text-uppercase  " onclick="openCity(event, 'sign-inn')" style="color: black; ">Applied Job</p>
                        </div>
                    </div>
 -->


                    <form class="form-detail" method="POST" enctype="multipart/form-data">


                        <div class="tabcontent" id="sign-up">
                            <h4 style="text-align: left;  color: #204d74; border-bottom: 1px solid #e0e0e0; padding: 1%;">Advanced search</span></h4>




                            <div class="sidebar-widget shadow-1" style="margin-top: 0%; ">
                                <div class="sidebar-widget-content search-bar  clearfix">
                                    <div class="sidebar-search-wrap">

                                        <form action="#" style="display: inline-block !important;">
                                            <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                            <input type="text" id="keywords" class="sidebar-search-input" placeholder="Type keywords to filter posts"  name="search" onkeyup="searchFilter()" />
                                        </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                            <input type="text" id="keywordcity" class="sidebar-search-input" placeholder="Search by nearly address" name="search"  onkeyup="searchFilter()" />

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select id="sortBy" onchange="searchFilter()" class="form-control search-slt" style="border-color: #ebebeb;">
                               <option value="">Sort By</option>
                                    <option value="asc">Ascending</option>
                                    <option value="desc">Descending</option>
                            </select>
                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>





                            <div class="post-wrapper">
                                <div class="loading-overlay">
                                    <div class="overlay-content">Loading...</div>
                                </div>
                                <div id="posts_content">
                                    <?php
                                    //Include pagination class file
                                    include('dashboard/Pagination.php');

                                    //Include database configuration file
                                    include('dashboard/dbConfig.php');

                                    $limit = 5;

                                    //get number of rows
                                    $queryNum = mysqli_query($db, "SELECT COUNT(*) as provider_id FROM provider_signup where p_jobCat='$cat' && p_city='$lo' ");
                                    $resultNum =  mysqli_fetch_assoc($queryNum);
                                    $rowCount = $resultNum['provider_id'];

                                    //initialize pagination class
                                    $pagConfig = array(
                                        'totalRows' => $rowCount,
                                        'perPage' => $limit,
                                        'link_func' => 'searchFilter'
                                    );
                                    $pagination =  new Pagination($pagConfig);

                                    //get rows
                                    $query = mysqli_query($db, "SELECT * FROM `provider_signup` where p_jobCat='$cat' && p_city='$lo' ORDER BY provider_id DESC LIMIT $limit ");
                                

                                    if (mysqli_num_rows($query) > 0) { ?>
                                        <div class="posts_list">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query)) {
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
                                    <?php } ?>
                                </div>
                            </div>




















                        </div>
                    </form>








                    <!--------------------------- start here the login form ------------------->



                    <form class="form-detail" enctype="multipart/form-data" method="post">
                        <div class="tabcontent" id="sign-inn">

                            







                           









                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>

    <script type="text/javascript">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js1/main.js"></script>










</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>