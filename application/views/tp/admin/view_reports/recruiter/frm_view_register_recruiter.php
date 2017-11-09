<?php include("/var/www/html/trainplace/application/views/tp/admin/header.php");?>

<div id="section">
<div id="innersection">
<h3 align="center">All Registered Students</h3>
<table style="margin-left:auto; margin-right:auto; text-align:center">
    <tr style="background-color:#ccc; text-align:center;">
      <td style="width:170px;"><strong>Username</strong></td>
      <td style="width:170px;"><strong>Company Name</strong></td>
      <td style="width:170px;"><strong>Email ID</strong></td>
      <td style="width:170px;"><strong>Website</strong></td>
      <td style="width:170px;"><strong>Manage</strong></td>
    </tr>
    <?php foreach ($register_recruiter as $row):?>
    <tr>
      <td><?php echo $row->username ?></td>
      <td><?php echo $row->OrganizationName ?></td>
      <td><?php echo $row->EmailID1 ?></td>
      <td><?php echo $row->Website ?></td>
    <?php endforeach; ?>
</table>
</div>
</div>

<?php include("/var/www/html/trainplace/application/views/tp/admin/footer.php");?>