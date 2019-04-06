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
    $Title = mysqli_real_escape_string($db->link, $_POST['title']);
    $content = mysqli_real_escape_string($db->link, $_POST['content']);
    $position = mysqli_real_escape_string($db->link, $_POST['position']);
    $Status = mysqli_real_escape_string($db->link, $_POST['status']);


        $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "images/".$unique_image;

        if ($Title == "") {
          $n = "<span class='add_message'>Please fill title field </span>";
        }elseif($content == ""){
          $n = "<span class='add_message'>Please fill content field </span>";
        }elseif($Status == ""){
          $n = "<span class='add_message'>Please fill category field </span>";
        }elseif ($file_size >1048567) {
             $n = "<span class='add_message'>Image Size should be less then 1MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='add_message'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
                move_uploaded_file($file_temp, $uploaded_image);

          $query = "INSERT INTO tbl_all_pages(title, content, position, image, category) VALUES('$Title', '$content', '$position', '$uploaded_image', '$Status')";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='add_message'>Data Added Successfully. </span>";
                }else {
                 $n = "<span class='add_message'>Data Not Added !</span>";
                }
        }
  }
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Add New Page</h2>
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
                      <label class="col-sm-2 form-control-label"> Title</label>
                      <div class="col-sm-10">
                        <input type="text" name="title" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"> Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="image" class="form-control"><span class="help-block-none"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Body</label>
                      <div class="col-sm-10">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"> Position</label>
                      <div class="col-sm-10">
                       <select name="position" class="form-control">
                          <option value="">Select Position</option>
                          <option value="pageheader">Page Header</option>
                       </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"> Page Category</label>
                      <div class="col-sm-10">
                       <select name="status" class="form-control">
                          <option value="">Select Category</option>
<?php 
    $qu = "SELECT * FROM tbl_category";
    $category = $db->select($qu);
    if ($category) {
        while ($result = $category->fetch_assoc()) {
?>
                          <option value="<?php echo $result['name']; ?>"><?php echo $result['name']; ?></option>
<?php } } ?>
                       </select>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" type="submit" name="submit" value="Add Page" class="btn btn-primary btn-block">
                      </div>
                    </div>                    
                  </form>

                </div>
              </div>
            </div>
<?php include 'inc/adm-footer.php'; ?>