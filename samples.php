<?php include 'inc/header.php'; ?>
<div class="samples-area">
	<div class="section-heading samples-heading">
		<h1>OUR WORK SAMPLES</h1>
	</div>
	<div class="container">
		<div class="row section-padding">
			
<?php 
	$query = "SELECT * FROM tbl_all_pages WHERE category='WORK SAMPLES' order by id DESC ";
	$position = $db->select($query);
	if ($position) {
		while ($result = $position->fetch_assoc()) {
?>			
			
			<div class="col-md-4 col-sm-6 col-xs-12 single-sample">
				<div class="single-sample-before">
					<img src="adm/<?php echo $result['image']; ?>" alt="" />
					<div class="before-text">
						<p>Before</p>
					</div>
				</div>
				<div class="single-sample-after">
					<div class="after-text">
						<p>After</p>
					</div>
				</div>
			</div>
<?php } } ?>						
		</div>
	</div>
	<div class="samples-content container">
		
	</div>
</div>

<?php include 'inc/footer.php'; ?>
