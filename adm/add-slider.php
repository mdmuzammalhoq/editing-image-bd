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
		$sliderTitle = mysqli_real_escape_string($db->link, $_POST['slider_title']);
		$sliderStatus = mysqli_real_escape_string($db->link, $_POST['status']);


		$permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['slider_image']['name'];
            $file_size = $_FILES['slider_image']['size'];
            $file_temp = $_FILES['slider_image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "images/".$unique_image;

        if ($sliderTitle == "") {
        	$n = "<span class='add_message'>Please fill title field </span>";
        }elseif ($file_size >1048567) {
             $n = "<span class='add_message'>Image Size should be less then 1MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='add_message'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
        				move_uploaded_file($file_temp, $uploaded_image);

        	$query = "INSERT INTO tbl_slider(slider_title, slider_image, status) VALUES('$sliderTitle', '$uploaded_image', '$sliderStatus')";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='add_message'>Slider Added Successfully. </span>";
                }else {
                 $n = "<span class='add_message'>Data Not Added !</span>";
                }
        }
	}
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Add New Slider</h2>
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
                      <label class="col-sm-2 form-control-label">Slider Title</label>
                      <div class="col-sm-10">
                        <input type="text" name="slider_title" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slider Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="slider_image" class="form-control"><span class="help-block-none"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slider Status</label>
                      <div class="col-sm-10">
                       <select name="status" class="form-control">
                       		<option value="">Select Status</option>
                       		<option value="active">Active</option>
                       </select>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" type="submit" name="submit" value="Add Slider" class="btn btn-primary btn-block">
                      </div>
                    </div>                    
                  </form>

                </div>
              </div>
            </div>
<?php include 'inc/adm-footer.php'; ?>