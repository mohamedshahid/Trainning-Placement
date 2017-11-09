<?php include("/var/www/html/trainplace/application/views/tp/admin/header.php");?>

<div id="section">
<div id="innersection">
<h3 align="center">All Registered Students</h3>
<table style="margin-left:auto; margin-right:auto; text-align:center">
    <tr style="background-color:#ccc; text-align:center;">
      <td style="width:170px;"><strong>Student Name</strong></td>
      <td style="width:170px;"><strong>Enrollment No</strong></td>
      <td style="width:170px;"><strong>Branch</strong></td>
      <td style="width:170px;"><strong>Manage</strong></td>
    </tr>
<?php foreach($register_student as $row): ?>
    <tr>
      <td><?= $row->JobSeekerID ?></td>
      <td><?= $row->EnrollmentNo ?></td>
      <td><?= $row->Branch ?></td>
    </tr>
<?php endforeach;?>
</table>
</div>
</div>

<?php include("/var/www/html/trainplace/application/views/tp/admin/footer.php");?>