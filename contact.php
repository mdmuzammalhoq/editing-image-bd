<?php include 'inc/header.php'; ?> 
<style>
  .add_message{
    color: #2B954B;border: 1px solid #f7f7f7;width: 429px;height: 36px;padding: 7px;padding-left: 138px;background: #f6f7ff;
    font-family: 'Raleway', sans-serif;
  }

</style>
	<div class="section-heading contact-head">
		<h1 style="color: #fff;">Contact Us</h1>
	</div>
<?php 
		$n = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	 	$email = mysqli_real_escape_string($db->link, $_POST['email']);
	 	$phone = mysqli_real_escape_string($db->link, $_POST['phone']);
	 	$website = mysqli_real_escape_string($db->link, $_POST['website']);
	 	$subject = mysqli_real_escape_string($db->link, $_POST['subject']);
	 	$message = mysqli_real_escape_string($db->link, $_POST['message']);

	 	if ($name == "") {
	 		$n = "<span class='add_message'>Name field empty ! </span>";
	 	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	 		$n = "<span class='add_message'>Email not valid ! </span>";
	 	}elseif($phone == ""){
	 		$n = "<span class='add_message'>Phone field empty ! </span>";
	 	}elseif($subject == ""){
	 		$n = "<span class='add_message'>Subject field empty ! </span>";
	 	}elseif($message == ""){
	 		$n = "<span class='add_message'>Message field empty ! </span>";
	 	}else{
	 		$query = "INSERT INTO  tbl_contact(name, email, phone, website, subject, message) VALUES('$name', '$email', '$phone', '$website', '$subject', '$message')";
	 		$contact = $db->insert($query);
	 		if ($contact) {
	 			$n = "<span class='add_message'>Your message sent Successfully. </span>";
	 		}else{
	 			$n = "<span class='add_message'>Message not sent !</span>";
	 		}
	 	}
	 } 
?>
	<div class="contact-area">
		<div class="contact-content container">
			<div class="row">
				<div class="col-md-6">
					<div class="messege-title">
						<h1>Give Us Messege</h1>
						<p><?php echo $n; ?></p>
					</div>

					<form action="" method="POST">
						<div class="form-group">
							<div class="col-sm-8">
							  <input type="text" name="name" class="form-control" id="" placeholder="Name">
							</div>					 
						</div>
						<div class="form-group">
							<div class="col-sm-8">
							  <input type="text" name="email" class="form-control" id="" placeholder="E-Mail">
							</div>					 
						</div>
						<div class="form-group">
							<div class="col-sm-8">
							  <input type="text" name="phone" class="form-control" id="" placeholder="Phone Number">
							</div>					 
						</div>
						<div class="form-group">
							<div class="col-sm-8">
							  <input type="text" name="website" class="form-control" id="" placeholder="Website">
							</div>					 
						</div>
						<div class="form-group">
							<div class="col-sm-8">
							  <input type="text" name="subject" class="form-control" id="" placeholder="Subject">
							</div>					 
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
							 <textarea name="message" class="form-control" rows="4" placeholder="Your Messege"></textarea>
							</div>					 
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Send Messege</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<h1>&ensp;</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ratione placeat maiores illo rerum accusantium officia assumenda facilis, suscipit eos. Consectetur a similique laboriosam reiciendis nulla rerum provident, voluptatibus at!</p>
				</div>
				</div>
				<div class="col-md-6 pull-right">
					<div class="messege-title">
						<h1>Find Us In Map</h1>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2170.6380353194577!2d90.35265588666455!3d23.798553740654853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbn!2sbd!4v1511591830435" width="500" height="300" frameborder="0" style="border:0;border-radius:10px" allowfullscreen></iframe>
					</div>
				</div>
			
		</div>
	</div>

<?php include 'inc/footer.php'; ?>