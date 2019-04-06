<?php include 'inc/header.php'; ?>
	<div class="clip-heading">
		<h1 style="color: #fff;">Product Image Editing</h1>
	</div>
	<div class="clip-area">
		<div class="clip-content container">
<?php 
	$query = "SELECT * FROM tbl_all_pages WHERE position='pageheader' && category='Product Image Editing' order by id DESC limit 1 ";
	$position = $db->select($query);
	if ($position) {
		while ($result = $position->fetch_assoc()) {
?>
			<div class="content-top">
				<h5><?php echo $result['content']; ?></h5>
			</div>
<?php } } ?>
			<div class="content-middle">
				<div class="single-middle col-md-8 pull-left">
					<div class="content_image row">
<?php 
	$query = "SELECT * FROM tbl_all_pages WHERE category='Product Image Editing' order by id DESC ";
	$position = $db->select($query);
	if ($position) {
		while ($result = $position->fetch_assoc()) {
?>
						<div class="img_before col-md-12">
							<img src="adm/<?php echo $result['image']; ?>" alt="" />
							<h4 style="text-align: center;color: #9e1d1d;"><?php echo $result['title']; ?></h4>
							<p><?php echo $result['content']; ?></p>
						</div>
<?php } } ?>
					</div>
					<div class="title">
						
					</div>

				</div>
				<div class="col-md-4 pull-right">
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, corporis necessitatibus vel quas. Inventore eligendi voluptatem voluptatibus deserunt maxime, omnis vel reiciendis voluptate velit iure iusto sit, harum natus dolor!</p> -->
				</div>
			</div>
			<div class="content-bottom">
			
			</div>
		</div>
	</div>



<?php include 'inc/footer.php'; ?>