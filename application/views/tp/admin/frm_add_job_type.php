<?php include("header.php");?>

<div id="section">
<div id="innersection">
<h2 style="text-align:center">Add Job Type</h2>
<form action="act_admin_add_job_type.php" method="post" name="AddJob">
<table border="0" align="center">
  <tbody>
    <tr>
      <td><label for="txtJobType" class="labels">Job Type:</label></td>
      <td>
        <input type="text" name="txtJobType" id="txtJobType" class="textfields"></td>
    </tr>
    <tr>
      <td><label for="txtDescription" class="labels">Description:</label></td>
      <td>
        <textarea name="txtDescription" id="txtDescription" class="textarea"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="submit" value="Add" class="btn">
        <input type="reset" name="reset" id="reset" value="Reset" class="btn"></td>
      </tr>
    <tr>
      <td colspan="2"><label class="labels"><a href="see_all_jobs.php">See All</a></label> (Click to view existed data.)</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><?php
          if(isset($_GET['msg']))
          {
              $message = $_GET['msg'];
              if($message == 1)
              echo "<span class='success'>Your entry has been added successfully!</span>";
              if($message == 2)
              echo "<span class='failed'>Invalid Username or Password!</span>";
              if($message == 5)
              echo "<span class='failed'>You are logged out successfully!</span>";
              if($message == 6)
              echo "<span class='failed'>Session timeout!</span>";
          }
      ?></td>
    </tr>
  </tbody>
</table>
</form>
</div>
</div>

<?php include('footer.php');?>