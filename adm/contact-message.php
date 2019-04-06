<?php include 'inc/adm-header.php'; ?>

	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Website</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
<?php 
    $query = "SELECT * FROM tbl_contact ORDER BY id DESC";
    $free_trial = $db->select($query);
    if ($free_trial) {
      while ($result = $free_trial->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['phone']; ?></td>
      <td><?php echo $result['website']; ?></td>
      <td><?php echo $result['subject']; ?></td>
      <td><a href="message-detail.php?msg_id=<?php echo $result['id']; ?>"><?php echo $fm->textShorten($result['message'], 20); ?></a></td>
    </tr>
<?php } } ?>
  </tbody>
</table>
<?php include 'inc/adm-footer.php'; ?>