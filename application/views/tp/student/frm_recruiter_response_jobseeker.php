<?php include("header.php"); ?>

<div id="section">
<div id="innersection">
<table style="margin-left:auto; margin-right:auto; font-size:14px; text-align:center;">
    <tr style="background-color:#ccc;">
      <td style="width:170px;"><strong>Student Name</strong></td>
      <td style="width:170px;"><strong>Recruiter Name</strong></td>
      <td style="width:170px;"><strong>Job Type</strong></td>
      <td style="width:170px;"><strong>Response Date</strong></td>
      <td style="width:170px;"><strong>Manage</strong></td>
    </tr>
    <?php
    if (count($rows)):
    foreach($rows as $row): ?>
    <tr>
      <td><?php echo $row->JobSeekerName; ?></td>
      <td><?php echo $row->RecruiterName?></td>
      <td><?php echo $row->JobID; ?></td>
      <td><?php echo $row->DateOfResponse; ?></td>
      <td class="labels"><a href="delete-offered-job.php?ID=<?php echo $row->rid; ?>"><input type="button" class="btn1" value="Delete"/></a></td>
    </tr>
    <?php endforeach; ?>
     <?php else:?>
     <tr>
    <td colspan="5" style="text-align:center">No records Found</td>
    </tr>
 <?php endif;?>
</table>
</div>
</div>

<?php include("footer.php"); ?>