<?php 
session_start(); 

include('db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<style type="text/css">
	.main{
width: 100% !important;
margin-top: -6% !important;

margin-bottom: 4%;
		}


.register{
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

.while{
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
label, .lo {
    font-weight: bold !important;
    text-transform: uppercase !important;
    margin-bottom: 7px !important;
    font-size: 14px !important;
}
label, input {
    display: block !important;
    width: 100% !important;
}
form-submit {
  text-align: right; }

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
  border: 2px solid #ebebeb; }
  #reset:hover {
    border: 2px solid #329e5e;
    background: #329e5e;
    color: #fff; }

#submit {
  background: #329e5e;
  color: #fff;
  margin-right: 25px; }
  #submit:hover {
    background-color: #267747; }
    .form-input, .form-select {
  margin-bottom: 23px !important; 

}

 .form-input, .form-select {
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

select{
	
	height: 50px !important;
	width: 100% !important;
	border-radius: 5px;
}

p:hover{
	color: dodgerblue !important;
	border-left: 3px solid dodgerblue;
	padding-left: 5px; 
}


.nav {
  border-bottom: 1px solid #e0e0e0;
  list-style-type: none !important;
  text-align: left !important;
  margin-bottom: 1% !important;
  padding: 0 !important;

}

.nav li {
  display: inline-block !important;

   margin-top: 2%;
   width: 230px;
   text-align: left!important;
  font-size: 20px !important;
  padding-left: -60px !important;
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
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    var keywordcity = $('#keywordcity').val();
    var sortBy = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: 'jobConfirmMsg/getData.php',
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



<?php include("Navbar.php"); ?>


<?php
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



$selectproposal="select * from jobconfirmed  where prov_id='$providerId' ";
$queryproposal=mysqli_query($con,$selectproposal);

$countproposal=mysqli_num_rows($queryproposal);







?>






    <div class="main">
    	
				
        <div class="container" style="width: 75%; margin-top: 3%;">

        	

            <div class="signup-content">
                
                <div class="signup-form">



<div class="tab" style="float: left; cursor:pointer; margin-top: -65px; width: 100%;">
					<h4 class="text-left " style=" padding-bottom:10px;" >My Proposals</h4>
					<div class="tab-inner act" style="float: left;  " >
						
						<p class="tablinks  text-uppercase  " onclick="openCity(event, 'sign-up')" id="defaultOpen" style="color: black; ">Confirmed Jobs</p>
					</div>
					<div class="tab-inner act" style="float: left; padding-left: 15px;  " >
						<p class="tablinks text-uppercase  " onclick="openCity(event, 'sign-inn')" style="color: black; ">Applied Job</p>
					</div>
				</div>


				





                      <form class="form-detail"  method="POST" enctype="multipart/form-data" >


					<div class="tabcontent" id="sign-up">
						<h4 style="text-align: left;  color: #204d74; border-bottom: 1px solid #e0e0e0; padding: 1%;">Confirmed Proposal (<?php echo $countproposal ?>)</span></h4>

					


							<div class="sidebar-widget shadow-1" style="margin-top: 0%; ">
								<div class="sidebar-widget-content search-bar  clearfix" >
									<div class="sidebar-search-wrap">
										
										<form action="#"  style="display: inline-block !important;">
											<input type="text" id="keywords" class="sidebar-search-input" placeholder="Type keywords to filter posts" style="color:#333; display: inline-block !important; height: 50px; width: 50% !important; border-color: black; margin-bottom: 3px;" name="search" onkeyup="searchFilter()" />
											
											<input type="text" id="keywordcity" class="sidebar-search-input" placeholder="Search by city" name="search" style="color:#333; display: inline-block !important; width: 29% !important; height: 50px; border-color: black;" onkeyup="searchFilter()" />
											


											    <select id="sortBy" onchange="searchFilter()" style="width: 20% !important; border-color: black; display: inline-block !important; height: 50px;">
        <option value="">Sort By</option>
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
										</form>
									</div>
								</div>
							</div>





<div class="post-wrapper">
    <div class="loading-overlay"><div class="overlay-content">Loading.....</div></div>
    <div id="posts_content">
    <?php
    //Include pagination class file
    include('jobConfirmMsg/Pagination.php');
    
    //Include database configuration file
    include('jobConfirmMsg/dbConfig.php');
    
    $limit = 5;
    
    //get number of rows
    $queryNum = mysqli_query($db,"SELECT COUNT(*) as jobconfirmed_id FROM jobconfirmed where prov_id='$providerId'");
    $resultNum =  mysqli_fetch_assoc($queryNum);
    $rowCount = $resultNum['jobconfirmed_id'];
    
    //initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query =mysqli_query($db,"SELECT * FROM jobconfirmed where prov_id='$providerId' ORDER BY jobconfirmed_id DESC LIMIT $limit ");
    
    if(mysqli_num_rows($query) > 0){ ?>
        <div class="posts_list">
        <?php
            while($row =mysqli_fetch_assoc($query)){ 
                $postID = $row['job_id'];
        ?>
	 	<ul class="nav">
						  <li><a href="#home"><?php echo $row['job_id']; echo "<br>";  ?></a></li>
						  <li><a href="#about"><?php echo $row['cust_id']; echo "<br>";  ?></a></li>
						  <li><a href="#clients"><?php echo $row['prov_id']; echo "<br>";  ?></a></li>  
						  <li><a href="#contact"><?php echo $row['confirmed']; echo "<br>";  ?></a></li>
						</ul>
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

						<h3 style="text-align: center; color: #204d74">page 2</h3>
						
						
                       
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