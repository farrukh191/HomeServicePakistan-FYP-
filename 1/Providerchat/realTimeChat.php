<?php  
session_start();

include("db.php");
$pic = $_SESSION['pics'];


$fromUser=$_POST['fromUser'];
$toUser=$_POST['toUser'];
$output="";


?>


<?php

function getDateTimeDiff($date){

 $now_timestamp = strtotime(date('Y-m-d h:i:sa'));
 $diff_timestamp = $now_timestamp - strtotime($date);
 
 if($diff_timestamp < 60){
  return 'few seconds ago';
 }
 else if($diff_timestamp >=60 && $diff_timestamp<3600){
  return round($diff_timestamp/60).' mins ago';
 }
 else if($diff_timestamp >=3600 && $diff_timestamp<86400){
  return round($diff_timestamp/3600).' hours ago';
 }
 else if($diff_timestamp >=86400 && $diff_timestamp<(86400*30)){
  return round($diff_timestamp/(86400)).' days ago';
 }
 else if($diff_timestamp >=(86400*30) && $diff_timestamp<(86400*365)){
  return round($diff_timestamp/(86400*30)).' months ago';
 }
 else{
  return round($diff_timestamp/(86400*365)).' years ago';
 }
}



$timezone=date_default_timezone_get();
$timezone;

$set=date_default_timezone_set('Asia/Karachi');
//echo date('h:i:sA');


// echo '<p>Current Time is: <strong>'.date('Y-m-d h:i:sA').'</strong></p>';
// echo '<p>'.getDateTimeDiff('2018-09-09 16:55:03').'</p>';
// echo '<p>'.getDateTimeDiff('2018-09-09 11:51:00').'</p>';
// echo '<p>'.getDateTimeDiff('2011-09-09 11:51:00').'</p>';
// echo '<p>'.getDateTimeDiff('2018-04-09 11:51:00').'</p>';
// echo '<p>'.getDateTimeDiff('2015-04-09 11:51:00').'</p>';
// echo '<p>'.getDateTimeDiff('2021-05-17 18:24:19').'</p>';


?>



<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
@media (max-width: 500px) {
  .chat-body{
    width: 200px;
   margin-left: -30%;
    background-color: yellow;
  }
}
@media (max-width: 450px) {
  .chat-body{
    width: 150px;
   margin-left: -50%;
    background-color: yellow;
  }
}


	</style>
</head>
<body>


<?php 



$chats=mysqli_query($con,"select * from message where(Fromuser = '".$fromUser."' AND Touser = '".$toUser."') OR (Fromuser ='".$toUser."' AND Touser = '".$fromUser."')")
or die("Failed to the database".mysql_error());


?>
                            <ul class="chat" >
	<?php
								

while ($chat=mysqli_fetch_assoc($chats)) {

	//echo '<p>'.getDateTimeDiff('2021-05-17 18:24:19').'</p>';

								if ($chat['Fromuser'] == $fromUser) {

									 ?>
                                        
                                    <li class="right clearfix" style="width: 60%; margin-left: 37%; margin-right: 3%;">
                                        <span class="chat-img pull-right">
                                            <img src="../Assets1/provider/<?php echo $pic ?>" alt="User Avatar" style="object-fit: cover;">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header ">
                                                <p class="primary-font boldleft1">You</p>
                                                <p class="pull-right pull text-muted"><i class="fa fa-clock-o"></i> <?php echo getDateTimeDiff($chat['date']); ?></p>
                                            </div>
                                            <p style="font-size: 13px;">
                                                <?php echo $chat['message']; ?> 
                                            </p>
                                        </div>
                                    </li>
                                            <?php
										}


									else{
										$d= $chat['jobid'];

$slenmae="SELECT * from customer_signup INNER JOIN jobapplied ON customer_signup.customer_id=jobapplied.customer_id WHERE jobapplied.job_id='$d' ";
										$q=mysqli_query($con,$slenmae);
										$f=mysqli_fetch_assoc($q);
										$f['first_name'];
									    $f['job_id'];
										
										?>
                                               <li class="left clearfix"  style="width: 60%; ">
                                        <span class="chat-img pull-left">
                                            <img src="../Assets1/customer/<?php echo $f['file']; ?>" alt="User Avatar" style="object-fit: cover;">
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header ">
                                                <p class="primary-font boldleft1"><?php echo $f['first_name'].' '.$f['last_name']; ?></p>
                                                <p class="pull-right pull text-muted" ><i class="fa fa-clock-o"></i> <?php echo getDateTimeDiff($chat['date']); ?></p>
                                            </div>
                                            <p style="font-size: 13px;">
                                                <?php echo $chat['message']; ?>
                                            </p>
                                        </div>
                                    </li>
                                            <?php
									}






							}



?>
</ul>

<?php


						echo $output;
							
						
?>



</body>
</html>