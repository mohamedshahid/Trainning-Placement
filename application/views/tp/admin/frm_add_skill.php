<?php include('header.php');?>

<div id="section">
<div id="innersection">
<h2 style="text-align:center">Add Skills</h2>
<form action="act_admin_add_skills.php" method="post" name="AddSkills">
<table border="0" align="center">
  <tbody>
    <tr>
      <td><label for="txtSkillType"><strong>Skill Type:</strong></label></td>
      <td>
        <input type="text" name="txtSkillType" id="txtSkillType"></td>
    </tr>
    <tr>
      <td><label for="txtDescription"><strong>Description:</strong></label></td>
      <td>
        <textarea name="txtDescription" id="txtDescription"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="submit" value="Add">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
    <tr>
      <td colspan="2"><label class="labels"><a href="see_all_skills.php">See All</a></label> (Click to view existed data.)</label></td>
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