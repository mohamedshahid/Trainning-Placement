<?php include("header.php") ?>


<div id="section">
<div id="innersection">
<?= form_open('student/update_profile_setting');?>
<table cellspacing="2" cellpadding="5" style="border-collapse:collapse" align="center">
<tr>
<td><label class="labels">Username</label></td>
<td><?php echo $row->JobSeekerID; ?></td>
</tr>
<tr>
<td><label class="labels">Old Password</label><font color="red">*</font></td>
<td><?= form_password(['name'=>'oldpass','class'=>'textfields'])?></td>
</tr>
<tr>
<td><label class="labels">New Password</label><font color="red">*</font></td>
<td><?= form_password(['name'=>'newpass','class'=>'textfields'])?></td>
</tr>
<tr>
<td><label class="labels">Verify New Password</label><font color="red">*</font></td>
<td><?= form_password(['name'=>'password','class'=>'textfields'])?></td>
</tr>
<tr>
<td><label class="labels">Hint Question</label><font color="red">*</font></td>
<td><select class="textfields" name="HintQuestion">
<option selected="selected">-- Select --</option>
<option <?php if($row->HintQuestion == "What is your father's middle name?") echo "Selected='selected'"; ?>>What is your father's middle name?</option>
      <option <?php if($row->HintQuestion == "What is your pet name?") echo "Selected='selected'"; ?>>What is your pet name?</option>
</select></td>
</tr>
<tr>
<td><label class="labels">Answer</label><font color="red">*</font></td>
<td><?= form_input(['name'=>'Answer','class'=>'textfields','value'=>set_value('Answer',$row->Answer)])?></td>
</tr>
<tr>
<td colspan="2" align="right"><?= form_submit(['value'=>'Update','class'=>'btn']);?></td>
</tr>
<tr>
    <td colspan="2" style="text-align:center"></td>
    </tr>
</table>
<?= form_close();?>
</div>
</div>

<?php include("footer.php") ?>