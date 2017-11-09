<?php include("/var/www/html/trainplace/application/views/tp/admin/header.php");?>

<div id="section">
<div id="innersection">
<h3 align="center">All Applied Jobs</h3>
<table style="margin-left:auto; margin-right:auto; font-size:14px; text-align:center;">
    <tr style="background-color:#ccc;">
      <td style="width:170px;"><strong>Student Name</strong></td>
      <td style="width:170px;"><strong>Recruiter Name</strong></td>
      <td style="width:170px;"><strong>Job Type</strong></td>
      <td style="width:170px;"><strong>Response Date</strong></td>
    </tr>
    <?php foreach ($applied_student as $row):?>
    <tr>
      <td><?php echo $row->JobSeekerID ?></td>
      <td><?php echo $row->RecruiterName ?></td>
      <td><?php echo $row->JobID ?></td>
      <td><?php echo $row->DateOfResponse ?></td>
    </tr>
  <?php endforeach; ?>
</table>
</div>
</div>

<?php include("/var/www/html/trainplace/application/views/tp/admin/footer.php");?>