<?php
session_start();
if(isset($_POST['page1'])){
    //Include pagination class file




    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');

    //$email=$_SESSION['email'];
     $phone = $_SESSION['phone'];
    $pas=$_SESSION['password'];
    $providerId=$_SESSION['providerId'];
if (!$pas) {

    ?>
    <script type="text/javascript">
      window.open('ClientLogin.php?Access Denied..', '_self');
    </script>
    <?php
    
}


    
    $start = !empty($_POST['page1'])?$_POST['page1']:0;
    $limit1 = 5;
    
    //set conditions for search
    $whereSQL = $orderSQL = '';
    $keywords = $_POST['keywords'];
    echo $keywordcity = $_POST['keywordcity'];
    $sortBy = $_POST['sortBy'];
    if(!empty($keywords) OR !empty($keywordcity)){
      $whereSQL = "WHERE jobapplied.provider_id='$providerId' && jobposting.jobtitle LIKE '%".$keywords."%' && jobposting.address LIKE '%".$keywordcity."%'";
    }
    else{
        $whereSQL = "WHERE jobapplied.provider_id='$providerId'";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY jobapplied.Apply_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY jobapplied.Apply_id DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as Apply_id FROM `jobapplied` INNER JOIN customer_signup ON customer_signup.customer_id=jobapplied.customer_id INNER JOIN jobposting ON jobposting.jobid=jobapplied.job_id ".$whereSQL.$orderSQL);
    $resultNum =mysqli_fetch_assoc($queryNum);
    $rowCount1 = $resultNum['Apply_id'];

    //initialize pagination class
    $pagConfig1 = array(
        'currentPage' => $start,
        'totalRows' => $rowCount1,
        'perPage' => $limit1,
        'link_func' => 'searchFilter1'
    );
    $pagination =  new Pagination1 ($pagConfig1);
                                
    //get rows
   
    $query = mysqli_query($db,"SELECT * FROM `jobapplied` INNER JOIN customer_signup ON customer_signup.customer_id=jobapplied.customer_id INNER JOIN jobposting ON jobposting.jobid=jobapplied.job_id $whereSQL $orderSQL LIMIT $start,$limit1");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['Apply_id'];
        ?>
                                                        
<div class="topnav">
  <a class="active" href="#home" style="width: 80px;"><img  src="Assets1/customer/<?php echo $row['file']; ?>" style="width: 50px; height: 46px; border: 1px solid grey; border-radius: 40px; object-fit: cover;" ></a>
  <a class="active" href="#home" style="width: 640px; text-align: left;"><?php echo $row['jobtitle']; echo "<br>";  ?></a>
  <a href="#news" style="width: 140px; text-align: left;"><i class="fa fa-map-marker" style="padding-right:3%; color: #08c2f3;"> </i><?php echo $row['address']; echo "<br>";  ?></a>
  <a href="#about" style="width: 140px; text-align: left; display: inline-block; padding-left:0; "><i class="fa fa-clock-o" style="padding-right:2%;"> </i><?php echo $row['estimatedtime'];echo "<br>";  ?> </a>
</div>
        <?php
    }
    ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
<?php } } ?>