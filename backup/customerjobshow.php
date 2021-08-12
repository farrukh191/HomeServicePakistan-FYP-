<?php


include('db.php'); 

$providerid=$_SESSION['providerId'];
$providerCat=$_SESSION['pcategory'];

$limit = 8;

 $sql = "select * from jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id WHERE jobposting.jobcategory='$providerCat' ORDER BY jobid DESC";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Pagination AJAX</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<body>
    <div class="container" style=" width: 100%;">




<form method="post">
	<div style="width: 100%; display: inline-flex; border-collapse: collapse; border-radius: 25px; margin-bottom: -3%;">
		<input type="text" name="search" placeholder="search for jobs" style="width: 85%; height: 50px; border:1px solid black;">
	<input type="submit" class="btn btn-primary" name="submit" style="width: 15%; height: 50px; ">
	</div>
	
</form>


<?php  

if (isset($_POST['submit'])) {
	 $sub=$_POST['search'];
     $_SESSION['value'] = $sub;

	}
	?>


        <div class="table-wrapper">
            
			<div id="target-content">loading...</div>
            
			<div class="clearfix">
               
					<ul class="pagination" style="float: right;">
                    <?php 
					if(!empty($total_pages)){
						for($i=1; $i<=$total_pages; $i++){
								if($i == 1){
									?>
								<li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
															
								<?php 
								}
								else{
									?>
								<li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);"  class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
								<?php
								}
						}
					}
								?>
					</ul>
               </ul>
            </div>
        </div>
    </div>
	<script>
	$(document).ready(function() {
		$("#target-content").load("customerjobshow/index.php?page=1");
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			$.ajax({
				url: "customerjobshow/index.php",
				type: "GET",
				data: {
					page : id
				},
				cache: false,
				success: function(dataResult){
					$("#target-content").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
    });
</script>
</body>
</html>