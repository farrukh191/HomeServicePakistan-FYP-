<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Ajax Pagination with Search and Filter in PHP by SemicolonWorld</title>
<link href='style.css' rel='stylesheet' type='text/css'>

<script src="jquery.min.js"></script>
<script>
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords1 = $('#keywords').val();
    var keywordcity1 = $('#keywordcity').val();
    var sortBy1 = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: 'getData.php',
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
</head>
<body>
<h1>Ajax Pagination with Search and Filter in PHP by SemicolonWorld</h1>
<div class="post-search-panel">
    <input type="text" id="keywords" placeholder="Type keywords to filter posts" onkeyup="searchFilter()"/>
    <input type="text" id="keywordcity" placeholder="Type keywords to filter posts" onkeyup="searchFilter()"/>
    <select id="sortBy" onchange="searchFilter()">
        <option value="">Sort By</option>
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
</div>
<div class="post-wrapper">
    <!-- <div class="loading-overlay"><div class="overlay-content">Loading.....</div></div> -->
    <div id="posts_content">
    <?php
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');
    
    $limit1 = 5;
    
    //get number of rows
    $queryNum1 = mysqli_query($db,"SELECT COUNT(*) as provider_id FROM provider_signup");
    $resultNum1 =  mysqli_fetch_assoc($queryNum1);
    $rowCount1 = $resultNum1['provider_id'];
    
    //initialize pagination class
    $pagConfig1 = array(
        'totalRows' => $rowCount1,
        'perPage' => $limit1,
        'link_func' => 'searchFilter'
    );
    $pagination1 =  new Pagination1($pagConfig1);
    
    //get rows
    $query1 =mysqli_query($db,"SELECT * FROM provider_signup ORDER BY provider_id DESC LIMIT $limit");
    
    if(mysqli_num_rows($query1) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row1 =mysqli_fetch_assoc($query1)){ 
                $postID1 = $row1['provider_id'];
        ?>
            <div class="list_item"><a href="javascript:void(0);"><h2><?php echo $row1["p_profession"]; ?></h2></a></div>
        <?php } ?>
        </div>
        <?php echo $pagination1->createLinks(); ?>
    <?php } ?>
    </div>
</div>
</body>
</html>