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
    		$serviceTitle = mysqli_real_escape_string($db->link, $_POST['title']);
    		$serviceContent = mysqli_real_escape_string($db->link, $_POST['content']);

          $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "images/".$unique_image;

        if ($serviceTitle == "") {
        	$n = "<span class='add_message'>Title field empty ! </span>";
        }elseif($serviceContent == ""){
          $n = "<span class='add_message'>Content field empty ! </span>";
        }elseif ($file_size >1048567) {
             $n = "<span class='add_message'>Image Size should be less then 1MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='add_message'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
        				move_uploaded_file($file_temp, $uploaded_image);

        	$query = "INSERT INTO tbl_services(title, content, image) VALUES('$serviceTitle', '$serviceContent', '$uploaded_image')";
                $insert_service = $db->insert($query);
                if ($insert_service) {
                 $n = "<span class='add_message'>Services Added Successfully. </span>";
                }else {
                 $n = "<span class='add_message'>Services Not Added .!</span>";
                }
        }
	}
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Add Services</h2>
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
                      <label class="col-sm-2 form-control-label">Section Two Title</label>
                      <div class="col-sm-10">
                        <input type="text" name="title" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slider Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="image" class="form-control"><span class="help-block-none"></span>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Section Two Body</label>
                      <div class="col-sm-10">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
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