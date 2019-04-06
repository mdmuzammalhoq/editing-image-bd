<?php include 'inc/header.php'; ?> 
<?php include 'inc/slider.php'; ?>
	
	
	
	
	<!--service Promo -start-->
<?php 
	$query = "SELECT * FROM section_two ORDER BY id DESC limit 1";
	$sectionTwo = $db->select($query);
	if ($sectionTwo) {
		while ($result = $sectionTwo->fetch_assoc()) {
?>
	<div class="service-promo section-padding ">
		<div class="container text-center">
		<div class="section-heading">
			<h1><?php echo $result['title']; ?></h1>
		</div>
		<div class="promo-desc">
			<p><?php echo $result['content']; ?></p>
			<p>
				<a href="#">Request A Quote</a>
				<a href="#">Get Free Trial</a>
			</p>
		</div>
		</div>
	</div>
<?php } } ?>
	<!--service Promo  end-->

	<!--service -video -start-->
	<div class="service-video-promo section-padding">
		<div class="container">
<?php 
	$query = "SELECT * FROM tbl_services ORDER BY id DESC limit 1";
	$services = $db->select($query);
	if ($services) {
		while ( $resullt = $services->fetch_assoc()) {
?>
			<div class="col-md-7">
				<div class="section-heading">
					<h1><?php echo $resullt['title']; ?></h1>
				</div>
				<div class="service-video-promo-desc">
					<p><?php echo $resullt['content']; ?></p>
					
				</div>
			</div>
<?php } } ?>
			<div class="col-md-5">
			<div class="service-video">			
				<div id="fawesome-carousel-slide" class="carousel slide" data-ride="carousel">	

					<div class="carousel-inner" role="listbox">
<?php 
	$query = "select * from service_images order by id limit 5";
	$slider = $db->select($query);
	if ($slider) {
		while ($result = $slider->fetch_assoc()) {
 ?>
 <?php 
 	if ($result['status'] == 'active') { 
 		$query2 = "select * from service_images where status='active' order by id desc limit 1";
 		$active_slider = $db->select($query2);
 		if ($active_slider) {
 			while ($ressult = $active_slider->fetch_assoc()) {

?>
						<div class="item active">
							<img src="adm/<?php echo $result['image']; ?>" alt="" />
						</div>
 <?php	} } }else{ ?>
						<div class="item">
							<img src="adm/<?php echo $result['image']; ?>" alt="" />
						</div>
<?php } } } ?>
												
					</div>					 
					<a class="left fawesome-control" href="#fawesome-carousel-slide" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="right fawesome-control" href="#fawesome-carousel-slide" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
				</div>
			</div>
		</div>	
	</div>
	<!--service -video -end-->
	
	<!--why we -start-->
		<div class="why-we-area section-padding">
			<div class="why-we container">
<?php 
	$q = "SELECT * FROM start_content WHERE status='Our Offers' ORDER BY id DESC limit 1 ";
	$offer = $db->select($q);
	if ($offer) {
		while ($r = $offer->fetch_assoc()) {
?>
				<div class="col-md-4 our-offer">
					<div class="section-heading">
						<h1>Our Offers</h1>
						<p><?php echo $fm->textShorten($r['content'], 700); ?></p>
					</div>
				</div>
<?php } } ?>
<?php 
	$q = "SELECT * FROM start_content WHERE status='Our Special Service' ORDER BY id DESC limit 1 ";
	$offer = $db->select($q);
	if ($offer) {
		while ($r = $offer->fetch_assoc()) {
?>
				<div class="col-md-4 our-special-service">
					<div class="section-heading">
						<h1>Our Special Service</h1>
						<p><?php echo $fm->textShorten($r['content'], 700); ?></p>
					</div>
				</div>
<?php } } ?>
				<div class="col-md-4 why-we-right">
<?php 
	$q = "SELECT * FROM start_content WHERE status='Why Choose Us' ORDER BY id DESC limit 1 ";
	$offer = $db->select($q);
	if ($offer) {
		while ($r = $offer->fetch_assoc()) {
?>
					<div class="why-we-right-top">
					<div class="section-heading text-center">
						<h1>Why Choose Us </h1>
						</div>	
						<p><?php echo $fm->textShorten($r['content'], 200); ?></p>
					</div>
<?php } } ?>
					<div class="why-we-right-bottom">
						<div class="demo">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								
<?php 
	$q = "SELECT * FROM start_content WHERE status='Top-Right' ORDER BY id DESC limit 3 ";
	$offer = $db->select($q);
	if ($offer) {
		$i=0;
		while ($r = $offer->fetch_assoc()) {
			$i++;
?>	
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseTwo">
												<i class="more-less glyphicon glyphicon-plus"></i>
												<?php echo $r['title']; ?>
											</a>
										</h4>
									</div>
									<div id="<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<?php echo $fm->textShorten($r['content'], 200); ?>
										</div>
									</div>
								</div>
<?php } } ?>
								
							</div><!-- panel-group -->
						</div><!-- container -->
					</div>
				</div>
			</div>
		</div>
	<!--why we -end-->
<?php 
	$q = "SELECT * FROM start_content WHERE status='Content Bottom' ORDER BY id DESC limit 1 ";
	$offer = $db->select($q);
	if ($offer) {
		$i=0;
		while ($r = $offer->fetch_assoc()) {
			$i++;
?>	
	<div class="extra-section section-padding text-center">
		<div class="container">
			<div class="section-heading  ">
				<h1>Our Creative Clipping Path & Image Editing Services</h1>
			</div>
			<p><?php echo $fm->textShorten($r['content'], 200); ?></p>
		</div>	
	</div>
<?php } } ?>
	<div class="footer-feature">
		<div class="container footer-feature-content text-center section-padding">
			<div class="col-md-4">
				<p>Big size, large quantity image transfer</p>
				<h2>Need FTP Account?</h2>
				<a href="">Video Instruction</a>
			</div>
			<div class="col-md-4">
				<p>Excelent Quality</p>
				<h2>Need Free Trial</h2>
				<a href="#">Request A Quote</a>
			</div>
			<div class="col-md-4">
				<p>Reasonable price guaranteed</p>
				<h2>100% Satisfaction</h2>
				<a href="#">Place Order</a>
			</div>
		</div>	
	</div>
<?php include 'inc/footer.php'; ?>