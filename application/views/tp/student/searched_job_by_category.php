<?php include("header.php");?>

<div id="section">
<div id="innersection">
<?php if ($rows->num_rows() > 0): ?>
    <table style="margin-left:auto; margin-right:auto; font-size:15px; text-align:center;">
      <tr style="background-color:#ccc;">
      <td style="width:125px;"><strong>Job Type</strong></td>
      <td style="width:125px;"><strong>Company Name</strong></td>
      <td style="width:125px;"><strong>Eligibility</strong></td>
      <td style="width:125px;"><strong>Job Location</strong></td>
      <td style="width:125px;"><strong>Opening Date</strong></td>
      <td style="width:125px;"><strong>Closing Date</strong></td>
      <td style="width:125px;"><strong>Manage</strong></td>
    </tr>
    <?php foreach($rows->result() as $row): ?>
    <tr>
      <td><?= $row->JobID ?></td>
      <td><!-- <?= $row->OrganizationName ?> -->Microsoft</td>
      <td><?= $row->MinimumQualification ?></td>
      <td><?= $row->JobLocation ?></td>
      <td><?= $row->JobOpeningDate ?></td>
      <td><?= $row->JobClosingDate ?></td>
      <td class='labels'><a href='job-details.php?ID=".$row['Sno']."'>Details</a></td>
    </tr>
    </table>
    <?php endforeach?>
    <?php else:?>
    <table width='100%' border='0' cellpadding='5' cellspacing='5'>
    <tr>
      <td colspan='5'><span style='color:#696969; font-size:14px; font-style:italic;'>Searched Rsults</span>
      </td>
    </tr>
    <tr>
    <tr>
        <td>
        <span style='color:#000;'>No results were found to match your search item - <b><?= $search?></b></span><br /><br />
        </td>
    </tr>
  </table>
<?php endif;?>
</div>
</div>

 <?php include("footer.php");?>