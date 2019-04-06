<?php
  include '../lib/config.php';
  include '../lib/database.php';
  include '../lib/format.php';

  $db = new Database();
  $fm = new Format();
?>
<?php 
  $id = $_POST['id'];

    $delquery = "DELETE FROM tbl_services WHERE id='$id'";
    $delSlider = $db->delete($delquery);
    if ($delSlider ) { ?>

 <table class="table table-hover" id="del_section">
  <thead>
    <tr>
      <th width="5%">#</th>
      <th width="15%">Service Title</th>
      <th width="30%">Service Content</th>
      <th width="30%">Service Image</th>
      <th width="10%">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $query = "SELECT * FROM tbl_services ORDER BY id DESC";
    $slider_list = $db->select($query);
    if ($slider_list) {
       while ($result = $slider_list->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['title']; ?></td>
      <td><?php echo $fm->textShorten($result['content'], 100); ?></td>
      <td><img style="width: 50px; height: 50px;" src="<?php echo $result['image']; ?>" alt=""></td>
      <td>
        <a href="edit-services.php?service_edit=<?php echo $result['id']; ?>" style="font-size: 23px;color: #55b365;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a id="<?php echo $result['id']; ?>" onclick="ServiceDelete(del_id = '<?php echo $result['id']; ?>')" style="font-size: 23px;color: #f00; cursor: pointer;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
      </td>
    </tr>
<?php } } ?>

  </tbody>
</table>

<?php } ?>

<script>
    function ServiceDelete(del_id){
        var id = del_id;
        var data_Link = 'delete_service.php';
        var data_string = 'id='+id;

        $.ajax({
            type : 'POST',
            url : data_Link,
            data : data_string,
            success:function(data){
                 $("#del_section").html(data);
                 //alert(data);
            }
        });

    }
</script> 