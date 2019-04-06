<?php include 'inc/adm-header.php'; ?>
<style>
  th{
    text-align: center;
  }
  td{
    text-align: center;
  }
</style>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover" id="del_section">
  <thead>
    <tr>
      <th width="5%">#</th>
      <th width="15%">Title</th>
      <th width="30%">Content</th>
      <th width="10%">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $query = "SELECT * FROM start_content ORDER BY id DESC";
    $slider_list = $db->select($query);
    if ($slider_list) {
       while ($result = $slider_list->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['title']; ?></td>
      <td><?php echo $fm->textShorten($result['content'], 100); ?></td>
      <td>
        <a href="edit-content.php?content_edit=<?php echo $result['id']; ?>" style="font-size: 23px;color: #55b365;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a id="<?php echo $result['id']; ?>" onclick="contentDelete(del_id = '<?php echo $result['id']; ?>')" style="font-size: 23px;color: #f00; cursor: pointer;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
      </td>
    </tr>
<?php } } ?>

  </tbody>
</table>
            <hr>
        </div>
    </div>
<script>
    function contentDelete(del_id){
        var id = del_id;
        var data_Link = 'delete_content.php';
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
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<?php include 'inc/adm-footer.php'; ?>