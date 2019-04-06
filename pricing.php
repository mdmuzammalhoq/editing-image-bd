<?php include 'inc/header.php'; ?>
<div class="samples-area">
	<div class="section-heading samples-heading">
		<h1>Our Pricing List</h1>
	</div>
	<div class="container">	
		<p class="description">
			You will get a good price from us 
		</p>
		
		<div class="row ">
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Cliping Path</h1>
				</div>
<?php 
	$query = "SELECT * FROM tbl_pricing WHERE cat='Cliping Path' ";
	$pricing = $db->select($query);
	if ($pricing) {
		while ($result = $pricing->fetch_assoc()) {
?>
				<p><?php echo $result['name']; ?> : <span class="right_text"><?php echo $result['amount']; ?> $ </span></p>
<?php } } ?>	
				<a href="contact.php"> Get Service</a>	
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<?php 
	$query = "SELECT * FROM tbl_pricing WHERE cat='Image Masking' ";
	$pricing = $db->select($query);
	if ($pricing) {
		while ($result = $pricing->fetch_assoc()) {
?>
				<p><?php echo $result['name']; ?> : <span class="right_text"><?php echo $result['amount']; ?> $ </span></p>
<?php } } ?>
				<a href="contact.php"> Get Service</a>			
			</div>	
			<!-- <div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>	
				<a href="contact.php"> Get Service</a>			
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>	
				<a href="contact.php"> Get Service</a>			
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>	
				<a href="contact.php"> Get Service</a>			
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>	
				<a href="contact.php"> Get Service</a>			
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>	
				<a href="contact.php"> Get Service</a>			
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-12 single-price">
				<div class="service-name">
					<h1>Image Masking</h1>
				</div>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>
				<p>Simple : <span class="right_text"> 1 $ </span></p>	
				<a href="contact.php"> Get Service</a>			
			</div>
		</div> -->
	</div>

</div>

<?php include 'inc/footer.php'; ?>
