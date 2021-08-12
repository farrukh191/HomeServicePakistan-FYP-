<?php session_start(); ?>
<?php
include('../db.php');

 $providerid=$_SESSION['providerId'];

$limit = 3;  
if (isset($_GET["page"])) { 
	$page  = $_GET["page"]; 
} 
else { 
	$page=1; 
};  
$start_from = ($page-1) * $limit;  
  
 $sql = "SELECT * FROM gig where provider_id='$providerid' ORDER BY gig_id ASC LIMIT $start_from, $limit "; 

$rs_result = mysqli_query($con, $sql);  echo "<br>";
$nums=mysqli_num_rows($rs_result); 

if ($nums > 0) {
	
?>
	<table class="table table-bordered table-striped">  

<tbody>  
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
	<div style="margin-top: 3%;">
			<div style="width: 210px; height: 190px; border: 1px solid gray; margin-left: 2%; margin-bottom: 7%;  float: left;">
				<img src="Assets1/gig/<?php echo $row['gigimage']?>" style="width: 100%;  height: 100%; opacity: 0.8; object-fit: cover;" />
					

					<div >
						<h6 style="padding: 2%; text-transform: capitalize; text-align: left; color: black;"><?php echo $row["project_title"]; ?></h6>
					</div>

				<?php //echo $row["gig_id"]; ?>
				<?php //echo $row["project_title"]; ?>

			</div>
	</div>		
            <!-- <tr>  
            <td><?php // echo $row["gig_id"]; ?></td>  
            <td><?php // echo $row["project_title"]; ?></td>  
            </tr>  --> 
<?php  
};  
?>  
</tbody>  
</table> 

<?php

}
else{
	?>
	<p style="position: absolute;left: 37%; ">there is no gigs you make yet.</p>

	<?php
	//echo "there is no gigs you make yet.";
	//echo $_SESSION['msg']= $msg;

}

?>
   