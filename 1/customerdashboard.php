<?php session_start(); ?>
<?php 

include('db.php');
	 $pis =$_SESSION['picture']; 
     $cemail=$_SESSION['cemail']; 
     $cpass=$_SESSION['cpassword']; 
     $cid=$_SESSION['CcustomerId']; 
	 $fname= $_SESSION['cfirst']; 
	 $lname= $_SESSION['clast']; 
    if (!$cpass) {
	header('location:login.php?Access Denied..');
}
?>

<?php include('customerAssets/navbar.php') ?>
		
<div style="margin-top: -10%;">
	<?php include('customerAssets/header.php') ?>
</div>
<div class="preloader"><span class="preloader-gif"></span></div> 
		<!--================================SERVICES SECTION==========================================-->
		
		<section class="our-services">
			<div class="container">
				<div class="row services-wrap padding-bottom-70">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service-box bgwhite shadow-2">
							<div class="service-tag">
								<img src="images/services-tag.png" alt="services tag"/>
							</div>
							<div class="service-icon">
								<i class="fa fa-search red-1"></i>
							</div>
							<?php  

								$queryTot = mysqli_query($con,"SELECT COUNT(*) as jobid FROM jobposting where customer_id ='$cid'");
							    $resultTot =  mysqli_fetch_assoc($queryTot);
							  
							?>
							<div class="service-title">
								<h5>Total job posted</h5>
							</div>
							<div class="service-disc">
								<h3><?php echo  $rowCount = $resultTot['jobid']; ?></h3>
							</div>
						</div>
						</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service-box bgwhite shadow-2">
							<div class="service-tag">
								<img src="images/services-tag.png" alt="services tag"/>
							</div>
							<div class="service-icon">
								<i class="fa fa-check-circle green-1"></i>
							</div>
							<?php  

								$queryCon= mysqli_query($con,"SELECT COUNT(*) as jobconfirmed_id FROM jobconfirmed where cust_id ='$cid'");
							    $resultCon=  mysqli_fetch_assoc($queryCon);
							  
							?>
							<div class="service-title">
								<h5>Total confirmed jobs</h5>
							</div>
							<div class="service-disc">
								<h3><?php echo  $rowCount1 = $resultCon['jobconfirmed_id']; ?></h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service-box bgwhite shadow-2">
							<div class="service-tag">
								<img src="images/services-tag.png" alt="services tag"/>
							</div>
							<div class="service-icon">
								<i class="fa fa-globe blue-1"></i>
							</div>
							<div class="service-title">
								<h5>See your jobs</h5>
							</div>
							<div class="service-disc">
								<h3>12</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	
		
		<!--================================FEATURE LISTING SECTION==========================================-->
		
		
		<!--================================LISTING SECTION ==========================================-->
		
		<section class="listing-section padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4> jobs</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="add-listing-wrapper">
					<div class="add-listing-nav shadow-1">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-6 col-xs-6 pull-left">
								<div class="listing-tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#latest-listing">Latest Jobs</a></li>
										<li><a data-toggle="tab" href="#recent-listing">Recent Jobs</a></li>
										
									</ul>
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 pull-right">
								<div class="view-switcher">
									<ul>
										<li class="gridview"><i class="fa fa-th"></i></li>
										<li class="listview  active"><i class="fa fa-th-list"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="listing-main gridview tab-content padding-top-50">
						<div id="latest-listing" class="tab-pane active">
								<div class="listing-wrapper row">

							<?php  

								$queryTot = mysqli_query($con,"SELECT * FROM `jobposting` WHERE customer_id='$cid' ORDER BY jobid DESC LIMIT 0,4
");
							    
							    while ($resultTot =  mysqli_fetch_assoc($queryTot)) {
							    	?>

									<div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
										<div class="listing-item clearfix">
											<!-- <div class="figure">
												<img src="images/listings/270x220/01.jpg" alt="listing item"/>
												<div class="listing-overlay">
													<div class="listing-overlay-inner rgba-bgyallow-1">
														<div class="overlay-content">
															
														</div>
													</div>
												</div>
											</div> -->
											<div class="listing-content clearfix">
												<div class="listing-meta-cat">
												<i  style="width: 50px; height: 50px; border-radius: 40px; text-align: center; padding-top: 25%; color: #fff; font-size: 25px; background-color:#fecc17;" class="fa fa-hourglass-half white"></i>
												</div>
												<div class="listing-title" style="height: 130px;">
													<h6><a href="single-listing.html"><?php echo $resultTot['jobtitle']; ?></a></h6>
													
													<p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; "><?php echo $resultTot['description']; ?></p>
  													
												</div>

												<div class="listing-disc">
													<p><?php echo $resultTot['description']; ?></p>
												</div>
												<div class="listing-location pull-left"><!-- location-->
													<a href="#"><?php echo $resultTot['jobcategory']; ?></a>
													<a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
												</div><!-- location end-->
												<div class="star-rating pull-right"><!-- rating-->
													<div ><?php echo $resultTot['estimatedtime']; ?></div>
												</div><!-- rating end-->
											</div>
										</div>
										<div class="listing-border-bottom bgyallow-1"></div>
									</div><!-- /.ITEM -->
						 
							    	<?php
							    }
							  
							?>
							 

									
								</div>
							</div>


							<div id="recent-listing" class="tab-pane">
								<div class="listing-wrapper row">
									<?php  

								$queryTot1 = mysqli_query($con,"SELECT * FROM `jobposting` WHERE customer_id='$cid' ORDER BY jobid DESC LIMIT 4,4");
							    
							    while ($resultTot1 =  mysqli_fetch_assoc($queryTot1)) {
							    	?>
									<div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
										<div class="listing-item clearfix">
											<div class="figure">
												<!-- <img src="images/listings/270x220/01.jpg" alt="listing item"/> -->
												<div class="listing-overlay">
													<div class="listing-overlay-inner rgba-bgyallow-1">
														<div class="overlay-content">
															<ul class="listing-links">
																<li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
																<li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>
																<li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="listing-content clearfix">
												<div class="listing-meta-cat">
													<i  style="width: 50px; height: 50px; border-radius: 40px; text-align: center; padding-top: 25%; color: #fff; font-size: 25px; background-color:#fecc17;" class="fa fa-hourglass-half white"></i>
												</div>
												<div class="listing-title" style="height: 130px;">
													<h6><a href="single-listing.html"><?php echo $resultTot1['jobtitle']; ?></a></h6>
													
													<p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; "><?php echo $resultTot1['description']; ?></p>
  													
												</div>

												<div class="listing-disc">
													<p><?php echo $resultTot1['description']; ?></p>
												</div>
												<div class="listing-location pull-left"><!-- location-->
													<a href="#"> <?php echo $resultTot1['jobcategory']; ?></a>
													<a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
												</div><!-- location end-->
												<div class="star-rating pull-right"><!-- rating-->
													<div ><?php echo $resultTot1['estimatedtime']; ?></div>
												</div><!-- rating end-->
											</div>
										</div>
										<div class="listing-border-bottom bgyallow-1"></div>
									</div><!-- /.ITEM -->
<?php
							    }
							  
							?>
									
								</div>
							</div>



					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		
		
		<section class="callout-section padding-top-70 padding-bottom-70 bgwhite">
			<div class="container"><!-- section container -->
				<div class="callout-wrapper">
					<div class="callout-1">
						<div class="callout-message"><!--blog entry column-->
							<h2 class="white">START YOUR new<span class="blue-1">BUSINESS</span></h2>
							<h4 class="white">AMAZING<span class="yallow-1">classified</span>html Template</h4>
						</div><!--blog entry column end-->
						<div class="callout-btns"><!--blog entry column-->
							<a class="bgblue-1 white" href="jobposting.php">Post jobs</a>
							<a class = "bggreen-1 white register" data-toggle = "modal" data-target = "#register" href="#">Contact Us</a>
						</div><!--blog entry column end-->
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		
		<!--================================BLOG SECTION==========================================-->
		
		
		
		<!--================================ PARTNER SECTION ==========================================-->
		
		<section class="partner-section padding-top-70 padding-bottom-40">
			
		</section>
		
		<!--================================SOCIAL SECTION==========================================-->
		
		
		<!--================================ FOOTER AREA ==========================================-->
		
				<?php include('./footer.php') ?>