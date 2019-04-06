<!--slider-start-->
	<div class="slider-area">
		<div class="slider container">
			<div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#fawesome-carousel" data-slide-to="1" class="active"></li>
						<li data-target="#fawesome-carousel" data-slide-to="2"></li>
						<li data-target="#fawesome-carousel" data-slide-to="3"></li>
						<li data-target="#fawesome-carousel" data-slide-to="4"></li>
						<li data-target="#fawesome-carousel" data-slide-to="5"></li>
					</ol>
				 
					<div class="carousel-inner" role="listbox">
						
<?php 
	$query = "select * from tbl_slider";
	$slider = $db->select($query);
	if ($slider) {
		while ($result = $slider->fetch_assoc()) {
 ?>
 <?php 
 	if ($result['status'] == 'active') { 
 		$query2 = "select * from tbl_slider where status='active' order by id desc limit 1";
 		$active_slider = $db->select($query2);
 		if ($active_slider) {
 			while ($ressult = $active_slider->fetch_assoc()) {

?>
 						<div class="item active">
							<img src="adm/<?php echo $ressult['slider_image']; ?>" alt="" />
						</div>
 <?php	} } }else{ ?>
 						

						<div class="item">
							<img src="adm/<?php echo $result['slider_image']; ?>" alt="" />
						</div>
<?php } } } ?>
						
					</div>
				 
				<a class="left fawesome-control" href="#fawesome-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="right fawesome-control" href="#fawesome-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>		
	</div>	
	<!--slider-End-->