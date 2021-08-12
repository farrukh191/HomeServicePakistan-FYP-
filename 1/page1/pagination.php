<?php
include('db.php');
$limit = 3;  
if (isset($_GET["page"])) { 
	$page  = $_GET["page"]; 
} 
else { 
	$page=1; 
};  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM gig ORDER BY gig_id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?>
<table class="table table-bordered table-striped">  

<tbody>  
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
			<div style="width: 100px; height: 100px; border:1px solid black; float: left;">
				<?php echo $row["gig_id"]; ?>
				<?php echo $row["project_title"]; ?>

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