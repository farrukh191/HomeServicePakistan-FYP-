<?php
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');
    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 5;
    
    //set conditions for search
    $whereSQL = $orderSQL = '';
     $keywords = $_POST['keywords'];
     $keywordcity = $_POST['keywordcity'];
    $sortBy = $_POST['sortBy'];
    if(!empty($keywords) OR !empty($keywordcity)){
         $whereSQL = "WHERE type LIKE '%".$keywords."%' && date LIKE '%".$keywordcity."%'";
    }
    if(!empty($sortBy)){
        $orderSQL = " ORDER BY contact_id ".$sortBy;
    }else{
        $orderSQL = " ORDER BY contact_id DESC ";
    }

    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as contact_id FROM contact ".$whereSQL.$orderSQL);
    $resultNum =mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['contact_id'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query = mysqli_query($db,"SELECT * FROM contact $whereSQL $orderSQL LIMIT $start,$limit");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['contact_id'];
        ?>
            
<div class="entry-wrap shadow-1" style=" border-left: 4px solid #7ad03a; height: auto;"><!-- blog entry -->
                                
                                <div class="entry-content" style="color: steelblue;">
                                     <div class="entry-title">
                                        <h4> <i class="fa fa-user green-1"></i> <?php echo $row["name"]; ?></h4>
                                    </div>
                                    <div class="entry-metas">
                                        <ul>
                                            <li><a href="#"> <?php echo $row["type"]; ?></a></li>
                                            <li><i class="fa fa-clock-o blue-1"></i><a href="#">  <?php echo $row["date"]; ?></a></li>







                                           
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
        <?php } ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
<?php } } ?>