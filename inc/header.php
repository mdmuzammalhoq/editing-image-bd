<?php
	include 'lib/config.php';
	include 'lib/database.php';
	include 'lib/format.php';

	$db = new Database();
	$fm = new Format();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editing Image Bd</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/pogo-slider.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
  </head>
  <body>
  
  <div class="header-area">
		<div class="container" style="padding: 0px;">
			<div class="col-md-2 logo">
				<img src="img/logo.png" alt="" />
			</div>
			<div class=" mainmenu col-md-offset-1 col-md-9 ">
				<ul>
					<li><a href="index.php">Home</a></li>					
					<li><a href="#">Services</a>
						<ul>
							<li><a href="sub_clip_path.php">Clipping Path</a></li>
							<li><a href="sub_image_mask.php">Background Removal </a></li>
							<li><a href="sub_photo_ret.php">Image Masking</a></li>
							<li><a href="sub_drop.php">Shadow Making</a></li>
							<li><a href="sub_ras_to_vect.php">E-commerce Photo editing</a></li>
							<li><a href="sub_miror.php">Product Photo retouching</a></li>
							<li><a href="sub_color_correct.php">Model Retouching </a></li>	
							<li><a href="hair-masking.php">Hair Masking</a></li>
							<li><a href="jewellery.php">jewelry retouching</a></li>	
							<li><a href="brightness.php">Colour & Brightness correction</a></li>							
						</ul>
					</li>					
					<li><a href="samples.php">Samples</a></li>					
					<li><a href="pricing.php">Pricing</a></li>								
					<li><a href="blog.php">Blog</a></li>					
					<li><a href="otherservices.php">Other Services</a></li>					
					<li><a href="contact.php">Contact</a></li>								
					<li class="active"><a href="free-trial.php">Free Trial</a></li>	
				</ul>
			</div>
		</div>
	</div>
	<div class="height-70">
  
  </div>