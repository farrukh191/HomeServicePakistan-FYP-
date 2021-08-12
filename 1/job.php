<?php
include('db.php');

//$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$pas = $_SESSION['password'];
$providerId = $_SESSION['providerId'];


$providerCat = $_SESSION['pcategory'];

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Font Icon -->
    

    <link href='job/style.css' rel='stylesheet' type='text/css'>
    <link href='job/style1.css' rel='stylesheet' type='text/css'>
    <script src="job/jquery.min.js"></script>
    <script>
        function searchFilter(page_num) {
            page_num = page_num ? page_num : 0;
            var keywords = $('#keywords').val();
            var keywordcity = $('#keywordcity').val();
            var sortBy = $('#sortBy').val();
            $.ajax({
                type: 'POST',
                url: 'job/getData.php',
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style type="text/css">
        .addReadMore.showlesscontent .SecSec,
        .addReadMore.showlesscontent .readLess {
            display: none;
        }

        .addReadMore.showmorecontent .readMore {
            display: none;
        }

        .addReadMore .readMore,
        .addReadMore .readLess {
            font-weight: bold;
            margin-left: 2px;
            color: blue;
            cursor: pointer;
        }

        .addReadMoreWrapTxt.showmorecontent .SecSec,
        .addReadMoreWrapTxt.showmorecontent .readLess {
            display: block;
        }
    </style>

</head>

<body>







    <form class="form-detail" method="POST" enctype="multipart/form-data">


        <div class="tabcontent" id="sign-up">
           

            <div class="sidebar-widget shadow-1" style="margin-top: 0%; ">
                <div class="sidebar-widget-content search-bar  clearfix">
                    <div class="sidebar-search-wrap">

                        <form action="#" style="display: inline-block !important;">

                            <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                            <input type="text" id="keywords" class="sidebar-search-input" placeholder="Type keywords to filter posts" name="search" onkeyup="searchFilter()" style=" width: 108%; height: 50px; border:1px solid #ebebeb;" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <select id="keywordcity" class="sidebar-search-input" onchange="searchFilter()" name="search" style="border-color: #ebebeb; width: 110%; height: 50px;" >
                                <option value="">Search by city</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Lahore">Lahore</option>
                            </select>
                        </div>
                            <!-- <input type="text" id="keywordcity" class="sidebar-search-input" placeholder="Search by nearly address" name="search" style="color:#333; display: inline-block !important; width: 29% !important; height: 50px; border-color: black;" onkeyup="searchFilter()" />

 -->
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select id="sortBy" onchange="searchFilter()" style="border-color: #ebebeb; width: 80%; height: 50px;" >
                                <option value="">Sort By</option>
                                <option value="asc">Ascending</option>
                                <option value="desc">Descending</option>
                            </select>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>









    <div class="post-wrapper" style="margin-top: -5%;">
        <div class="loading-overlay">
            <div class="overlay-content">Loading...</div>
        </div>
        <div id="posts_content">
            <?php
            //Include pagination class file
            include('covid/Pagination.php');

            //Include database configuration file
            include('covid/dbConfig.php');

            $limit = 5;

            //get number of rows
            $queryNum = mysqli_query($db, "select count(*) as jobid from jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id WHERE jobposting.jobcategory='$providerCat'");
            $resultNum =  mysqli_fetch_assoc($queryNum);
            $rowCount = $resultNum['jobid'];

            //initialize pagination class
            $pagConfig = array(
                'totalRows' => $rowCount,
                'perPage' => $limit,
                'link_func' => 'searchFilter'
            );
            $pagination =  new Pagination($pagConfig);

            $gig_select = "select * from gig where provider_id='$providerId'";
            $gig_query = mysqli_query($con, $gig_select);
            
            $gig_count = mysqli_num_rows($gig_query);



            if ($gig_count > 0) {
                $fetch = mysqli_fetch_assoc($gig_query);
                $fetch['jobCats'];
                $query = mysqli_query($db, "SELECT * FROM jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id WHERE jobposting.jobcategory='$providerCat' ORDER BY jobid DESC LIMIT $limit  ");

                if (mysqli_num_rows($query) > 0) { ?>
                    <div class="posts_list">
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            $postID = $row['jobid'];
                            $cat;
                            $row['jobtitle'];
                            echo "<br>";
                        ?>
                            
                <div class="media" style="width: 100%; margin-top: 5%; border-top:1px solid; height: auto; float: left; border-collapse: collapse;box-sizing: border-box; ">

                    <?php  
$idd=$row['customer_id'];
$catch="select * from customer_signup where customer_id='$idd'";
$catchquery=mysqli_query($con,$catch);
$cat=mysqli_fetch_assoc($catchquery);
$cat['first_name'];
                        ?>
                    
                    <div style="display: inline-flex; width: 100%; height: auto; ">
                        <div style="width: 80%; height: auto; ">
                            <p style="padding: 0.5%; color: black; text-align: left;  font-size: 25px; margin-top: -7px;"><?php echo $row['jobtitle']; ?></p>

                        </div>




                        <div style="width: 20%; height: auto; ">

                            <?php  
                            $jbid=$row['jobid'];

$check="select * from jobapplied where provider_id='$providerId' && customer_id='$idd' && job_id='$jbid' ";
$checkquery=mysqli_query($con,$check);
$checksum=mysqli_num_rows($checkquery);
if ($checksum > 0) {

 $check=mysqli_fetch_assoc($checkquery);
 $chk = $check['conditionApply'];
  $jobidchk= $check['job_id'];

$che="select * from jobapplied where job_id='$jbid' ";
$chequery=mysqli_query($con,$che);
 $proposals=mysqli_num_rows($chequery);

 if ($chk !== "Applied" ) {
 
?>

    <button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php  $row['jobid']; ?>" style="color: white;">Apply </a></button>
<!--     <a href="customerjobshow.jobapplication.php">goto</a> -->

    <?php
 }

else{
    ?>
    <p style="color: blue; font-size: 15px; padding-left: 45%;">Applied</p>
    <?php
}

}
else{
    ?><button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php echo $row['jobid']; ?>" style="color: white;">Apply </a></button>
    <?php
}


?>

                            

                        </div>
                    </div>

                    <div style="display: inline-flex; width: 100%; ">
                        <div style="width: 100%; font-size: 13px; color: black;">
                           <b><?php echo $row['jobtype']; ?></b> 
                            <p><?php //echo $row['jobid']; ?></p>
                            
                        </div>

                    </div>
                    <div style="display: inline-flex; width: 100%; ">
                        <div style="width: 100%; height: auto; ">

                            <p class="addReadMore showlesscontent" style="text-align: left; color: gray; padding: 5px 5px 0px 5px; margin-top: -3px;">
                                <?php echo $row['description']; ?></p>
                                

                        </div>

                    </div>


<?php  
    
$che="select * from jobapplied where job_id='$jbid' ";
$chequery=mysqli_query($con,$che);
$proposals=mysqli_num_rows($chequery);
?>



                    <div style="display: inline-flex; width: 100%; height: 40px; padding-top: 8px;">
                        <div style="width: 100%; height: auto; ">
                            <p style="float: left; width: 40%;  margin-top: -1px; color: black;"><i class="fa fa-map-marker" ></i> <?php echo $row['address']; ?> <?php echo $row['city']; ?></p>
                            <p style=" float: left;  margin: -1px 0% 0% 10%; color: black;">File: </p>
                            <p style=" margin-top: -1px;  float: right; color: black; padding: 0.5%;">Proposals: <?php echo $proposals ?> </p>

                        </div>

                    </div>
                </div>
                        <?php


                        }
                        ?>

                    </div>
                    <?php echo $pagination->createLinks(); ?>
                <?php } else {
                   
                    ?>
                    <h5 style="text-align: center; background-color: dodgerblue; width: 100%; color: white; padding:2px; margin-top: 5%; font-weight: bold;">There is no job yet ...</h5>
                    <?php
                }
            } else {
                ?>
                <h5 style="text-align: center; background-color: dodgerblue; width: 100%; color: white; padding:2px; margin-top: 5%; font-weight: bold;">There is no job yet please create your Gig first...</h5>
            <?php

            }


            ?>
        </div>
    </div>









    <script>
        function AddReadMore() {
            //This limit you can set after how much characters you want to show Read More.
            var carLmt = 220;
            // Text to show when text is collapsed
            var readMoreTxt = " ... more";
            // Text to show when text is expanded
            var readLessTxt = " Less";


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



</body>

</html>