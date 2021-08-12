<?php
session_start();
if (isset($_POST['page'])) {
    //Include pagination class file
    include('Pagination.php');

    //Include database configuration file
    include('dbConfig.php');

 $phone=$_SESSION['phone'];
    // $email = $_SESSION['email'];
    $pas = $_SESSION['password'];
    $providerId = $_SESSION['providerId'];


    $providerCat = $_SESSION['pcategory'];
}



$start = !empty($_POST['page']) ? $_POST['page'] : 0;
$limit = 5;

//set conditions for search
$whereSQL = $orderSQL = '';
$keywords = $_POST['keywords'];
echo $keywordcity = $_POST['keywordcity'];
$sortBy = $_POST['sortBy'];
if (!empty($keywords) or !empty($keywordcity)) {
    $whereSQL = "WHERE jobposting.jobcategory='$providerCat' && (jobposting.jobtitle LIKE '%" . $keywords . "%' || jobposting.jobtype LIKE '%" . $keywords . "%') && customer_signup.city LIKE '%" . $keywordcity . "%'";
} else {
    $whereSQL = "WHERE jobposting.jobcategory='$providerCat'";
}
if (!empty($sortBy)) {
    $orderSQL = " ORDER BY jobposting.jobid " . $sortBy;
} else {
    $orderSQL = " ORDER BY jobposting.jobid DESC ";
}


//get number of rows
$queryNum = mysqli_query($db, "select count(*) as jobid from jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id " . $whereSQL . $orderSQL);
$resultNum = mysqli_fetch_assoc($queryNum);
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


$gig_select = "select * from gig where provider_id='$providerId'";
$gig_query = mysqli_query($db, $gig_select);

$gig_count = mysqli_num_rows($gig_query);


if ($gig_count > 0) {
    $fetch = mysqli_fetch_assoc($gig_query);
    $fetch['jobCats'];
    $es = "SELECT * FROM jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id $whereSQL $orderSQL LIMIT $start,$limit";
    $query = mysqli_query($db, $es);
    if (mysqli_num_rows($query) > 0) { ?>
        <div class="posts_list">
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
                $postID = $row['jobid'];
                $cat;
                $row['jobtitle'];

            ?>
                <div class="media" style="width: 100%; margin-top: 5%; border-top:1px solid; height: auto; float: left; border-collapse: collapse;box-sizing: border-box; ">

                    <?php
                    $idd = $row['customer_id'];
                    $catch = "select * from customer_signup where customer_id='$idd'";
                    $catchquery = mysqli_query($db, $catch);
                    $cat = mysqli_fetch_assoc($catchquery);
                    $cat['first_name'];
                    ?>

                    <div style="display: inline-flex; width: 100%; height: auto; ">
                        <div style="width: 80%; height: auto; ">
                            <p style="padding: 0.5%; color: black; text-align: left;  font-size: 25px; margin-top: -7px;"><?php echo $row['jobtitle']; ?></p>

                        </div>




                        <div style="width: 20%; height: auto; ">

                            <?php
                            $jbid = $row['jobid'];

                            $check = "select * from jobapplied where provider_id='$providerId' && customer_id='$idd' && job_id='$jbid' ";
                            $checkquery = mysqli_query($db, $check);
                           $checksum = mysqli_num_rows($checkquery);


                            if ($checksum > 0) {

                                $check = mysqli_fetch_assoc($checkquery);
                                $chk = $check['conditionApply'];
                                $jobidchk = $check['job_id'];

                                $che = "select * from jobapplied where job_id='$jbid' ";
                                $chequery = mysqli_query($db, $che);
                                $proposals = mysqli_num_rows($chequery);
                                

                                if ($chk !== "Applied") {

                            ?>

                                    <button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php $row['jobid']; ?>" style="color: white;">Apply </a></button>

                                <?php
                                } else {
                                ?>
                                    <p style="color: blue; font-size: 15px; padding-left: -14%;">Applied</p>
                                <?php
                                }
                            } else {
                                ?><button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php echo $row['jobid']; ?>" style="color: white;">Apply </a></button>
                            <?php
                            }


                            ?>



                        </div>
                    </div>
                    <div style="display: inline-flex; width: 100%; ">
                        <div style="width: 100%; font-size: 13px; color: black;">
                            <b><?php echo $row['jobtype']; ?></b>
                            <p><?php //echo $row['jobid']; 
                                ?></p>

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
$chequery=mysqli_query($db,$che);
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









        </div>
<?php

            }
            echo $pagination->createLinks();
        }
    } else {
        echo "dta nhi mojood";
    }
