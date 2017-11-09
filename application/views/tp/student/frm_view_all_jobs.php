<?php include("header.php"); ?>

<div id="section">
<div id="innersection">
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
    <?php
    $con = mysqli_connect("localhost", "root", "root", "placement")
    or die("Failed to connect MySQL: " . mysqli_error()); // Connecting to MySQL Database

    $color1 = "#ebebeb";
    $color2 = "#ffffff";
    $rowCount = 0;
    $username = $_SESSION['username'];
    $sql = mysqli_query($con, "SELECT * FROM tbl_jobopeningdetail ORDER BY JobID ASC");
    while ($row = mysqli_fetch_array($sql))
    {
        $rowColor = ($rowCount % 2) ? $color1 : $color2;
    ?>
    <tr style="background-color:<?php echo $rowColor ?>;">
      <td><?php echo $row['JobID']; ?></td>
      <td><?php $query = "SELECT * FROM tbl_recruiterorganisationdetails";
              $result = mysqli_query($con, $query) or die(mysqli_error());

              while ($row1=mysqli_fetch_array($result))
              {
                  echo $row1['OrganizationName'];
              }?></td>
      <td><?php echo $row['MinimumQualification']; ?></td>
      <td><?php echo $row['JobLocation']; ?></td>
      <td><?php echo $row['JobOpeningDate']; ?></td>
      <td><?php echo $row['JobClosingDate']; ?></td>
      <td class="labels"><a href="job-details.php?ID=<?php echo $row['Sno']; ?>">Details</a></td>
    </tr>
    <?php
    $rowCount ++;
    }
    mysqli_close($con);
     ?>
     <tr>
    <td colspan="5" style="text-align:center"></td>
    </tr>
</table>
</div>
</div>

<?php include("footer.php"); ?>