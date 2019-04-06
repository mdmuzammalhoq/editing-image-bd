<?php include 'inc/adm-header.php'; ?>

<div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h2 class="h5 display">Instructions</h2>
      </div>
      <div class="card-body">
          <div class="form-group row">
<?php 
    $in_id = $_GET['ins_id'];
  $query = "SELECT * FROM free_trial WHERE id='$in_id'";
  $trial = $db->select($query);
  if ($trial) {
    while ($result = $trial->fetch_assoc()) {
?> 
            <div class="col-sm-12">
              <textarea name="content" id="" cols="30" rows="10" class="form-control"><?php echo $result['instructions']; ?></textarea>
            </div>
<?php } } ?>
          </div>
          <div class="line"></div>
          <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <a href="all-orders.php" class="btn btn-primary btn-block">Go back</a>
                      </div>
                    </div> 
      </div>
    </div>
  </div>
<?php include 'inc/adm-footer.php'; ?>