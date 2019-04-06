<?php include 'inc/header.php'; ?> 

<?php
        $n = ""; 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        $company_name = mysqli_real_escape_string($db->link, $_POST['cname']);
        $email = mysqli_real_escape_string($db->link, $_POST['email']);
        $phone = mysqli_real_escape_string($db->link, $_POST['phone']);
        $country = mysqli_real_escape_string($db->link, $_POST['country']);
        $job_type = mysqli_real_escape_string($db->link, $_POST['job_type']);
        $tournaround = mysqli_real_escape_string($db->link, $_POST['turn_around']);
        $return_file = mysqli_real_escape_string($db->link, $_POST['return']);
        
        $instructions = mysqli_real_escape_string($db->link, $_POST['instruction']);
        
        $permited  = array('jpg', 'jpeg', 'png', 'gif', 'txt', 'docx', 'zip', 'rar', 'PSD', 'psd');
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_temp = $_FILES['file']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;

        if ($name == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>Name field empty</span>";
        }elseif ($company_name == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>Company name empty</span>";
        }elseif ($email == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>Email field empty</span>";
        }elseif ($phone == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>phone field empty</span>";
        }elseif ($country == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>country field empty</span>";
        }elseif ($job_type == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>job type field empty</span>";
        }elseif ($tournaround == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>tournaround field empty</span>";
        }elseif ($return_file == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>return file field empty</span>";
        }elseif ($instructions == "") {
            $n = "<span style='color: #f00;font-size: 15px;'>instructions field empty</span>";
        }elseif ($file_size >314570100) {
             $n = "<span class='add_message'>Image Size should be less then 300MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='add_message'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
                move_uploaded_file($file_temp, $uploaded_image);

          $query = "INSERT INTO free_trial(name, company_name, email, phone, country, job_type, tournaround, return_file, instructions, file) VALUES('$name', '$company_name', '$email', '$phone', '$country', '$job_type', '$tournaround','$return_file', '$instructions','$uploaded_image')";
                $insertAll = $db->insert($query);
                if ($insertAll) {
                 $n = "<span style='color: #049a78;font-size: 15px;'>Data Added Successfully. </span>";
                }else {
                 $n = "<span style='color: #f00;font-size: 15px;'>Data Not Added !</span>";
                }
        }
    }
?>

	<div class="trial-head container section-heading">
		<h1><i class="fa fa-bullseye"></i>Free Trial</h1>
		<p class="container">This is free trial . this is free trial This is free trial . this is free trial This is free trial . this is free trial This is free trial . this is free trial This is free trial . this is free trial This is free trial . this is free trial </p>
	</div>
	<div class="trail-form-area">
		<div class="trial-form-heading container text-center">
			<h1>Trial Form</h1>
		</div>
        <div style="text-align: center;"><?php echo $n; ?></div>
		<div class="trail-form-content container">
			<div class="ch-trial-form  pbzero-free">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="trail"/>
                    <input type="hidden" name="cnt" value="Bangladesh">
                    <input type="hidden" name="ipaddr" value="103.78.188.47">
                    <table>
                        <tr>
                            <td><p>NAME <b class="reqstar">*</b><span>:</span></p></td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                            </td>
                            <td><p>COMPANY NAME <b class="reqstar">*</b><span>:</span></p></td>
                            <td><div class="form-group">
                                    <input type="text" name="cname" class="form-control" placeholder="">
                                </div></td>
                            <td class="clearfix"></td>
                        </tr><!--stap-->                          
                                                
                        <tr>
                            <td><p>Email <b class="reqstar">*</b><span>:</span></p></td>
                            <td>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="">
                                </div>
                            </td>
                            <td><p>PHONE/MOBILE <b class="reqstar">*</b><span>:</span></p></td>
                            <td><div class="form-group">
                                    <input type="text" name="phone"  class="form-control" placeholder="">
                                </div></td>
                            <td class="clearfix"></td>
                        </tr><!--stap-->
                        <tr>
                            <td><p>COUNTRY <b class="reqstar">*</b><span>:</span></p></td>
                            <td>
                                <input type="text" name="country" class="form-control" placeholder="country" style="border: 1px solid #d6d6d6;">
                            </td>
                            <td><p>JOB TYPE <b class="reqstar">*</b><span>:</span></p></td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control  ch-trial-service selu" name="job_type" >
                                        <option selected value="">Select Service</option>
                                        <option value="Clipping Path">Clipping Path</option>
                                        <option value="Multi-Clipping Path">Multi-Clipping Path</option>                                            
									</select>
                                </div></td>
                            <td class="clearfix"></td>
                        </tr><!--stap-->
                        <tr>
                            <td><p>TURNAROUND <b class="reqstar">*</b><span>:</span></p></td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control selfore ch-trial-service selu" name="turn_around">
                                        <option selected value="">Select Turnaround</option>
                                        <option value="1Hours - 3Hours">1Hours - 3Hours</option>
                                        <option value="3Hours - 6Hours">3Hours - 6Hours</option>
                                        <option value="6Hours - 12Hours">6Hours - 12Hours</option>
                                        <option value="12Hours - 24Hour">12Hours - 24Hour</option>
                                    </select>
                                </div>
                            </td>
                            <td><p>RETURN FILE AS <b class="reqstar">*</b> <span>:</span></p></td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control  ch-trial-service" name="return" >
                                        <option selected value="0">Select File Type</option>
                                        <option value="jpg">JPG</option>
                                        <option value="png">PNG</option>
                                        <option value="gif">GIF</option>
                                        <option value="psd">PSD</option>
                                    </select>
                                </div>
                            </td>
                            <td class="clearfix"></td>
                        </tr><!--stap-->
                        
                    </table>
                    <table class="second-free">                        
                        <tr>
                            <td><p>JOB INSTRUCTION <b class="reqstar">*</b><span>:</span></p></td>
                            <td colspan="3">
                                <div class="form-group">
                                    <textarea name="instruction" id=""  rows="5" ></textarea>
                                </div>
                            </td>
                            <td class="clearfix"></td>
                        </tr>                          
                        <tr>
                            <td><p>FILES <b class="reqstar">*</b><span>:</span></p></td>
                            <td colspan="3">                                  
                                <div class="dropfile">
                                    <div class="form-group">
                                        <div class="file-upload-ch">
                                            <label for="file-upload"><img src="img/upload.png" alt="">CHOOSE FILE</label>
                                            <p class="trail_direc">(Max 2 files and upto 300 mb each)</p>
                                            <input id="file-upload" name="file" type="file" multiple="" >
                                            <div class="clearfix"></div>
                                        </div>
                                    </div> 
                                </div>                                  
                                <div class="clearfix"></div>
                                 <!--<p>Imagemasking.png</p>-->
                                <progress class="trial_progress" style="display: none;" value="0" max="100"></progress>
                            </td>
                            <td class="clearfix"></td>
                        </tr>                       
                    </table>
                    <div class="alert alert-success" style="display: none;"></div>                       
                    
                    <div class="alert alert-danger" style="display: none;"></div>                        
                    
                    <!--data-toggle="modal" data-target="#myModal"-->
                    <input class="free-trial-ch" type="submit" value="SUBMIT" onclick="submitFreeTrial(this)" >                       
                </form> 
            </div>	
		</div>
	</div>
	


<?php include 'inc/footer.php'; ?>