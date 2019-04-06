<?php
  include '../lib/config.php';
  include '../lib/database.php';
  include '../lib/format.php';

  $db = new Database();
  $fm = new Format();
?>
<?php 
  $id = $_POST['id'];

    $delquery = "DELETE FROM tbl_slider WHERE id='$id'";
    $delSlider = $db->delete($delquery);
    if ($delSlider ) { ?>

 <table class="table table-hover" id="del_slider">
  <thead>
    <tr>
      <th>#</th>
      <th>Slider Title</th>
      <th>Slider Image</th>
      <th>Slider Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $query = "SELECT * FROM tbl_slider ORDER BY id DESC";
    $slider_list = $db->select($query);
    if ($slider_list) {
       while ($result = $slider_list->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['slider_title']; ?></td>
      <td><img style="width: 50px; height: 50px;" src="<?php echo $result['slider_image']; ?>" alt=""></td>
      <td><?php echo $result['status']; ?></td>
      <td>
        <a href="edit-slider.php?slider_edit=<?php echo $result['id']; ?>" style="font-size: 23px;color: #55b365;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a  onclick="sliderDelete('<?php echo $result['id']; ?>')" style="font-size: 23px;color: #f00; cursor: pointer;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
      </td>
    </tr>
<?php } } ?>

  </tbody>
</table>

<?php } ?>

<script>
    function pdelete(delProducts){
        var id = delProducts;
        var data_Link = 'del_products.php';
        var data_string = 'id='+id;

        $.ajax({
            type : 'POST',
            url : data_Link,
            data : data_string,
            success:function(data){
                 $("#delete_ajax").html(data);
                 //alert(data);
            }
        });

    }
</script>