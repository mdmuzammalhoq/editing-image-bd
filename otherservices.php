<?php include 'inc/header.php'; ?>
<div class="clip-heading">
		<h1 style="color: #fff;">Our Other Services</h1>
	</div>
	<div class="clip-area">
		<div class="clip-content container">
			<h1>&ensp;</h1>
			<?php 
	$query = "SELECT * FROM tbl_all_pages WHERE category='other Services' order by id DESC ";
	$position = $db->select($query);
	if ($position) {
		while ($result = $position->fetch_assoc()) {
?>
						<div class="img_before col-md-4">
							<img style="width: 300px; height: 200px;" src="adm/<?php echo $result['image']; ?>" alt="" />
							<h4 style="text-align: center;color: #9e1d1d;"><?php echo $result['title']; ?></h4>
							<p><?php echo $result['content']; ?></p>
						</div>
<?php } } ?>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>