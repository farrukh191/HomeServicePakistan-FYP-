<?php session_start(); ?>

<?php
include('../db.php');
?>
<?php
$email = $_SESSION['email'];
$pas = $_SESSION['password'];
$providerId = $_SESSION['providerId'];


$providerCat=$_SESSION['pcategory'];

$limit = 8;
if (isset($_GET["page"])) {
	$page  = $_GET["page"];
} else {
	$page = 1;
};


$start_from = ($page - 1) * $limit;



// hm yha condition lagaynge g k provider n apna gig bnaya h ya nhi agr nhi bnaye ga to job show nhi hoga
$gig_select = "select * from gig where provider_id='$providerId'";
$gig_query = mysqli_query($con, $gig_select);
echo "<br>";
$gig_count = mysqli_num_rows($gig_query);



if ($gig_count > 0) {
$fetch=mysqli_fetch_assoc($gig_query);
$fetch['jobCats'];



	$sql = "select * from jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id WHERE jobposting.jobcategory='$providerCat' ORDER BY jobid DESC LIMIT $start_from, $limit ";

	$rs_result = mysqli_query($con, $sql);
	echo "<br>";
	$nums = mysqli_num_rows($rs_result);

	if ($nums > 0) {

?>



		<?php






		// yha pr condition check krega agr customerjobshow se arhi h tu data search krega wrna pura dekhayga

	    $valueGet = $_SESSION['value'];

		if ($valueGet !== "") {




			$start_from = ($page - 1) * $limit;
    $sql = "select * from jobposting INNER JOIN customer_signup ON jobposting.customer_id = customer_signup.customer_id WHERE jobposting.jobcategory='$providerCat' and jobposting.jobtitle like '%$valueGet%' ORDER BY jobid DESC LIMIT $start_from, $limit ";

			$rs_result = mysqli_query($con, $sql);
			echo "<br>";
			$nums = mysqli_num_rows($rs_result);

			if ($nums > 0) {

				while ($rows = mysqli_fetch_array($rs_result)) {
					
		?>


					<!----  description detail  ---->

				<div class="media" style="width: 100%; margin-top: 5%; border-top:1px solid; height: auto; float: left; border-collapse: collapse;box-sizing: border-box; ">

					<?php  
$idd=$rows['customer_id'];
$catch="select * from customer_signup where customer_id='$idd'";
$catchquery=mysqli_query($con,$catch);
$cat=mysqli_fetch_assoc($catchquery);
$cat['first_name'];
						?>
					
					<div style="display: inline-flex; width: 100%; height: auto; ">
						<div style="width: 80%; height: auto; ">
							<p style="padding: 0.5%; color: black; text-align: left;  font-size: 25px; margin-top: -7px;"><?php echo $rows['jobtitle']; ?></p>

						</div>




						<div style="width: 20%; height: auto; ">

							<?php  
							$jbid=$rows['jobid'];

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

 	<button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php  $rows['jobid']; ?>" style="color: white;">Apply </a></button>

	<?php
 }

else{
	?>
	<p style="color: blue; font-size: 15px; padding-left: -14%;">Applied</p>
	<?php
}

}
else{
	?><button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php echo $rows['jobid']; ?>" style="color: white;">Apply </a></button>
	<?php
}


?>

							

						</div>
					</div>

					<div style="display: inline-flex; width: 100%; ">
						<div style="width: 100%; margin-top: -10px; color: black;height: auto; ">
							<p><?php echo $rows['jobtype']; ?></p>
							<p><?php echo $rows['jobid']; ?></p>
							
						</div>

					</div>
					<div style="display: inline-flex; width: 100%; ">
						<div style="width: 100%; height: auto; ">

							<p class="addReadMore showlesscontent" style="text-align: left; color: black !important; padding: 5px 5px 0px 5px; margin-top: -3px;">
								<?php //echo $rows['description']; ?></p>
								<?php include('desc.php') ?>

						</div>

					</div>


<?php  
	
$che="select * from jobapplied where job_id='$jbid' ";
$chequery=mysqli_query($con,$che);
$proposals=mysqli_num_rows($chequery);
?>



					<div style="display: inline-flex; width: 100%; height: 40px; padding-top: 8px;">
						<div style="width: 100%; height: auto; ">
							<p style="float: left; margin-top: -1px; color: black;">File: </p>
							<p style="float: left; margin: -1px 0% 0% 10%; color: black;">Proposals: <?php echo $proposals ?> </p>
							<p style="margin-top: -1px; float: right; color: black; padding: 0.5%;"><?php echo $rows['country']; ?> <?php echo $rows['city']; ?></p>

						</div>

					</div>
				</div>
				<?php


				};
			} else {
				echo "data nhi h";
			}
		} else {
			while ($rows = mysqli_fetch_array($rs_result)) {
				 $_SESSION['desc'] = $rows['description'];

				?>


				<!----  description detail  ---->

				<div class="media" style="width: 100%; margin-top: 5%; border-top:1px solid; height: auto; float: left; border-collapse: collapse;box-sizing: border-box; ">
<!-- 						<p>customer id: <?php echo $rows['customer_id']; ?></p> -->

						<?php  
$idd=$rows['customer_id'];
$catch="select * from customer_signup where customer_id='$idd'";
$catchquery=mysqli_query($con,$catch);
$cat=mysqli_fetch_assoc($catchquery);
$cat['first_name'];
						?>
					
					<div style="display: inline-flex; width: 100%; height: auto; ">

						<div style="width: 80%; height: auto; ">
							<p style="padding: 0.5%; color: black; text-align: left;  font-size: 25px; margin-top: -7px;"><?php echo $rows['jobtitle']; ?></p>

						</div>
						<div style="width: 20%; height: auto; ">

							<?php  
							$jbid=$rows['jobid'];

$check="select * from jobapplied where provider_id='$providerId' && customer_id='$idd' && job_id='$jbid' ";
$checkquery=mysqli_query($con,$check);
$checksum=mysqli_num_rows($checkquery);

if ($checksum > 0) {

 $check=mysqli_fetch_assoc($checkquery);

 $chk = $check['conditionApply'];
 $jobidchk= $check['job_id'];





 if ($chk !== "Applied"  ) {
 
?>

 							<button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php echo $rows['jobid']; ?>" style="color: white;">Apply</a></button>

	<?php
 }

else{
	?>
	<p style="color: blue; font-size: 15px; ">Applied</p>
	<?php
}

}
else{
	?><button id="apply1" class="btn btn-primary" data-toggle="modal" style="border-color: #08c2f3; float: right; margin-top: 4%; width: 70%; background-color:#08c2f3; color: white;"><a href="customerjobshow/jobapplication.php?p_id=<?php echo $providerId; ?>&&c_id=<?php echo $idd; ?>&&j_id=<?php echo $rows['jobid']; ?>" style="color: white;">Apply </a></button>
	<?php
}


?>

							

						</div>
					</div>

					<div style="display: inline-flex; width: 100%; ">
						<div style="width: 100%; margin-top: -10px; color: black;height: auto; ">
							<p><?php echo $rows['jobtype']; ?></p>
							<p><?php echo $rows['jobid']; ?></p>
						
						</div>

					</div>
					<div style="display: inline-flex; width: 100%; color: black; ">
						<div style="width: 100%; height: auto; ">

							<p class="addReadMore showlesscontent" style="text-align: left; color: black !important; padding: 5px 5px 0px 5px; margin-top: -3px;">
								<?php //echo $rows['description']; ?></p>
								<?php include('desc.php') ?>

						</div>

					</div>



<?php  
	
$che="select * from jobapplied where job_id='$jbid' ";
$chequery=mysqli_query($con,$che);
$proposals=mysqli_num_rows($chequery);
?>

					<div style="display: inline-flex; width: 100%; height: 40px; padding-top: 8px;">
						<div style="width: 100%; height: auto; ">
							<p style="float: left; margin-top: -1px; color: black;">File: </p>
							<p style="float: left; margin: -1px 0% 0% 10%; color: black;">Proposals: <?php echo $proposals ?> </p>
							<p style="margin-top: -1px; float: right; color: black; padding: 0.5%;"><?php echo $rows['country']; ?> <?php echo $rows['city']; ?></p>

						</div>

					</div>
				</div>
		<?php


			};
		}
	} else {
		?>

		<h5 style="text-align: center; background-color: dodgerblue; width: 100%; color: white; padding: 2px; font-weight: bold;">There is no job posted yet..</h5>

	<?php


	}
} else {
	?>
	<h5 style="text-align: center; background-color: dodgerblue; width: 100%; color: white; padding:2px; margin-top: 5%; font-weight: bold;">There is no job yet please create your Gig first...</h5>
<?php

}


?>

<!DOCTYPE html>
<html>
<head>
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

</body>



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

    </html>	