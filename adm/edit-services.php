<?php include 'inc/adm-header.php'; ?>
<style>
  .add_message{
    color: #2B954B;border: 1px solid #f7f7f7;width: 429px;height: 36px;padding: 7px;padding-left: 138px;background: #f6f7ff;
    font-family: 'Raleway', sans-serif;
  }

</style>
<?php 
      $id = $_GET['service_edit'];
    $n = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $serviceTitle = mysqli_real_escape_string($db->link, $_POST['title']);
        $serviceContent = mysqli_real_escape_string($db->link, $_POST['content']);



        if ($serviceTitle == "") {
          $n = "<span class='add_message'>Title field empty ! </span>";
        }elseif($serviceContent == ""){
          $n = "<span class='add_message'>Content field empty ! </span>";
        }else{

          $query = "UPDATE  tbl_services SET 

                title = '$serviceTitle', 
                content = '$serviceContent'
                WHERE 
                id='$id'
                ";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='add_message'>Services updated Successfully. </span>";
                }else {
                 $n = "<span class='add_message'>Services Not updated !</span>";
                }
        }
  }
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Update Service</h2>
                </div>
                <div class="card-body">
<?php 
  $querry = "SELECT * FROM tbl_services WHERE id='$id'";
  $edit_slider = $db->select($querry);
  if ($edit_slider) {
    $result = $edit_slider->fetch_assoc();

?>
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
                        <input type="text" name="title" class="form-control" value="<?php echo $result['title']; ?>">
                      </div>
                    </div>
                    
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Service Body</label>
                      <div class="col-sm-10">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"><?php echo $result['content']; ?></textarea>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" type="submit" name="submit" value="Update Service" class="btn btn-primary btn-block">
                      </div>
                    </div>                    
                  </form>
<?php } ?>
                </div>
              </div>
            </div>
<?php include 'inc/adm-footer.php'; ?>