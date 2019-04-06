<?php include 'inc/header.php'; ?>  

<div class="samples-area">
	<div class="section-heading samples-heading">
		<h1>Our Blog</h1>
	</div>
	<div class="container">
		<div class="row section-padding">
<?php 
	$query = "SELECT * FROM tbl_all_pages WHERE category='blog' order by id DESC ";
	$position = $db->select($query);
	if ($position) {
		while ($result = $position->fetch_assoc()) {
?>
			<div class="col-md-4 col-sm-6 col-xs-12 single-blog">				
				<div class="blog-img">
					<img src="adm/<?php echo $result['image']; ?>" alt="" />
				</div>				
				<div class="blog-title">	
					<h1><?php echo $result['title']; ?></h1>
				</div>
				<div class="blog-content">
					<p><?php echo $result['content']; ?></p>
				</div>
			</div>
<?php } } ?>
										
		</div>
	</div>
	<div class="samples-content container">
		
	</div>
</div>

<?php include 'inc/footer.php'; ?>
