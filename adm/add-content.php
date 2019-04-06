<?php include 'inc/adm-header.php'; ?>
<style>
	.add_message{
		color: #2B954B;border: 1px solid #f7f7f7;width: 429px;height: 36px;padding: 7px;padding-left: 138px;background: #f6f7ff;
		font-family: 'Raleway', sans-serif;
	}

</style>
<?php 
		$n = '';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $ContentTitle = mysqli_real_escape_string($db->link, $_POST['title']);
        $contentContent = mysqli_real_escape_string($db->link, $_POST['content']);
    		$status = mysqli_real_escape_string($db->link, $_POST['status']);

      if($contentContent == ""){
          $n = "<span class='add_message'>Content field empty ! </span>";
        }elseif($status == ""){
          $n = "<span class='add_message'>Status field empty ! </span>";
        }else{
        			
        	$query = "INSERT INTO start_content(title, content, status) VALUES('$ContentTitle', '$contentContent', '$status')";
                $insert_service = $db->insert($query);
                if ($insert_service) {
                 $n = "<span class='add_message'>Content Added Successfully. </span>";
                }else {
                 $n = "<span class='add_message'>Content Not Added .!</span>";
                }
        }
	}
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Add Content</h2>
                </div>
                <div class="card-body">

                  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  	<div class="form-group row">
                      <label class="col-sm-4 form-control-label"></label>
                      <div class="col-sm-8">
                        <?php echo $n; ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Content Title</label>
                      <div class="col-sm-10">
                       <input type="text" name="title" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Content Body</label>
                      <div class="col-sm-10">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="line"></div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slider Status</label>
                      <div class="col-sm-10">
                       <select name="status" class="form-control">
                          <option value="">Select Status</option>
                          <option value="Our Offers">Our Offers</option>
                          <option value="Our Special Service">Our Special Service</option>
                          <option value="Why Choose Us">Why Choose Us</option>
                          <option value="Top-Right">Top-Right</option>
                          <option value="Content Bottom">Content Bottom</option>
                       </select>
                      </div>
                    </div>

                    <div class="line"></div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" type="submit" name="submit" value="Add Services" class="btn btn-primary btn-block">
                      </div>
                    </div>                    
                  </form>

                </div>
              </div>
            </div>
<?php include 'inc/adm-footer.php'; ?>