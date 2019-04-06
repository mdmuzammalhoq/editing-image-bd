<?php include 'inc/adm-header.php'; ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover" id="del_slider">
  <thead>
    <tr>
      <th>#</th>
      <th>Service Image Name</th>
      <th>Service Image</th>
      <th>Service Image Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $query = "SELECT * FROM service_images ORDER BY id DESC";
    $slider_list = $db->select($query);
    if ($slider_list) {
       while ($result = $slider_list->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['name']; ?></td>
      <td><img style="width: 50px; height: 50px;" src="<?php echo $result['image']; ?>" alt=""></td>
      <td><?php echo $result['status']; ?></td>
      <td>
        <a id="<?php echo $result['id']; ?>" onclick="sliderDelete(del_id = '<?php echo $result['id']; ?>')" style="font-size: 23px;color: #f00; cursor: pointer;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
      </td>
    </tr>
<?php } } ?>

  </tbody>
</table>
            <hr>
        </div>
    </div>
<script>
    function sliderDelete(del_id){
        var id = del_id;
        var data_Link = 'delete_service_image.php';
        var data_string = 'id='+id;

        $.ajax({
            type : 'POST',
            url : data_Link,
            data : data_string,
            success:function(data){
                 $("#del_slider").html(data);
                 //alert(data);
            }
        });

    }
</script>    
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<?php include 'inc/adm-footer.php'; ?>