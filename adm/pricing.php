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
    		$name = mysqli_real_escape_string($db->link, $_POST['name']);
    		$amount = mysqli_real_escape_string($db->link, $_POST['amount']);
    		$cat = mysqli_real_escape_string($db->link, $_POST['cat']);

          

        if ($name == "") {
        	$n = "<span class='add_message'>Name field empty ! </span>";
        }elseif($amount == ""){
          $n = "<span class='add_message'>Amount field empty ! </span>";
        }elseif($cat == ""){
          $n = "<span class='add_message'>Category field empty ! </span>";
        }else{
        			
        	$query = "INSERT INTO tbl_pricing(name, amount, cat) VALUES('$name', '$amount', '$cat')";
                $insert_price = $db->insert($query);
                if ($insert_price) {
                 $n = "<span class='add_message'>Price Added Successfully. </span>";
                }else {
                 $n = "<span class='add_message'>Price Not Added .!</span>";
                }
        }
	}
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Add Price</h2>
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
                      <label class="col-sm-2 form-control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Amount</label>
                      <div class="col-sm-10">
                        <input type="text" name="amount" class="form-control"><span class="help-block-none"></span>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Category</label>
                      <div class="col-sm-10">
                        <select name="cat" class="form-control">
                        	<option value="">Select Category</option>
                        	<option value="Cliping Path">Cliping Path</option>
                        	<option value="Image Masking">Image Masking</option>
                        	<option value="Image Masking">Image Masking</option>
                        </select>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" type="submit" name="submit" value="Add Price" class="btn btn-primary btn-block">
                      </div>
                    </div>                    
                  </form>

                </div>
              </div>
            </div>
<?php include 'inc/adm-footer.php'; ?>