<?php include("header.php"); ?>

<div id="collegepic"></div>

<div id="section">
<div id="statusbar">
<div class="welcome-text">Welcome <?php
    if(isset($_SESSION['studentname']))
    {
    echo "<span>" .$_SESSION['studentname']. "</span>";
    }
    else
    {
        echo "<span>Guest</span>";
    }
    ?></div>
</div>
<div id="innersection">
<h2 style="text-align:center">Forgot password - Student</h2>
<?php echo form_open('student/forget_password');?>
<table id="innerTable">
<tr>
<td colspan="2"><h3 style="text-align:center">Forgot password</h3>
  <hr noshade="noshade" color="navy" /></td>
</tr>
<tr>
<td><label>Username: </label></td>
<td><?= form_input('JobSeekerID');?></td>
</tr>
<tr>
<td><label>Hint Question: </label></td>
<td><select name="HintQuestion">
  <option id="0">-- Select --</option>
  <?php foreach($rows as $row): ?>
  <option id="<?php echo $row->QuestionId; ?>"><?php echo $row->Question; ?></option>
  <?php endforeach; ?>
</td>
</tr>
<tr>
<td><label>Answer: </label></td>
<td><?= form_input('Answer');?></td>
</tr>
<tr>
<td colspan="2" align="center"><?= form_input(['name'=>'submit','value'=>'Submit','type'=>'submit']);?>
&nbsp;&nbsp;&nbsp;<?= form_reset('reset','Reset');?></td>
</tr>
<?= form_close();?>
</table>


<br>
<table border="0" align="center">
<tr>
<td style="text-align:center">
  <?php if ($error = $this->session->flashdata('forget_password')) {
    # code...
    echo $error;
  } ?>
</td>
</tr>
</table>
</div>
</div>

<?php include("footer.php");?>