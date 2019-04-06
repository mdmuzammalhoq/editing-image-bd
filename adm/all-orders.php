<?php include 'inc/adm-header.php'; ?>

	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Company Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Country</th>
      <th scope="col">Job Type</th>
      <th scope="col">Instruction</th>
      <th scope="col">Tourn Around</th>
      <th scope="col">return files</th>
      <th scope="col">Attached Files</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $query = "SELECT * FROM free_trial ORDER BY id DESC";
    $free_trial = $db->select($query);
    if ($free_trial) {
      while ($result = $free_trial->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['company_name']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['phone']; ?></td>
      <td><?php echo $result['country']; ?></td>
      <td><?php echo $result['job_type']; ?></td>
      <td><a href="instruction.php?ins_id=<?php echo $result['id']; ?>"><?php echo $fm->textShorten($result['instructions'], 20); ?></a></td>
      <td><?php echo $result['tournaround']; ?></td>
      <td><?php echo $result['return_file']; ?></td>
      <td><a href="../<?php echo $result['file']; ?>" download=""><img style="width: 50px;height: 50px;" src="../<?php echo $result['file']; ?>" alt="../<?php echo $result['file']; ?>"></a></td>
    </tr>
<?php } } ?>
  </tbody>
</table>
<?php include 'inc/adm-footer.php'; ?>