<?php
session_start();
 $rid=$_SESSION['rid'];
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');

    $email=$_SESSION['email'];
    $pas=$_SESSION['password'];
    $providerId=$_SESSION['providerId'];
if (!$pas) {

    ?>
    <script type="text/javascript">
      window.open('ClientLogin.php?Access Denied..', '_self');
    </script>
    <?php
    
}


    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 5;
    
    //set conditions for search
    $whereSQL = $orderSQL = '';
   // $keywords = $_POST['keywords'];
   // $keywordcity = $_POST['keywordcity'];
    $sortBy = $_POST['sortBy'];
    if(!empty($keywords) OR !empty($keywordcity)){
      $whereSQL = "WHERE reporting.provider_id='$rid' && customer_signup.first_name LIKE '%".$keywords."%' && customer_signup.last_name LIKE '%".$keywordcity."%'";
    }
    else{
        $whereSQL = "WHERE reporting.provider_id='$rid'";

    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY reporting.reporting_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY reporting.reporting_id DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) AS reporting_id FROM `reporting` INNER JOIN customer_signup ON customer_signup.customer_id=reporting.customer_id  ".$whereSQL.$orderSQL);
    $resultNum =  mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['reporting_id'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
                                
    //get rows
  
    $query = mysqli_query($db,"SELECT * FROM `reporting` INNER JOIN customer_signup ON customer_signup.customer_id=reporting.customer_id 
        $whereSQL $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['reporting_id'];
        ?>
        

<div class="entry-wrap shadow-1" style=" border-left: 4px solid #7ad03a; height: auto;"><!-- blog entry -->
                                
                                <div class="entry-content">
                                    <div class="entry-title" style="height: 50px; ">
                                        <img style="height: 50px; width: 50px; object-fit: cover; float: left; border-radius: 40px; margin-right: 2%;" src="../Assets1/customer/<?php echo $row['file'] ?>" >
                                        <h4><?php echo $row['first_name']." ".$row['last_name']; ?></h4>
                                    </div>
                                    <div class="entry-metas">
                                        <ul>
                                            <!-- <li><i class="fa fa-user green-1"></i><?php echo "catogry" ?><a href="#"> </a></li> -->
                                            <li><i class="fa fa-clock-o blue-1"></i><a href="#"> <?php echo $row['dat']; ?> </a></li>




                                           
                                        </ul>
                                    </div>
                                    <div class="entry-disc">
                                       <p> <?php echo $row['message']; ?></p>
                                                <p style="float: left">
                                              <br > 
                                           Reporting : <?php echo $row['report']; ?>

                                        </p>
                                    </div>
                                    <div class="entry-readmore" >
                                        
                                    </div>
                                </div>
                            </div><!-- blog entry end -->
        <?php
    }
    ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
<?php } } ?>