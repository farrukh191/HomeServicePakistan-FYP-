<?php  

$fname= $_SESSION['cfirst'];
    $lname= $_SESSION['clast'];
$pis =$_SESSION['picture']; 

?>

	<section class="static-section">
			<div class="container">
				<div class="static-header-content">
					<div class="static-header-text">
						
						<h2 class="white margin-bottom-30">WELCOME TO <span class="yallow-1"> Home Service <span class="blue-1"> Pakistan </span> </span></h2>
					</div>
					<br><br>
					<img src="Assets1/customer/<?php echo $pis; ?>"  style="width: 170px; height: 170px; margin:0 auto; border-radius: 100px; border:2px solid white; object-fit: cover; ">
					<!-- <div class="search-form-wrap2" style="width: 170px; height: 170px; margin:0 auto; border-radius: 100px; background-image: url('Assets1/customer/<?php echo $pis; ?>'); border:2px solid white; background-size: cover;">
						
					</div> -->
<br>
				<h4 class="white">Hello <span class="blue-1"> <?php echo $fname." ".$lname; ?> </span></h4>
				</div>
			</div>
		</section>
